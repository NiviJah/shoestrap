<?php

/*
 * The advanced core options for the Shoestrap theme
 */
if ( !function_exists( 'shoestrap_module_advanced_options' ) ) {
  function shoestrap_module_advanced_options( $sections ) {

    // Advanced Settings
    $section = array( 
  		'title'   => __( 'Advanced', 'shoestrap' ),
  		'icon'    => 'elusive icon-cogs icon-large'
  	 );  

    $fields[] = array( 
      'title'     => __( 'Enable Advanced mode', 'shoestrap' ),
      'subtitle'  => __( 'By enabling you have a more in-depth control of Shoestrap\'s modules. Default: Off', 'shoestrap' ),
      'id'        => 'advanced_toggle',
      'std'       => 0,
      'type'      => 'switch',
      'customizer'=> array(),
    );

    $fields[] = array( 
      'title'     => __( 'Enable Retina mode', 'shoestrap' ),
      'subtitle'  => __( 'By enabling your site will be retina ready. Requires a all images to be uploaded at 2x the typical size desired, including logos. Default: On', 'shoestrap' ),
      'id'        => 'retina_toggle',
      'std'       => 1,
      'type'      => 'switch',
      'customizer'=> array(),
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Dev mode', 'shoestrap' ),
      'subtitle'  => __( 'By enabling your admin panel will have a Dev Mode Info with an output of the options object for addition debugging. Default: Off', 'shoestrap' ),
      'id'        => 'dev_mode',
      'std'       => 0,
      'type'      => 'switch',
      'customizer'=> array(),
      'fold'      => 'advanced_toggle'
    );    

    $fields[] = array( 
      'title'     => __( 'Allow shortcodes in widgets', 'shoestrap' ),
      'subtitle'  => __( 'This option allows shortcodes within widgets. Default: On.', 'shoestrap' ),
      'id'        => 'enable_widget_shortcodes',
      'compiler'      => true,
      'std'       => 1,
      'type'      => 'switch',
    );

    $fields[] = array( 
      'title'     => __( 'Google Analytics ID', 'shoestrap' ),
      'subtitle'  => __( 'Paste your Google Analytics ID here to enable analytics tracking. Your user ID should be in the form of UA-XXXXX-Y.', 'shoestrap' ),
      'id'        => 'analytics_id',
      'std'       => '',
      'type'      => 'text',
    );

    $fields[] = array( 
      'title'     => '',
      'subtitle'  => '',
      'id'        => 'help2',
      'std'       => '<h3 style=\'margin: 0 0 10px;\'>Border-Radius and Padding Base</h3>
                      <p>The following settings affect various areas of your site, most notably buttons.</p>',
      'icon'      => true,
      'type'      => 'info',
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Border-Radius', 'shoestrap' ),
      'subtitle'  => __( 'You can adjust the corner-radius of all elements in your site here. This will affect buttons, navbars, widgets and many more. Default: 4', 'shoestrap' ),
      'id'        => 'general_border_radius',
      'std'       => 4,
      'min'       => 0,
      'step'      => 1,
      'max'       => 50,
      'advanced'  => true,
      'compiler'      => true,
      'type'      => 'slider',
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Padding Base', 'shoestrap' ),
      'subtitle'  => __( 'You can adjust the padding base. This affects buttons size and lots of other cool stuff too! Default: 8', 'shoestrap' ),
      'id'        => 'padding_base',
      'std'       => 8,
      'min'       => 0,
      'step'      => 1,
      'max'       => 20,
      'advanced'  => true,
      'compiler'      => true,
      'type'      => 'slider',
      'fold'      => 'advanced_toggle'
    );

    $url = admin_url( 'widgets.php' );
    $fields[] = array( 
      'title'     => '',
      'subtitle'  => '',
      'id'        => 'help10',
      'std'       => '<h3 style=\'margin: 0 0 10px;\'>CAUTION</h3>
                      <p>The settings bellow can pottentially harm your site if you do not properly comprehend them and what they do.
                      If unsure, simply let them be.</p>',
      'icon'      => true,
      'type'      => 'info'
    );

    $url = admin_url( 'options-permalink.php' );
    $fields[] = array( 
      'title'     => __( 'URL Rewrites', 'shoestrap' ),
      'subtitle'  => __( 'Rewrites URLs, masking partially the fact that you\'re using WordPress. Please note that after you enable or disable this option, you should visit the <a href=' . $url . '>permalinks menu</a> and press <strong>save</strong>. This option requires that your .htaccess file is writable by your webserver. Default: OFF', 'shoestrap' ),
      'id'        => 'rewrites',
      'std'       => 0,
      'type'      => 'switch',
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Change uploads folder', 'shoestrap' ),
      'subtitle'  => __( 'Move your uploads folder in <strong> /media </strong>. NOTICE: By toggling this option, any files stored in default folder won\'t be accessible, and vice versa. Default: OFF', 'shoestrap' ),
      'id'        => 'upload_folder',
      'std'       => 0,
      'type'      => 'switch',
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'PJAX', 'shoestrap' ),
      'subtitle'  => __( 'Use <a href="https://github.com/defunkt/jquery-pjax" target="_blank">PJAX</a> in link tags inside NavBars, Sibebars & Breadcrumb. This cause a fast linear fadeToggle effect in main page. Default: OFF', 'shoestrap' ),
      'id'        => 'pjax',
      'std'       => 0,
      'type'      => 'switch',
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Root Relative URLs', 'shoestrap' ),
      'subtitle'  => __( 'Return URLs such as <em>/assets/css/style.css</em> instead of <em>http://example.com/assets/css/style.css</em>. Default: ON', 'shoestrap' ),
      'id'        => 'root_relative_urls',
      'std'       => 0,
      'type'      => 'switch'
    );

    $fields[] = array( 
      'title'     => __( 'Enable Nice Search', 'shoestrap' ),
      'subtitle'  => __( 'Redirects /?s=query to /search/query/, convert %20 to +. Default: ON', 'shoestrap' ),
      'id'        => 'nice_search',
      'std'       => 1,
      'type'      => 'switch'
    );

    $fields[] = array( 
      'title'     => __( 'Custom CSS', 'shoestrap' ),
      'subtitle'  => __( 'You can write your custom CSS here. This code will appear in a script tag appended in the header section of the page.', 'shoestrap' ),
      'id'        => 'user_css',
      'std'       => '',
      'type'      => 'textarea',
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Custom JS', 'shoestrap' ),
      'subtitle'  => __( 'You can write your custom JavaScript/jQuery here. The code will be included in a script tag appended to the bottom of the page.', 'shoestrap' ),
      'id'        => 'user_js',
      'std'       => '',
      'type'      => 'textarea',
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Toggle adminbar On/Off', 'shoestrap' ),
      'subtitle'  => __( 'Turn the admin bar On or Off on the frontend. Default: On.', 'shoestrap' ),
      'id'        => 'advanced_wordpress_disable_admin_bar_toggle',
      'std'       => 1,
      'customizer'=> array(),
      'type'      => 'switch',
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Minimize CSS', 'shoestrap' ),
      'subtitle'  => __( 'Minimize the genearated CSS. This should be ON for production sites. Default: OFF.', 'shoestrap' ),
      'id'        => 'minimize_css',
      'std'       => 0,
      'customizer'=> array(),
      'type'      => 'switch',
      'fold'      => 'advanced_toggle'
    );

    $fields[] = array( 
      'title'     => __( 'Debug Hooks', 'shoestrap' ),
      'subtitle'  => __( 'Turn on very useful debug hooks. These will only be visible to admins. Default: Off.', 'shoestrap' ),
      'id'        => 'debug_hooks',
      'std'       => 0,
      'customizer'=> array(),
      'type'      => 'switch',
      'fold'      => 'advanced_toggle'
    );
  
 		$section['fields'] = $fields;

    do_action( 'shoestrap_module_advanced_options_modifier' );
    
    array_push( $sections, $section );
    return $sections;

  }
}
add_action( 'shoestrap_add_sections', 'shoestrap_module_advanced_options', 95 );

