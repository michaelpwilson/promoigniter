<?php 

  /* Use functions from the helper to deliver our structure 
  PromoIgniter v1.0 - Created By Michael Wilson www.mwils.co.uk
  */

  /* Get the navbar */
  navbar($site['logo'], $loggedin, $sections, $site['navbar-class']);
  echo '<div class="site-wrapper">';
  /* Get the intro */
  intro($site['intro-header'], $site['intro-text'], $site['intro-content'], $site['secondary-background'], $site['secondary-font-color']);
  /* Get all of our sections */
  sections($sections, $loggedin, $site['secondary-background'], $site['secondary-font-color']);
  echo '</div>';
?>
