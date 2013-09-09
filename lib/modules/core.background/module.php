<?php

/*
 * The background core options for the Shoestrap theme
 */
if ( !function_exists( 'shoestrap_module_background_options' ) ) {
  function shoestrap_module_background_options( $sections ) {
    global $redux;

    //Background Patterns Reader
    $bg_pattern_images_path = get_template_directory() . '/assets/img/patterns';
    $bg_pattern_images_url  = get_template_directory_uri() . '/assets/img/patterns/';
    $bg_pattern_images      = array();

    if ( is_dir( $bg_pattern_images_path ) ) :
      if ( $bg_pattern_images_dir = opendir( $bg_pattern_images_path ) ) :
      	$bg_pattern_images = array();

        while ( ( $bg_pattern_images_file = readdir( $bg_pattern_images_dir ) ) !== false ) {
          if( stristr( $bg_pattern_images_file, '.png' ) !== false || stristr( $bg_pattern_images_file, '.jpg' ) !== false )
            array_push( $bg_pattern_images, $bg_pattern_images_url . $bg_pattern_images_file );
        }

      endif;
    endif;

    // Blog Options
    $section = array(
  		'title' => __( 'Background', 'shoestrap' ),
  		'icon'  => 'elusive icon-photo icon-large',
  	);   

    $fields[] = array(
      'title'     => __( 'Background Color', 'shoestrap' ),
      'subtitle'  => __( 'Select a background color for your site. Default: #ffffff.', 'shoestrap' ),
      'id'        => 'color_body_bg',
      'std'       => '#ffffff',
      'compiler'  => true,
      'customizer'=> array(),
      'type'      => 'color',
    );

    $fields[] = array(
      'title'     => __( 'Background Color Opacity', 'shoestrap' ),
      'subtitle'  => __( 'Select the opacity of your background color. This will make the main content area transparent, so that background images and patterns will show through. Default: 100 (fully opaque)', 'shoestrap' ),
      'id'        => 'color_body_bg_opacity',
      'std'       => 100,
      'min'       => 0,
      'step'      => 1,
      'max'       => 100,
      'advanced'  => true,
      'type'      => 'slider',
    );

    $fields[] = array(
      'title'     => '',
      'subtitle'  => '',
      'id'        => 'help4',
      'std'       => '<h3 style=\'margin: 0 0 10px;\'>Background Images</h3>
                      <p>If you want a background image, you can select one here.
                      You can either upload a custom image, or use one of our pre-defined image patterns.
                      If you both upload a custom image and select a pattern, your custom image will override the selected pattern.
                      Please note that the image only applies to the area on the right and left of the main content area,
                      to ensure better content readability. You can also set the background position to be fixed or scroll!</p>',
      'icon'      => true,
      'type'      => 'info'
    );

    $fields[] = array(
      'title'     => __( 'Use a Background Image', 'shoestrap' ),
      'subtitle'  => __( 'Enable this option to upload a custom background image for your site. This will override any patterns you may have selected. Default: OFF.', 'shoestrap' ),
      'id'        => 'background_image_toggle',
      'std'       => 0,
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __( 'Upload a Custom Background Image', 'shoestrap' ),
      'subtitle'  => __( 'Upload a Custom Background image using the media uploader, or define the URL directly.', 'shoestrap' ),
      'id'        => 'background_image',
      'fold'      => 'background_image_toggle',
      'std'       => '',
      'type'      => 'media',
      'customizer'=> array(),
    );

    $fields[] = array(
      'title'     => __( 'Background position', 'shoestrap' ),
      'subtitle'  => __( 'Changes how the background image or pattern is displayed from scroll to fixed position. Default: Fixed.', 'shoestrap' ),
      'id'        => 'background_fixed_toggle',
      'std'       => 1,
      'on'        => __( 'Fixed', 'shoestrap' ),
      'off'       => __( 'Scroll', 'shoestrap' ),
      'type'      => 'switch',
      'fold'      => 'background_image_toggle'
    );

    $fields[] = array(
      'title'     => __( 'Background Image Positioning', 'shoestrap' ),
      'subtitle'  => __( 'Allows the user to modify how the background displays. By default it is full width and stretched to fill the page. Default: Full Width.', 'shoestrap' ),
      'id'        => 'background_image_position_toggle',
      'std'       => 0,
      'fold'      => 'background_image_toggle',
      'on'        => __( 'Custom', 'shoestrap' ),
      'off'       => __( 'Full Width', 'shoestrap' ),
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __( 'Background Repeat', 'shoestrap' ),
      'subtitle'  => __( 'Select how (or if) the selected background should be tiled. Default: Tile', 'shoestrap' ),
      'id'        => 'background_repeat',
      'fold'      => 'background_image_position_toggle',
      'std'       => 'repeat',
      'type'      => 'select',
      'options'   => array(
        'no-repeat'  => __( 'No Repeat', 'shoestrap' ),
        'repeat'     => __( 'Tile', 'shoestrap' ),
        'repeat-x'   => __( 'Tile Horizontally', 'shoestrap' ),
        'repeat-y'   => __( 'Tile Vertically', 'shoestrap' ),
      ),
    );

    $fields[] = array(
      'title'     => __( 'Background Alignment', 'shoestrap' ),
      'subtitle'  => __( 'Select how the selected background should be horizontally aligned. Default: Left', 'shoestrap' ),
      'id'        => 'background_position_x',
      'fold'      => 'background_image_position_toggle',
      'std'       => 'repeat',
      'type'      => 'select',
      'options'   => array(
        'left'    => __( 'Left', 'shoestrap' ),
        'right'   => __( 'Right', 'shoestrap' ),
        'center'  => __( 'Center', 'shoestrap' ),
      ),
    );

    $fields[] = array(
      'title'     => __( 'Use a Background Pattern', 'shoestrap' ),
      'subtitle'  => __( 'Select one of the already existing Background Patterns. Default: OFF.', 'shoestrap' ),
      'id'        => 'background_pattern_toggle',
      'std'       => 0,
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __( 'Choose a Background Pattern', 'shoestrap' ),
      'subtitle'  => __( 'Select a background pattern.', 'shoestrap' ),
      'id'        => 'background_pattern',
      'fold'      => 'background_pattern_toggle',
      'std'       => '',
      'tiles'			=> true,
      'type'      => 'image_select',
      'options'   => $bg_pattern_images,
    );
    
    $section['fields'] = $fields;

    do_action( 'shoestrap_module_background_options_modifier' );
    
    array_push( $sections, $section );
    return $sections;

  }
}
add_action( 'shoestrap_add_sections', 'shoestrap_module_background_options', 60 );

include_once( dirname(__FILE__) . '/functions.background.php' );