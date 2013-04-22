<?php
//This is the function that displays the custom login screen
function custom_admin_branding_login() {
	$templateURL = get_bloginfo('template_url');
	echo '
	<style>
	.login h1 a { 
		background: url(' . $templateURL . '/_/img/admin/logo-login.jpg) center top no-repeat;
	}
	</style>
		';
	}
add_action('login_head', 'custom_admin_branding_login');



//Change the URL to the logo on the Login Page
function change_wp_login_url() {
	return get_bloginfo('url');
}
add_filter('login_headerurl', 'change_wp_login_url');


//Change the title of the link om the logo on the Login Page
function change_wp_login_title() {
	return get_option('blogname');
}
add_filter('login_headertitle', 'change_wp_login_title');



//This function places the custom footer at the bottom of every WordPress Admin page.  Change the file in the images folder to replace.  You will also want to change the link (in the code below) that the footer image is pointing to.
add_filter( 'admin_footer_text', 'custom_admin_branding_footer_text' );
function custom_admin_branding_footer_text($default_text)  {
	$templateURL = get_bloginfo('template_url');
	echo '<span>';
	echo '<img style="vertical-align:middle;padding-right:10px" src="'. $templateURL .'/_/img/admin/logo-brand.png">';
	echo 'Website built by <a href="http://www.yourdomain.com">Your Domain</a>';
	echo '</span>';
}

?>