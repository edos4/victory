<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'general' => array(
	'title' => esc_html__('General', 'modular'),
	'type' => 'tab',
	'options' => array(
	    'general-box' => array(
		'title' => esc_html__('General Settings', 'modular'),
		'type' => 'box',
		'options' => array(
		    'menu_style' => array(
			'label' => __('Menu Style', 'modular'),
			'type' => 'image-picker',
			'value' => 'menu-3',
			'desc' => __('Select Menu style.', 'modular'),
			'choices' => array(
			    'menu-1' => array(
				'small' => array(
				    'height' => 70,
				    'src' => MODULAR_IMAGES . '/image-picker/menu-style-1.png'
				),
				'large' => array(
				    'height' => 214,
				    'src' => MODULAR_IMAGES . '/image-picker/menu-style-1.png'
				),
			    ),
			    'menu-2' => array(
				'small' => array(
				    'height' => 70,
				    'src' => MODULAR_IMAGES . '/image-picker/menu-style-2.png'
				),
				'large' => array(
				    'height' => 214,
				    'src' => MODULAR_IMAGES . '/image-picker/menu-style-2.png'
				),
			    ),
			    'menu-3' => array(
				'small' => array(
				    'height' => 70,
				    'src' => MODULAR_IMAGES . '/image-picker/menu-style-3.png'
				),
				'large' => array(
				    'height' => 214,
				    'src' => MODULAR_IMAGES . '/image-picker/menu-style-3.png'
				),
			    ),
			    'menu-4' => array(
				'small' => array(
				    'height' => 70,
				    'src' => MODULAR_IMAGES . '/image-picker/menu-style-4.png'
				),
				'large' => array(
				    'height' => 214,
				    'src' => MODULAR_IMAGES . '/image-picker/menu-style-4.png'
				),
			    )
			),
		    ),
		    'onepagenav' => array(
			'type' => 'switch',
			'label' => esc_html__('One page menu', 'modular'),
			'desc' => esc_html__('If this One page style than set YES.  If multi page style set NO', 'modular'),
			'value' => 'no',
			'right-choice' => array(
			    'value' => 'yes',
			    'label' => esc_html__('Yes', 'modular'),
			),
			'left-choice' => array(
			    'value' => 'no',
			    'label' => esc_html__('No', 'modular'),
			),
		    ),
		    'full_width' => array(
			'type' => 'switch',
			'label' => esc_html__('Menu Full Width', 'modular'),
			'desc' => esc_html__('Enable menu full width?', 'modular'),
			'value' => 'yes',
			'right-choice' => array(
			    'value' => 'yes',
			    'label' => esc_html__('Yes', 'modular'),
			),
			'left-choice' => array(
			    'value' => 'no',
			    'label' => esc_html__('No', 'modular'),
			),
		    ),
		    'menu_search' => array(
			'type' => 'switch',
			'label' => esc_html__('Menu Search Button', 'modular'),
			'desc' => esc_html__('Are you interested to use menu search button?', 'modular'),
			'value' => 'yes',
			'right-choice' => array(
			    'value' => 'yes',
			    'label' => esc_html__('Yes', 'modular'),
			),
			'left-choice' => array(
			    'value' => 'no',
			    'label' => esc_html__('No', 'modular'),
			),
		    ),
		    'menu_logo' => array(
			'label' => esc_html__('Default Logo', 'modular'),
			'desc' => esc_html__('Add your website menu default logo', 'modular'),
			'type' => 'upload',
		    ),
		    'scroll_logo' => array(
			'label' => esc_html__('Primary Logo', 'modular'),
			'desc' => esc_html__('This primary logo will displayed when your menu scroll to down for a certain period', 'modular'),
			'type' => 'upload',
		    ),
		    'favicon' => array(
			'label' => esc_html__('Favicon', 'modular'),
			'desc' => esc_html__('Upload a favicon image (32x32 px)', 'modular'),
			'type' => 'upload'
		    ),
		    'loader' => array(
			'type' => 'switch',
			'label' => esc_html__('Pre Loader', 'modular'),
			'desc' => esc_html__('Are you interested to use preloader?', 'modular'),
			'right-choice' => array(
			    'value' => 'yes',
			    'label' => esc_html__('Yes', 'modular'),
			),
			'left-choice' => array(
			    'value' => 'no',
			    'label' => esc_html__('No', 'modular'),
			),
		    ),
		    'scrollup' => array(
			'type' => 'switch',
			'label' => esc_html__('Scrollup', 'modular'),
			'desc' => esc_html__('Are you interested to use scrollup?', 'modular'),
			'right-choice' => array(
			    'value' => 'yes',
			    'label' => esc_html__('Yes', 'modular'),
			),
			'left-choice' => array(
			    'value' => 'no',
			    'label' => esc_html__('No', 'modular'),
			),
		    ),
		    'site_icon_192' => array(
			'label' => esc_attr__('Large Favicon', 'modular'),
			'desc' => esc_html__('Upload a Favicon for larger display (192x192 px)', 'modular'),
			'type' => 'upload',
			'images_only' => true,
		    ),
		    'site_icon_180' => array(
			'label' => esc_attr__('Apple Touch Icon', 'modular'),
			'desc' => esc_html__('Upload a Apple Touch Icon (180x180 px)', 'modular'),
			'type' => 'upload',
			'images_only' => true,
		    ),
		    'site_icon_270' => array(
			'label' => esc_html__('Microsoft Tile Image', 'modular'),
			'desc' => esc_html__('Upload a Favicon for Microsoft devices (270x270 px)', 'modular'),
			'type' => 'upload',
			'images_only' => true,
		    )
		),
	    ),
	)
    )
);
