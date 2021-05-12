<?php

//Like Our Facebook Page 
function facebookbutton_shortcode() {
    return '<a href="https://www.facebook.com/Book-Worm-101199418793553">Like Our Facebook Page !</a>';
}
add_shortcode('facebookbutton', 'facebookbutton_shortcode'); 


//Outputs username of currently logged in user
function username_function( $atts ) {
	global $current_user, $user_login;
      	get_currentuserinfo();
	add_filter('widget_text', 'do_shortcode');
	return $current_user->display_name ;
}
add_shortcode('username', 'username_function');

//Outputs the current date 
function date_shortcode( ) {
return "<p>Today's date is " . date('d-m-Y') . ".</p>";
}
add_shortcode( 'current_date', 'date_shortcode' );

//Add Users Avatar 
function avatar_shortcode($atts, $content = null) {
   extract( shortcode_atts( 
           array('id' => '0',), $atts 
                          ) 
           );

   return get_avatar( $user_id, 96 ); 
}
add_shortcode('avatar','avatar_shortcode');

//Link to 'Shop by Category'
function shop_shortcode() {
    return '<a href="https://book-worm-85d15d.ingress-earth.easywp.com/the-book-worm/">Head Over To Our Shop To Purchase These Best Sellers !</a>';
}
add_shortcode('shopbutton', 'shop_shortcode');


// Shortcode for youtube video about top 10 best sellers
function bestsellingvideo_shortcode($attr){
 
    $args = shortcode_atts(array(
                    'src' => 'https://youtu.be/gyK9USvrvDQ?t=130',
                    'height' => '360px',
                    'width' => '800px',
                    'poster' => '',
                    'loop' => '',
                    'autoplay' => 'autoplay',
                    'preload' => 'preload',
                    'class' => '',
                ), $attr);
 
    $video = wp_video_shortcode(array(
 
                    'src' => $args['src'],
                    'height' => $args['height'],
                    'width' => $args['width'],
                    'poster' => $args['poster'],
                    'loop' => $args['loop'],
                    'autoplay' => $args['autoplay'],
                    'preload' => $args['preload'],
                    'class' => 'wp-video-shortcode '.$args['class'],
                ));
 
    return $video;
}
 
add_shortcode('bestselling-video', 'bestsellingvideo_shortcode');


//Link to 'Wishlist'
function wishlist_shortcode() {
    return '<a href="https://book-worm-85d15d.ingress-earth.easywp.com/wishlist/">Go to your Wishlist to add your favourite books to cart</a>';
}
add_shortcode('wishlistbutton', 'wishlist_shortcode');
?>

