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