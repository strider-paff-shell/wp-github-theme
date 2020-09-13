<?php

function addCustomCSS()
{
    wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri() . '/res/css/bootstrap/bootstrap.css');
    wp_enqueue_style('fontawesome_css', get_stylesheet_directory_uri() . '/res/css/fontawesome/all.css');
}

function addCustomScripts()
{
    wp_enqueue_script('jquery_script',get_stylesheet_directory_uri() . '/res/js/jquery/jquery.js');
    wp_enqueue_script('bootstrap_script', get_stylesheet_directory_uri() . '/res/js/bootstrap/bootstrap.js');
    wp_enqueue_script('popper_script', get_stylesheet_directory_uri() . '/res/js/popper/popper.js');
}

function addCSS()
{
    addCustomCSS();
    wp_enqueue_style('main_theme', get_stylesheet_directory_uri() . '/res/css/theme/theme.css');
}

function registerMenus()
{
    register_nav_menus(
        [
            'primary_nav' => __('Primary Navigation Menu'),
            'footer_nav' => __('Footer Navigation Menu')
        ]
    );
}

function registerDefaultHeaderImage()
{
    $headerimage = array(
        'default-image' => get_stylesheet_directory_uri() . '/res/images/header.png',
        'width' => 1920,
        'height' => 1080,
        'flex-height' => false,
        'flex-width' => true,
        'uploads' => true,
        'random-default' => false,
        'header-text' => true,
        'default-text-color' => '',
        'wp-head-callback' => '',
        'admin-head-callback' => '',
        'admin-preview-callback' => '',
    );
    add_theme_support('custom-header', $headerimage);
}


function sidebar_widgets_init() {

    register_sidebar( array(
        'name'          => 'Sidebar Wigdets',
        'id'            => 'sidebar_widgets',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<b>',
        'after_title'   => '</b>',
    ) );

}

function themeExcerptLength($length)
{
    if( is_admin() )
    {
        return $length;
    }

    return 35;
}

function themeExcerptMoreLink($more)
{
    return sprintf( ' <a href="%1$s" class="more-link">'. translate('More') . ' ...</a>',
        esc_url( get_permalink( get_the_ID() ) )
    );
}

//theme functions
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count=='')
    {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count=='')
    {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


function comment_date_format($comment_id)
{
    $d = "M j, Y";
    $comment_date = get_comment_date( $d, $comment_id );
    return $comment_date;
}

function getAuthorAvatar($email, $size)
{
    if(get_user_by('email', $email) !== false)
    {
        if (function_exists('get_avatar'))
        {
            $grav_url = get_avatar_url($email,$size);
        }
        else
        {
            $grav_url = "http://2.gravatar.com/avatar/875060e2f558ce1eca5b85901d907aea?s=" . $size . "&d=mm&f=y&r=g";
        }
    }
    else
    {
        $grav_url = "http://2.gravatar.com/avatar/875060e2f558ce1eca5b85901d907aea?s=" . $size . "&d=mm&f=y&r=g";
    }
    return $grav_url;
}

//add_actions
add_action('wp_enqueue_scripts', 'addCSS');
add_action('wp_enqueue_scripts', 'addCustomScripts');
add_action('init', 'registerMenus');
add_action('after_setup_theme', 'registerDefaultHeaderImage');
add_action( 'widgets_init', 'sidebar_widgets_init' );
add_filter( 'excerpt_length', 'themeExcerptLength', 999);
add_filter( 'excerpt_more', 'themeExcerptMoreLink');