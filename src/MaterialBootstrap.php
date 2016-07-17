<?php

    namespace nnagroup\LaravelMaterialBootstrap;

    use Illuminate\Support\Facades\Facade;

    class MaterializeCSS extends Facade {

        protected static function getFacadeAccessor() { return 'material-bootstrap'; }

    }

?>