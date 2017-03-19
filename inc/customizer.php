<?php
/**
 * business Theme Customizer
 *
 * @package business
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function business_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

}
add_action( 'customize_register', 'business_customize_register' );


function header_banner_customize_register ($wp_customize) {
    $wp_customize->add_section( 'header_banner' , array(
        'title'      => __( 'Header banner', 'business' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'header_banner_first' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_setting( 'header_banner_second' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_setting( 'header_banner_third' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_banner_first', array(
        'label'      => __( 'Add your first banner', 'business' ),
        'section'    => 'header_banner',
        'settings'   => 'header_banner_first',
    ) ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_banner_second', array(
        'label'      => __( 'Add your second banner', 'business' ),
        'section'    => 'header_banner',
        'settings'   => 'header_banner_second',
    ) ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_banner_third', array(
        'label'      => __( 'Add your third banner', 'business' ),
        'section'    => 'header_banner',
        'settings'   => 'header_banner_third',
    ) ) );
}
add_action( 'customize_register', 'header_banner_customize_register' );

function footer_logo_customize_register ($wp_customize) {

    $wp_customize->add_section( 'footer_logo' , array(
        'title'      => __( 'Footer logo', 'business' ),
        'priority'   => 60,
    ) );

    $wp_customize->add_setting( 'footer_logo_images' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_images', array(
        'label'      => __( 'Add your logo', 'business' ),
        'section'    => 'footer_logo',
        'settings'   => 'footer_logo_images',
    ) ) );
}
add_action( 'customize_register', 'footer_logo_customize_register' );


function admin_photo_customize_register ($wp_customize) {

    $wp_customize->add_section( 'admin_photo' , array(
        'title'      => __( 'Admin photo', 'business' ),
        'priority'   => 60,
    ) );

    $wp_customize->add_setting( 'admin_images' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'admin_images', array(
        'label'      => __( 'Add your logo', 'business' ),
        'section'    => 'admin_photo',
        'settings'   => 'admin_images',
    ) ) );
}
add_action( 'customize_register', 'admin_photo_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function business_customize_preview_js() {
	wp_enqueue_script( 'business_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'business_customize_preview_js' );
