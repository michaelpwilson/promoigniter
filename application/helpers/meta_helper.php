<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function meta_info($meta)
    {
	foreach($meta as $tag){ 
	   if($tag['encoding'] == 1){
	   echo '<meta charset="' . $tag['charset']  . '">';
	   } elseif($tag['encoding'] == 0) {
	   echo '<meta name="' . $tag['name']  . '" content="' . $tag['content']  . '">';
	   }
	}
    }



}
