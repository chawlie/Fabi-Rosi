<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_left-sidebar-content',
		'title' => 'Left Sidebar Content',
		'fields' => array (
			array (
				'key' => 'field_5495f978299e2',
				'label' => 'Sidebar Image',
				'name' => 'sidebar_image',
				'type' => 'image',
				'instructions' => 'Upload image size 000 x 000',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-sidebar-left.php',
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
}
?>