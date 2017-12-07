<?php
/**
 * Created by PhpStorm.
 * User: xujin
 * Date: 2017/12/1
 * Time: 下午6:00
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}