   <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

     if ( ! function_exists('asset_url()'))
     {
       function asset_url()
       {
          return base_url().'assets/';
       }
       function theme_url($theme_folder)
       {
	  return asset_url() . $theme_folder . '/';
       }
       function css_folder($theme_folder)
       {
	  return theme_url($theme_folder) . 'css/';
       }
     }
