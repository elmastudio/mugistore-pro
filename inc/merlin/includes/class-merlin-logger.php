<?php
/**
 * The logger class, which will log message during demo import.
 */

class Merlin_Logger extends ProteusThemes\WPContentImporter2\WPImporterLogger {
	
	/**
	 * The instance *Singleton* of this class
	 *
	 * @var object
	 */
	private static $instance;


	/**
	 * Returns the *Singleton* instance of this class.
	 *
	 * @return object EasyDigitalDownloadsFastspring *Singleton* instance.
	 *
	 * @codeCoverageIgnore Nothing to test, default PHP singleton functionality.
	 */
	public static function get_instance() {
		if ( null === static::$instance ) {
			static::$instance = new static();
		}

		return static::$instance;
	}


	/**
	 * Private clone method to prevent cloning of the instance of the *Singleton* instance.
	 *
	 * @return void
	 */
	public function __clone() {}


	/**
	 * Private unserialize method to prevent unserializing of the *Singleton* instance.
	 *
	 * @return void
	 */
	public function __wakeup() {}
}
