<?php

namespace nnagroup\LaravelMaterialBootstrap;

    use Illuminate\Support\ServiceProvider;

    class MaterialBootstrapCSSServiceProvider extends ServiceProvider {

        protected $defer = true;

        public function register() {
            $this->publishes([
                __DIR__.'/../assets' => public_path('material-bootstrap'),
            ], 'materialbootstrap');
            $this->registerMaterialBootstrapCSSBuilder();
            $this->app->alias('material-bootstrap', 'nnagroup\LaravelMaterialBootstrap\MaterialBootstrapCSSBuilder');
        }

        protected function registerMaterialBootstrapCSSBuilder() {
            $this->app->singleton('material-bootstrap', function($app) {
                return new MaterialBootstrapCSSBuilder($app['url']);
            });
        }

        public function provides() {
            return array('material-bootstrap');
        }

    }

?>