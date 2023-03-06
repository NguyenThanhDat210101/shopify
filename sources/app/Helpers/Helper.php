<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('active_menu')) {
    function active_menu($routeName = [])
    {
        if (in_array(Route::currentRouteName(), $routeName)) {
            return '';
        }

        return 'collapsed';
    }
}
