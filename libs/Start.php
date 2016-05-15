<?php

/**
 * Created by PhpStorm.
 * User: Muhammad
 * Date: 15.05.2016
 * Time: 15:50
 */
class Start
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "index";
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        if(empty($url)) {
            
        }
    }
}