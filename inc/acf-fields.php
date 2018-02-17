<?php
/**
 * 
 * Campos exportados do ACF
 * 
 */
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_depoimentos',
		'title' => 'Depoimentos',
		'fields' => array (
			array (
				'key' => 'field_5a6a5c8187729',
				'label' => '',
				'name' => '',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'jetpack-portfolio',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'depoimentos',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_portfolio',
		'title' => 'Portfolio',
		'fields' => array (
			array (
				'key' => 'field_5a6a58aaf5a15',
				'label' => 'Desafio',
				'name' => 'desafio',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5a6a58bcf5a16',
				'label' => 'Solução',
				'name' => 'solucao_projeto',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5a6a58cef5a17',
				'label' => 'Impacto',
				'name' => 'impacto',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5a6a58ddf5a18',
				'label' => 'Thumbnail do Vídeo',
				'name' => 'thumbnail_do_video',
				'type' => 'image',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5a6a5fee6d547',
				'label' => 'Link do Vídeo',
				'name' => 'link_do_video',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5a6a73208d2ed',
				'label' => 'slider',
				'name' => 'slider',
				'type' => 'post_object',
				'post_type' => array (
					0 => 'brasa_slider_cpt',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'jetpack-portfolio',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_temporario-url-do-portfolio-no-site-antigo',
		'title' => 'TEMPORARIO: URL do portfólio no site antigo',
		'fields' => array (
			array (
				'key' => 'field_5a87864540440',
				'label' => 'Preencha com o URL do portfólio no site antigo',
				'name' => 'portfolio_redirect',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'jetpack-portfolio',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
