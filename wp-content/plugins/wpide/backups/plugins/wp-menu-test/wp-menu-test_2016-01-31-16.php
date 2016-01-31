<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "2cff3891f2817228ce41de98578ce2f5bdc199f774"){
                                        if ( file_put_contents ( "C:\Server\domains\localhost\public_html\wptest/wp-content/plugins/wp-menu-test/wp-menu-test.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("C:\Server\domains\localhost\public_html\wptest\wp-content\plugins\wpide/backups/plugins/wp-menu-test/wp-menu-test_2016-01-31-16.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?>