include_once( dirname( __FILE__ ).'/functions.advanced.php' );
include_once( dirname( __FILE__ ).'/debug-hooks.php' );

function shoestrap_debug_hooks() {
  global $smof_data;
  if ( current_user_can( 'administrator' ) && shoestrap_getVariable( 'debug_hooks' ) == 1 ) : ?>
    <div class='panel widget-inner clearfix'>
      <div class='panel-heading'>Debug Information</div>
      <ul class='nav nav-tabs' id='debugTabs'>
        <li class='active'><a href='#SMOFData'>SMOF Data</a></li>
        <li><a href='#hooksdebug'>Wordpress Hooks</a></li>
      </ul>
      <div class='tab-content'>
        <div class='tab-pane active' id='SMOFData'>
          <?php
            $smof_data_r = print_r( $smof_data, true );
            $smof_data_r_sans = htmlspecialchars( $smof_data_r, ENT_QUOTES );
            echo '<pre>'. $smof_data_r_sans .'<pre>';
          ?>
        </div>
        <div class='tab-pane' id='hooksdebug'><?php echo list_hooks(); ?></div>
      </div>
    </div>
    <script>
      /** Fire up jQuery - let's dance! */
      jQuery( document ).ready( function( $ ){
        $( '#debugTabs a' ).click( function ( e ) {
          e.preventDefault();
          $( this ).tab( 'show' );
        })
      })
    </script>
    <?php
  endif;
}
add_action( 'shoestrap_after_content', 'shoestrap_debug_hooks' );