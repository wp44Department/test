add_action( 'admin_menu', 'tutsplus_admin_menu' );
/**
 * Adds a 'Tuts+ Options' submenu to the 'Settings'
 * menu in the WordPress administration menu.
 */
function tutsplus_admin_menu() {
 
    add_submenu_page(
        'options-general.php',
        'tutsplus-admin-menu',
        'Tuts+ Options',
        'manage_options',
        'tutsplus-admin-menu-top',
        'tutsplus_admin_options'
    );
}