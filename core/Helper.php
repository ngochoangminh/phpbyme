<?php
if (! function_exists('url_site')){
    function url_site(string $site){
        $uri = $_SERVER['HTTP_HOST'];;

        $url = $uri.$site;

        return $url;
    }
}

?>