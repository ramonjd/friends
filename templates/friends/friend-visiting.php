<?php get_header(); ?>
	<h1><?php printf( __( 'Hi, %s!', 'friends' ), wp_get_current_user()->user_login ); ?></h1>

	<p><?php _e( 'This is my private friends feed. Please visit your own to see the post of your friends.', 'friends' ); ?></p>
<?php get_footer(); ?>
