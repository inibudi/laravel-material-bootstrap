<?php

    namespace nnagroup\LaravelMaterialBootstrap;

    class MaterialBootstrapCSSBuilder {

        const BASE_FOLDER = '/material-bootstrap/';

        // CSS files
        private static $file_css = [
            self::BASE_FOLDER . 'css/bootstrap.css', //bootstrap
            self::BASE_FOLDER . 'css/mdb.css', //material bootstrap
        ];
        private static $file_css_min = [
            self::BASE_FOLDER . 'css/bootstrap.min.css', //bootstrap
            self::BASE_FOLDER . 'css/mdb.min.css', //material bootstrap
        ];

        // JS files
        private static $file_js = [
            self::BASE_FOLDER . 'js/jquery-2.2.3.js', //jquery
            self::BASE_FOLDER . 'js/bootstrap.js', //bootstrap
            self::BASE_FOLDER . 'js/tether.js', //tether
            self::BASE_FOLDER . 'js/mdb.js', //material bootstrap

        ];
        private static $file_js_min = [
            self::BASE_FOLDER . 'js/jquery-2.2.3.min.js', //jquery
            self::BASE_FOLDER . 'js/bootstrap.min.js', //bootstrap
            self::BASE_FOLDER . 'js/tether.min.js', //tether
            self::BASE_FOLDER . 'js/mdb.min.js', //material bootstrap
        ];

        public static function addMaterialBootstrap() {
            $return  = self::include_css();
            $return .= self::include_js();
            return $return;
        }

        public static function include_css() {
            $return = '';
            foreach (self::$file_css_min as $css) {
                $return .= self::tag_css(asset($css));
            }
            return $return;
        }

        public static function include_js() {
            $return = '';
            foreach (self::$file_js_min as $js) {
                $return .= self::tag_js(asset($js));
            }
            return $return;
        }

        private static function tag_css($path) {
            return '<link rel="stylesheet" href="'.$path.'">';
        }

        private static function tag_js($path) {
            return '<script src="'.$path.'"></script>';
        }











    }

?>