/*----------------------------------------------------------------------------*/
// redirects for login / logout
/*----------------------------------------------------------------------------*/
add_filter('woocommerce_login_redirect', 'login_redirect');

function login_redirect($redirect_to) {

 $location = $_SERVER['HTTP_REFERER'];
wp_safe_redirect($location);
exit();

}

add_action('wp_logout','logout_redirect');

function logout_redirect(){

$location = $_SERVER['HTTP_REFERER'];
wp_safe_redirect($location);
exit();

}
