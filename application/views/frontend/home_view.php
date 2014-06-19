<?php 

  /* Use functions from the helper to deliever our structure 
  PromoIgniter v1.0 - Created By Michael Wilson www.mwils.co.uk
  */

  /* Get the navbar */
  navbar($site['logo'], $loggedin, $sections, $site['navbar-class']);
  /* Get the intro */
  intro($site['intro-header'], $site['intro-text'], $site['intro-content']);
  /* Get all of our sections */
  sections($sections, $loggedin);

?>
