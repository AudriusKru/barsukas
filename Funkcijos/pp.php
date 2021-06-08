<?php


$string =  md5(time());
echo $string;

echo preg_replace_callback('/\d+/m',function($matches){
    foreach($matches as $index=>$letter){
        return "<h1>$matches[$index]</h1>";
    }
} 
,$string );