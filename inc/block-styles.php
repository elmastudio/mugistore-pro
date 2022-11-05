<?php

if ( function_exists( 'register_block_style' ) ) {

	function theme_register_block_styles() {

		// Image with light border
		register_block_style(
			'core/image',
			array(
				'name'  => 'border-light',
				'label' => esc_html__( 'Border Light' ),
			)
		);

		// Image with dark border
		register_block_style(
			'core/image',
			array(
				'name'  => 'border-dark',
				'label' => esc_html__( 'Border Dark' ),
			)
		);


		// AinoBlocks Button Neutral Primary
		register_block_style(
			'ainoblocks/button',
			array(
				'name'  => 'neutral-primary',
				'label' => esc_html__( 'Neutral Primary' ),
			)
		);

		// AinoBlocks Button Outline Neutral
		register_block_style(
			'ainoblocks/button',
			array(
				'name'  => 'neutral-outline',
				'label' => esc_html__( 'Neutral Outline' ),
			)
		);

		// AinoBlocks Button Ghost Neutral
		register_block_style(
			'ainoblocks/button',
			array(
				'name'  => 'neutral-ghost',
				'label' => esc_html__( 'Neutral Ghost' ),
			)
		);

		// AinoBlocks Button Ghost Neutral
		register_block_style(
			'ainoblocks/button',
			array(
				'name'  => 'neutral-text',
				'label' => esc_html__( 'Neutral Text' ),
			)
		);

	}
	add_action( 'init', 'theme_register_block_styles' );
}
