<?php
/**
 * Global helpers file with misc functions
 *
 */
if (! function_exists('is_current_route')) {
    function is_current_route($route){
        return Request::is($route) ? 'active' : '';
    }
}

if (! function_exists('currentUser')) {
    function currentUser(){
        return \Auth::user();
    }
}