var Merlin = (function (wp, $) {
  var t;

  // callbacks from form button clicks.
  var callbacks = {
    install_child: function (btn) {
      var installer = new ChildTheme()
      installer.init(btn)
    },
    install_plugins: function (btn) {
      var plugins = new PluginManager()
      plugins.init(btn)
    },
    install_content: function (btn) {
      var content = new ContentManager()
      content.init(btn)
    }
  }

  function window_loaded() {
    var body = $(".merlin__body"),
      drawer_trigger = $("#merlin__drawer-trigger");
      drawer_opened = "merlin__drawer--open";

    setTimeout(function () {
      body.addClass("loaded")
    }, 100)

    drawer_trigger.on("click", function () {
      body.toggleClass(drawer_opened)
    })

    $(".merlin__button--proceed:not(.merlin__button--closer)").click(function (e) {
      e.preventDefault()
      var goTo = this.getAttribute("href")

      body.addClass("exiting")

      setTimeout(function () {
        window.location = goTo
      }, 400)
    })

    $(".merlin__button--closer").on("click", function (e) {
      body.removeClass(drawer_opened)

      e.preventDefault()
      var goTo = this.getAttribute("href")

      setTimeout(function () {
        body.addClass("exiting")
      }, 600)

      setTimeout(function () {
        window.location = goTo
      }, 1100)
    })

    $(".button-next").on("click", function (e) {
      e.preventDefault()
      var loading_button = merlin_loading_button(this)
      if (!loading_button) {
        return false
      }
      var data_callback = $(this).data("callback")
      if (data_callback && typeof callbacks[data_callback] !== "undefined") {
        // We have to process a callback before continue with form submission.
        callbacks[data_callback](this)
        return false
      } else {
        return true
      }
    })

    $(document).on("change", ".js-merlin-demo-import-select", function () {
      var selectedIndex = $(".js-merlin-demo-import-select").val()

      $(".js-merlin-select-spinner").show()

      $.post(
        merlin_params.ajaxurl,
        {
          action: "merlin_update_selected_import_data_info",
          wpnonce: merlin_params.wpnonce,
          selected_index: selectedIndex
        },
        function (response) {
          if (response.success) {
            $(".js-merlin-drawer-import-content").html(response.data)
          } else {
            alert(merlin_params.texts.something_went_wrong)
          }

          $(".js-merlin-select-spinner").hide()
        }
      ).fail(function () {
        $(".js-merlin-select-spinner").hide()
        alert(merlin_params.texts.something_went_wrong)
      })
    })
  }

  function ChildTheme() {
    var body = $(".merlin__body")
    var complete,
      notice = $("#child-theme-text")

    function ajax_callback(r) {
      if (typeof r.done !== "undefined") {
        setTimeout(function () {
          notice.addClass("lead")
        }, 0)
        setTimeout(function () {
          notice.addClass("success")
          notice.html(r.message)
        }, 600)

        complete()
      } else {
        notice.addClass("lead error")
        notice.html(r.error)
      }
    }

    function do_ajax() {
      jQuery
        .post(
          merlin_params.ajaxurl,
          {
            action: "merlin_child_theme",
            wpnonce: merlin_params.wpnonce
          },
          ajax_callback
        )
        .fail(ajax_callback)
    }

    return {
      init: function (btn) {
        complete = function () {
          setTimeout(function () {
            $(".merlin__body").addClass("js--finished")
          }, 1500)

          body.removeClass(drawer_opened)

          setTimeout(function () {
            $(".merlin__body").addClass("exiting")
          }, 3500)

          setTimeout(function () {
            window.location.href = btn.href
          }, 4000)
        }
        do_ajax()
      }
    }
  }

  function PluginManager() {

    return {
        init: function (btn) {
            if ( ! wp ) {
                return;
            }

            pagenow = merlin_params.pagenow;

            var $button = $(btn);
            var notice = $('p#plugin-text');

            if ($button.hasClass('activate-now')) {
                $(".merlin__button.merlin__button--next").html(merlin_params.texts.activating);
                jQuery.post(merlin_params.ajaxurl, {
                    action: "merlin_activate_plugin",
                    wpnonce: merlin_params.wpnonce,
                    plugin: $button.data('slug'),
                }, function (r) {

                    if (typeof r.done !== "undefined") {
                        setTimeout(function () {
                            notice.addClass("lead");
                        }, 0);
                        setTimeout(function () {
                            notice.addClass("success");
                            notice.html(r.message);
                        }, 600);

                        setTimeout(function () {
                            $(".merlin__body").addClass('js--finished');
                            $(".merlin__button").removeClass('merlin__button--loading');
                            $(".merlin__button.merlin__button--next").html(merlin_params.texts.next);
                        }, 1300);

                        $('.merlin__body').removeClass(drawer_opened);
    
                        setTimeout(function () {
                            $('.merlin__body').addClass('exiting');
                        }, 3500);
    
                        setTimeout(function () {
                            window.location.href = merlin_params.next_link;
                        }, 4000);
                    } else {
                        setTimeout(function () {
                            notice.addClass("lead");
                        }, 0);
                        setTimeout(function () {
                            notice.addClass("error");
                            notice.html(r.error);
                        }, 600);
        
                        setTimeout(function () {
                            $(".merlin__button").removeClass('merlin__button--loading');
                            $(".merlin__button.merlin__button--next").data("done-loading","no").html(merlin_params.texts.try_again);
                            notice.removeClass("lead success error");
                        }, 1500);
                    }
                });

                return true;
            }

            if (
                $button.hasClass('updating-message') ||
                $button.hasClass('button-disabled')
            ) {
                return;
            }

            if (
                wp.updates.shouldRequestFilesystemCredentials &&
                !wp.updates.ajaxLocked
            ) {
                wp.updates.requestFilesystemCredentials(btn);

                $(document).on(
                    'credential-modal-cancel',
                    function () {
                        var $message = $('.merlin-install-now.updating-message');

                        $message
                            .removeClass('updating-message')
                            .text(wp.updates.l10n.installNow);

                        wp.a11y.speak(wp.updates.l10n.updateCancel, 'polite');
                    }
                );
            }
            
            wp.updates.installPlugin(
                {
                    slug: $button.data('slug'),
                    pagenow: pagenow,
                    success: function() {
                        $(".merlin__button.merlin__button--next").html(merlin_params.texts.activating);
                        jQuery.post(merlin_params.ajaxurl, {
                            action: "merlin_activate_plugin",
                            wpnonce: merlin_params.wpnonce,
                            plugin: $button.data('slug'),
                        }, function () {
                            setTimeout(function () {
                                notice.addClass("lead");
                            }, 0);
                            setTimeout(function () {
                                notice.addClass("success");
                                notice.html(merlin_params.texts.plugin_success);
                            }, 600);
    
                            setTimeout(function () {
                                $(".merlin__body").addClass('js--finished');
                                $(".merlin__button.merlin__button--next").removeClass('merlin__button--loading')
                                $(".merlin__button.merlin__button--next").html(merlin_params.texts.next);
                            }, 1300);
    
                            $('.merlin__body').removeClass(drawer_opened);
        
                            setTimeout(function () {
                                $('.merlin__body').addClass('exiting');
                            }, 3500);
        
                            setTimeout(function () {
                                window.location.href = merlin_params.next_link;
                            }, 4000);
                        });
                    },
                    error: function() {
                        setTimeout(function () {
                            notice.addClass("lead");
                        }, 0);
                        setTimeout(function () {
                            notice.addClass("error");
                            notice.html(merlin_params.texts.plugin_install_error);
                            $(".merlin__button.merlin__button--next").data("done-loading","no").html(merlin_params.texts.try_again);
                        }, 600);

                        setTimeout(function () {
                            $(".merlin__button").removeClass('merlin__button--loading updating-message button-disabled');
                            notice.removeClass("lead success error");
                        }, 1300);
                    }
                }
            );
        }
    }
}

  function ContentManager() {
    var body = $(".merlin__body")
    var complete
    var items_completed = 0
    var current_item = ""
    var $current_node
    var current_item_hash = ""
    var current_content_import_items = 1
    var total_content_import_items = 0
    var progress_bar_interval

    function ajax_callback(response) {
      console.log(response)

      var currentSpan = $current_node.find("label")
      if (typeof response == "object" && typeof response.message !== "undefined") {
        currentSpan.addClass(response.message.toLowerCase())

        if (typeof response.num_of_imported_posts !== "undefined" && 0 < total_content_import_items) {
          current_content_import_items =
            "all" === response.num_of_imported_posts ? total_content_import_items : response.num_of_imported_posts
          update_progress_bar()
        }

        if (typeof response.url !== "undefined") {
          // we have an ajax url action to perform.
          if (response.hash === current_item_hash) {
            currentSpan.addClass("status--failed")
            find_next()
          } else {
            current_item_hash = response.hash

            // Fix the undefined selected_index issue on new AJAX calls.
            if (typeof response.selected_index === "undefined") {
              response.selected_index = $(".js-merlin-demo-import-select").val() || 0
            }

            jQuery.post(response.url, response, ajax_callback).fail(ajax_callback) // recuurrssionnnnn
          }
        } else if (typeof response.done !== "undefined") {
          // finished processing this plugin, move onto next
          find_next()
        } else {
          // error processing this plugin
          find_next()
        }
      } else {
        console.log(response)
        // error - try again with next plugin
        currentSpan.addClass("status--error")
        find_next()
      }
    }

    function process_current() {
      if (current_item) {
        var $check = $current_node.find("input:checkbox")
        if ($check.is(":checked")) {
          jQuery
            .post(
              merlin_params.ajaxurl,
              {
                action: "merlin_content",
                wpnonce: merlin_params.wpnonce,
                content: current_item,
                selected_index: $(".js-merlin-demo-import-select").val() || 0
              },
              ajax_callback
            )
            .fail(ajax_callback)
        } else {
          $current_node.addClass("skipping")
          setTimeout(find_next, 300)
        }
      }
    }

    function find_next() {
      var do_next = false
      if ($current_node) {
        if (!$current_node.data("done_item")) {
          items_completed++
          $current_node.data("done_item", 1)
        }
        $current_node.find(".spinner").css("visibility", "hidden")
      }
      var $items = $(".merlin__drawer--import-content__list-item")
      var $enabled_items = $(".merlin__drawer--import-content__list-item input:checked")
      $items.each(function () {
        if (current_item == "" || do_next) {
          current_item = $(this).data("content")
          $current_node = $(this)
          process_current()
          do_next = false
        } else if ($(this).data("content") == current_item) {
          do_next = true
        }
      })
      if (items_completed >= $items.length) {
        complete()
      }
    }

    function init_content_import_progress_bar() {
      if (!$(".merlin__drawer--import-content__list-item .checkbox-content").is(":checked")) {
        return false
      }

      jQuery.post(
        merlin_params.ajaxurl,
        {
          action: "merlin_get_total_content_import_items",
          wpnonce: merlin_params.wpnonce,
          selected_index: $(".js-merlin-demo-import-select").val() || 0
        },
        function (response) {
          total_content_import_items = response.data

          if (0 < total_content_import_items) {
            update_progress_bar()

            // Change the value of the progress bar constantly for a small amount (0,2% per sec), to improve UX.
            progress_bar_interval = setInterval(function () {
              current_content_import_items = current_content_import_items + total_content_import_items / 500
              update_progress_bar()
            }, 1000)
          }
        }
      )
    }

    function valBetween(v, min, max) {
      return Math.min(max, Math.max(min, v))
    }

    function update_progress_bar() {
      $(".js-merlin-progress-bar").css("width", (current_content_import_items / total_content_import_items) * 100 + "%")

      var $percentage = valBetween((current_content_import_items / total_content_import_items) * 100, 0, 99)

      $(".js-merlin-progress-bar-percentage").html(Math.round($percentage) + "%")

      if (1 === current_content_import_items / total_content_import_items) {
        clearInterval(progress_bar_interval)
      }
    }

    return {
      init: function (btn) {
        $(".merlin__drawer--import-content").addClass("installing")
        $(".merlin__drawer--import-content").find("input").prop("disabled", true)
        complete = function () {
          $.post(merlin_params.ajaxurl, {
            action: "merlin_import_finished",
            wpnonce: merlin_params.wpnonce,
            selected_index: $(".js-merlin-demo-import-select").val() || 0
          })

          setTimeout(function () {
            $(".js-merlin-progress-bar-percentage").html("100%")
          }, 100)

          setTimeout(function () {
            body.removeClass(drawer_opened)
          }, 500)

          setTimeout(function () {
            $(".merlin__body").addClass("js--finished")
          }, 1500)

          setTimeout(function () {
            $(".merlin__body").addClass("exiting")
          }, 3400)

          setTimeout(function () {
            window.location.href = btn.href
          }, 4000)
        }
        init_content_import_progress_bar()
        find_next()
      }
    }
  }

  function merlin_loading_button(btn) {
    var $button = jQuery(btn)

    if ($button.data("done-loading") == "yes") {
      return false
    }

    var completed = false

    var _modifier = $button.is("input") || $button.is("button") ? "val" : "text"

    $button.data("done-loading", "yes")

    $button.addClass("merlin__button--loading")

    return {
      done: function () {
        completed = true
        $button.attr("disabled", false)
      }
    }
  }

  return {
    init: function () {
      t = this
      $(window_loaded)
    },
    callback: function (func) {
      console.log(func)
      console.log(this)
    }
  }
})(window.wp, jQuery);

Merlin.init()
