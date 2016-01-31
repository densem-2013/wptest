<?php
/*
Plugin Name: Menu Test
Description: WordPress plugin allows you to display an arbitrary multi-level menu in the sidebar
Version: 1.0
Author: Semiletov Denis
Author email: densem-2013@yandex.ua
Plugin URI: 
*/

define('MENUTEST_DIR', plugin_dir_path(__FILE__));
define('MENUTEST_URL', plugin_dir_url(__FILE__));

function menutest_load(){
 
    if(is_admin()) // подключаем файлы администратора, только если он авторизован
        require_once(MENUTEST_DIR.'includes/admin.php');
 
    require_once(MENUTEST_DIR.'includes/core.php');
}

menutest_load();

register_activation_hook(__FILE__, 'menutest_activation');
 
function menutest_activation() {
 
    // действие при активации
// регистрируем действие при удалении
    register_uninstall_hook(__FILE__, 'menutest_uninstall');
}
 
function menutest_uninstall(){
 
    //действие при удалении
}
?>