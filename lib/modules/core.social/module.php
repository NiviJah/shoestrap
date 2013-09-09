<?php

/*
 * The social core options for the Shoestrap theme
 */
if ( !function_exists( 'shoestrap_module_social_options' ) ) {
  function shoestrap_module_social_options($sections) {

    $section = array(
    		'title' => __('Social Sharing', 'shoestrap'),
    		'icon' => 'elusive icon-share icon-large',
    	);

    $fields[] = array(
      'title'     => '',
      'subtitle'  => '',
      'id'        => 'social_sharing_help_1',
      'std'       => '<h3 style=\'margin: 0 0 10px;\'>General Options</h3>',
      'icon'      => true,
      'type'      => 'info'
    );

    $fields[] = array(
      'title'     => __('Button Text', 'shoestrap'),
      'subtitle'  => __('Select the text for the social sharing button.', 'shoestrap'),
      'id'        => 'social_sharing_text',
      'std'       => 'Share',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Button Location', 'shoestrap'),
      'subtitle'  => __('Select between NONE, TOP, BOTTOM & BOTH. For archives, \'BOTH\' fallbacks in \'BOTTOM\' only.', 'shoestrap'),
      'id'        => 'social_sharing_location',
      'std'       => 'top',
      'type'      => 'select',
      'customizer'=> array(),
      'options'   => array(
        'none'    =>'None',
        'top'     =>'Top',
        'bottom'  =>'Bottom',
        'both'    =>'Both',
      )
    );

    $fields[] = array(
      'title'     => __('Button Styling', 'shoestrap'),
      'subtitle'  => __('Select between standard Bootstrap\'s button classes', 'shoestrap'),
      'id'        => 'social_sharing_button_class',
      'std'       => 'btn-default',
      'type'      => 'select',
      'customizer'=> array(),
      'options'   => array(
        'btn-default'    => 'Default',
        'btn-primary'    => 'Primary',
        'btn-success'    => 'Success',
        'btn-warning'    => 'Warning',
        'btn-danger'     => 'Danger',
      )
    );

    $fields[] = array(
      'title'     => __('Show in Posts Archives', 'shoestrap'),
      'subtitle'  => __('Show the sharing button in posts archives.', 'shoestrap'),
      'id'        => 'social_sharing_archives',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __('Show in Single Post', 'shoestrap'),
      'subtitle'  => __('Show the sharing button in single post.', 'shoestrap'),
      'id'        => 'social_sharing_single_post',
      'std'       => '1',
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __('Show in Single Page', 'shoestrap'),
      'subtitle'  => __('Show the sharing button in single page.', 'shoestrap'),
      'id'        => 'social_sharing_single_page',
      'std'       => '1',
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => '',
      'subtitle'  => '',
      'id'        => 'social_sharing_help_2',
      'std'       => '<h3 style="margin: 0 0 10px;">Select Socials</h3>',
      'icon'      => true,
      'type'      => 'info'
    );

    $fields[] = array(
      'title'     => __('Facebook', 'shoestrap'),
      'subtitle'  => __('Show the Facebook sharing icon in blog posts.', 'shoestrap'),
      'id'        => 'facebook_share',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __('Google+', 'shoestrap'),
      'subtitle'  => __('Show the Google+ sharing icon in blog posts.', 'shoestrap'),
      'id'        => 'google_plus_share',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __('LinkedIn', 'shoestrap'),
      'subtitle'  => __('Show the LinkedIn sharing icon in blog posts.', 'shoestrap'),
      'id'        => 'linkedin_share',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __('Pinterest', 'shoestrap'),
      'subtitle'  => __('Show the Pinterest sharing icon in blog posts.', 'shoestrap'),
      'id'        => 'pinterest_share',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __('Reddit', 'shoestrap'),
      'subtitle'  => __('Show the Reddit sharing icon in blog posts.', 'shoestrap'),
      'id'        => 'reddit_share',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __('Tumblr', 'shoestrap'),
      'subtitle'  => __('Show the Tumblr sharing icon in blog posts.', 'shoestrap'),
      'id'        => 'tumblr_share',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __('Twitter', 'shoestrap'),
      'subtitle'  => __('Show the Twitter sharing icon in blog posts.', 'shoestrap'),
      'id'        => 'twitter_share',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'switch'
    );

    $fields[] = array(
      'title'     => __('Email', 'shoestrap'),
      'subtitle'  => __('Show the Email sharing icon in blog posts.', 'shoestrap'),
      'id'        => 'email_share',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'switch'
    );

    $section['fields'] = $fields;
    array_push($sections, $section);

    $section = array(
    		'title' => __('Social Links', 'shoestrap'),
    		'icon' => 'elusive icon-group icon-large',
    	);
    $fields = array();

    $fields[] = array(
      'title'     => __('Blogger', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Blogger icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'blogger_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('DeviantART', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the DeviantART icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'deviantart_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Digg', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Digg icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'digg_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Dribbble', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Dribbble icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'dribbble_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Facebook', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Facebook icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'facebook_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Flickr', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Flickr icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'flickr_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('GitHub', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the GitHub icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'github_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Google+', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Google+ icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'google_plus_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('LinkedIn', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the LinkedIn icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'linkedin_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('MySpace', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the MySpace icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'myspace_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Pinterest', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Pinterest icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'pinterest_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Reddit', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Reddit icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'reddit_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('RSS', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the RSS icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'rss_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Skype', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Skype icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'skype_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('SoundCloud', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the SoundCloud icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'soundcloud_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Tumblr', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Tumblr icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'tumblr_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Twitter', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Twitter icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'twitter_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => __('Vimeo', 'shoestrap'),
      'subtitle'  => __('Provide the link you desire and the Vimeo icon will appear. To remove it, just leave it blank.', 'shoestrap'),
      'id'        => 'vimeo_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );


    $fields[] = array(
      'title'     => 'Vkontakte',
      'subtitle'  => 'Provide the link you desire and the Vkontakte icon will appear. To remove it, just leave it blank.',
      'id'        => 'vkontakte_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );

    $fields[] = array(
      'title'     => 'YouTube Link',
      'subtitle'  => 'Provide the link you desire and the YouTube icon will appear. To remove it, just leave it blank.',
      'id'        => 'youtube_link',
      'validate'  => 'url',
			'std'       => '',
      'type'      => 'text'
    );
    
    $section['fields'] = $fields;

    do_action( 'shoestrap_module_social_options_modifier' );
    
    array_push($sections, $section);
    return $sections;

  }
}
add_action( 'shoestrap_add_sections', 'shoestrap_module_social_options', 85 ); 

include_once( dirname(__FILE__).'/functions.social.php' );
