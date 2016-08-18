<?php
        public class Utility {
            public static function redirect($url = 'index.php') {

                // TODO: correct the method

                $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,strpos( $_SERVER["SERVER_PROTOCOL"],'/'))).'://';
                $actual_link = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                echo $actual_link;
                //header('Location: ' . $url);
                die();
            }
        }

        ?>