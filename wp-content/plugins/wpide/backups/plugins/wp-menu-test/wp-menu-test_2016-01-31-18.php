<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "2cff3891f2817228ce41de98578ce2f5bdc199f774"){
                                        if ( file_put_contents ( "C:\Server\domains\localhost\public_html\wptest/wp-content/plugins/wp-menu-test/wp-menu-test.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\Server\domains\localhost\public_html\wptest\wp-content\plugins\wpide/backups/plugins/wp-menu-test/wp-menu-test_2016-01-31-18.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
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