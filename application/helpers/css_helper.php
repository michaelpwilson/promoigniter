<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function core_css($site)
    {
           if($site['cdn'] == 1){
                if($site['css'] == "bootstrap"){
                echo '<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">';
                } elseif($site['css'] == "foundation"){
                echo '<link href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.3/css/foundation.min.css" rel="stylesheet">';
		echo '<link href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.3/css/normalize.css" rel="stylesheet">';
                }
           } else {
           
           }
    $theme_folder = $site['theme_folder'];
    echo '<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />';
    echo '<link href="' . css_folder($theme_folder) . $site['custom_css'] . '" rel="stylesheet">';
    echo '<link href="' . asset_url() . 'sidebar.css" rel="stylesheet">';
    }

    function core_fonts($site)
    {
           if($site['cdn'] == 1){
		echo '<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">';
           } else {
	   
           }
	echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' . $site['font'] . '">';
    }
    function core_js($site, $loggedin)
    {
      $theme_folder = $site['theme_folder'];
      echo '<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>';
      echo '<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>';
      echo '<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>';
           if($site['cdn'] == 1){
                if($site['css'] == "bootstrap"){
                echo '<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>';
                } elseif($site['css'] == "foundation"){
		echo '<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.3/js/foundation.min.js"></script>';
		echo '<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.3/js/vendor/modernizr.js"></script>';
		echo '<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.3/js/vendor/fastclick.js"></script>';
                }
     if ($loggedin) {
	echo '<script src="' . asset_url() . 'jeditable.content.js"></script>';
        echo '<script src="' . asset_url() . 'jquery.simplesidebar.min.js"></script>';
     }
	echo '<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>';
	echo '<script src="' . theme_url($theme_folder) . 'js/'. $theme_folder  . '.js"></script>';
	echo '<script src="' . asset_url() . 'jquery.jeditable.js"></script>';
	echo '<script src="' . asset_url() . 'iris.min.js"></script>';
	echo '<script src="' . asset_url() . 'sidebar.js"></script>';
	echo '<script src="' . theme_url($theme_folder)  . 'js/classie.js"></script>';
	echo '<script src="' . theme_url($theme_folder)  . 'js/cbpAnimatedHeader.js"></script>';
           } else {

           }
    }

    function navbar($logo, $loggedin, $sections, $navclass)
    {
        echo '<nav class="' . $navclass  . '" role="navigation"><div class="container"><div class="navbar-header page-scroll">';
                echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"><i class="fa fa-bars"></i></button>';
            echo '<a id="logo" class="navbar-brand" href="#page-top">' . $logo . '</a></div>';
            echo '<div class="collapse navbar-collapse navbar-right navbar-main-collapse">';
                echo '<ul class="nav navbar-nav">';
                 echo '<li class="hidden"><a href="#page-top"></a></li>';
                    foreach($sections as $section){
                      if ($loggedin){
                   echo '<li>';
                      } else {
                    echo '<li class="page-scroll">';
		      }
                    echo '<a id="' . $section['content_id'] . '" href="#' . $section['content-name'] . '">' . $section['content-name'] . '</a>'; 
                   echo '</li>';
                    }
		if($loggedin){ echo '<a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>'; }
       echo '</ul></div></div></nav>';
    }
    function intro($header, $text, $content, $background, $color)
    {
	    echo '<section class="intro" style="background:' . $background  . '; color:' . $color . '"><div class="intro-body"><div class="container"><div class="row">';
                    echo '<div class="col-md-8 col-md-offset-2">';
                        echo '<h1 class="intro-header" id="editable">' . $header . '</h1>';
                        echo '<p class="intro-text" id="editable">' . $text . '</p>';
                        echo '<div class="intro-content" id="editable">' . $content . '</div>';
                    echo '</div>';
            echo '</div></div></div></section>';
    }
    function sections($sections, $loggedin, $background, $color)
    {
	foreach($sections as $section) {
	  echo '<section id="' . $section['content-name'] . '"';
	 if($section['content-type'] == "beauty"){
          echo  'style="background:' . $background  . '; color:' . $color . '" class="beauty">';
         } 
         echo '<div class="row">';
        if($section['content-type'] == "basic") {
         echo '<div class="col-lg-8 col-lg-offset-2">';
		echo '<h2 id="' . $section['content_id'] . '" class="header">' . $section['header'] . '</h2>';
                echo '<div id="' . $section['content_id'] . '" class="text">' .$section['text'] . '</div>';
                echo '<div id="' . $section['content_id'] . '" class="extras">' . $section['extras'] . '</div>';
         echo '</div>';
        } else {
	 if($section['content-type'] == "beauty"){ 
              echo '<div class="beauty-section container"><div class="col-lg-8 col-lg-offset-2">';
                echo '<h2 id="' . $section['content_id'] . '" class="header">' . $section['header'] . '</h2>';
                echo '<div id="' . $section['content_id'] . '" class="text">' .$section['text'] . '</div>';
                echo '<div id="' . $section['content_id'] . '" class="extras">' . $section['extras'] . '</div>';
              echo '</div></div>';
          } elseif($section['content-type'] == "threecolumns") {
	     echo '<div class="container">';
		echo '<div class="col-md-4"><div id="' . $section['content_id'] . '" class="header">' . $section['header'] . '</div></div>';
		echo '<div class="col-md-4"><div id="' . $section['content_id'] . '" class="text">' . $section['text'] . '</div></div>';
		echo '<div class="col-md-4"><div id="' . $section['content_id'] . '" class="extras">' . $section['extras'] . '</div></div>';
             echo '</div>';
	  }
	if($section['content-type'] == "longright") {
             echo '<div class="container">';
                echo '<div class="col-md-4"><div id="' . $section['content_id'] . '" class="extras">' . $section['extras'] . '</div></div>';
                echo '<div class="col-md-8"><div id="' . $section['content_id'] . '" class="header">' . $section['header'] . '</div><div id="' . $section['content_id'] . '" class="text">' . $section['text'] . '</div></div>';
             echo '</div>';
          } elseif($section['content-type'] == "longleft") {
             echo '<div class="container">';
                echo '<div class="col-md-8"><div id="' . $section['content_id'] . '" class="extras">' . $section['extras'] . '</div></div>';
                echo '<div class="col-md-4"><div id="' . $section['content_id'] . '" class="header">' . $section['header'] . '</div><div id="' . $section['content_id'] . '" class="text">' . $section['text'] . '</div></div>';
             echo '</div>';
          }

       }
	  echo '</section>';
	}
    }
}

