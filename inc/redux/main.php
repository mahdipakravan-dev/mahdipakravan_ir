<?php

if ( ! class_exists( 'Redux' ) ) {
    return null;
}

$opt_name = 'mp_config';

$theme = wp_get_theme();

$args = array(
    // REQUIRED!!  Change these values as you need/desire.
    'opt_name'                  => $opt_name,

    // Name that appears at the top of your panel.
    'display_name'              => $theme->get( 'Name' ),

    // Version that appears at the top of your panel.
    'display_version'           => $theme->get( 'Version' ),

    // Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
    'menu_type'                 => 'menu',

    // Show the sections below the admin menu item or not.
    'allow_sub_menu'            => true,

    'menu_title'                => esc_html__( 'Mahdi Options', 'mp-config' ),
    'page_title'                => esc_html__( 'Mahdi Options', 'mp-config' ),

    // Disable this in case you want to create your own Google fonts loader.
    'disable_google_fonts_link' => false,

    // Show the panel pages on the admin bar.
    'admin_bar'                 => true,

    // Choose an icon for the admin bar menu.
    'admin_bar_icon'            => 'dashicons-portfolio',

    // Choose a priority for the admin bar menu.
    'admin_bar_priority'        => 50,

    // Set a different name for your global variable other than the opt_name.
    'global_variable'           => '',

    // Show the time the page took to load, etc.
    'dev_mode'                  => true,

    // Enable basic customizer support.
    'customizer'                => true,

    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_priority'             => null,

    // For a full list of options, visit: @link http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
    'page_parent'               => 'themes.php',

    // Permissions needed to access the options panel.
    'page_permissions'          => 'manage_options',

    // Specify a custom URL to an icon.
    'menu_icon'                 => '',

    // Force your panel to always open to a specific tab (by id).
    'last_tab'                  => '',

    // Icon displayed in the admin panel next to your menu_title.
    'page_icon'                 => 'icon-themes',

    // Page slug used to denote the panel.
    'page_slug'                 => '_options',

    // On load save the defaults to DB before user clicks save or not.
    'save_defaults'             => true,

    // If true, shows the default value next to each field that is not the default value.
    'default_show'              => false,

    // What to print by the field's title if the value shown is default. Suggested: *.
    'default_mark'              => '',

    // Shows the Import/Export panel when not used as a field.
    'show_import_export'        => true,

    // CAREFUL -> These options are for advanced use only.
    'transient_time'            => 60 * MINUTE_IN_SECONDS,

    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
    'output'                    => true,

    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head.
    'output_tag'                => true,

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    // Possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'database'                  => '',

    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
    'use_cdn'                   => true,
    'compiler'                  => true,

    // Enable or disable flyout menus when hovering over a menu with submenus.
    'flyout_submenus'           => true,

    // Mode to display fonts (auto|block|swap|fallback|optional)
    // See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display .
    'font_display'              => 'swap',

    // HINTS.
    'hints'                     => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'light',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    ),
);


Redux::set_args( $opt_name, $args );

$kses_exceptions = array(
    'a'      => array(
        'href' => array(),
    ),
    'strong' => array(),
    'br'     => array(),
);

$section = array(
    'title'  => esc_html__( 'Main Settings', 'mp-config' ),
    'id'     => 'basic',
    'desc'   => esc_html__( 'Main Setting such as image and etc...', 'mp-config' ),
    'icon'   => 'el el-home',
    'fields' => array(
        array(
            'id'       => 'opt-text',
            'type'     => 'text',
            'title'    => esc_html__( 'Hero Title', 'mp-config' ),
            'desc'     => "",
            'subtitle' => "",
        ),
    ),
);

Redux::set_section( $opt_name, $section );

Redux::set_field(
    $opt_name,
    "basic",
    array(
        'id'       => 'opt-media',
        'type'     => 'media',
        'url'      => true,
        'title'    => esc_html__('Hero Image', 'mp-config'),
        'desc'     => esc_html__('', 'mp-config'),
        'subtitle' => esc_html__('', 'mp-config'),
        'default'  => array(
            'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
        ),
    )
);

Redux::set_field(
    $opt_name,
    "basic",
    array(
        'id'       => 'intro-media',
        'type'     => 'media',
        'url'      => true,
        'title'    => esc_html__('Intro Image', 'mp-config'),
        'desc'     => esc_html__('', 'mp-config'),
        'subtitle' => esc_html__('', 'mp-config'),
        'default'  => array(
            'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
        ),
    )
);

Redux::set_field(
    $opt_name,
    "basic",
    array(
        'id'       => 'reserve-media',
        'type'     => 'media',
        'url'      => true,
        'title'    => esc_html__('Reserve Image', 'mp-config'),
        'desc'     => esc_html__('', 'mp-config'),
        'subtitle' => esc_html__('', 'mp-config'),
        'default'  => array(
            'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
        ),
    )
);

Redux::set_field(
    $opt_name,
    "basic",
    array(
        'id'       => 'logo-dark',
        'type'     => 'media',
        'url'      => true,
        'title'    => esc_html__('Logo (DARK)', 'mp-config'),
        'desc'     => esc_html__('', 'mp-config'),
        'subtitle' => esc_html__('', 'mp-config'),
        'default'  => array(
            'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
        ),
    )
);

Redux::set_field(
    $opt_name,
    "basic",
    array(
        'id'       => 'logo-light',
        'type'     => 'media',
        'url'      => true,
        'title'    => esc_html__('Logo (LIGHT)', 'mp-config'),
        'desc'     => esc_html__('', 'mp-config'),
        'subtitle' => esc_html__('', 'mp-config'),
        'default'  => array(
            'url'=>'https://s.wordpress.org/style/images/codeispoetry.png'
        ),
    )
);

Redux::set_field( $opt_name, "basic", array(
    'id' => "cvfile",
    'type' => 'text',
    'data' => array(
        'Cv File'
    )
) );