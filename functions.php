<?php

function dd($value)
{
   echo "<pre>";
   var_dump($value);
   echo "</pre>";

   die();
}
//dd($_SERVER['REQUEST_URI']);
//echo "<pre>";
//var_dump($_POST);
//echo "</pre>";
 // die();
function urlls() {
    return $_SERVER['REQUEST_URI'];
}