<?php

/**
*
*  This is just a simple config file to store your web root and a few other items
*
*  Change "/www/sites/*" to the directory where you keep your sites.
*  Add multiple directories like this:
*
*  $dir = array("/www/sites1/*","/www/sites2/*");
*
*/


/** directory name(s) */
$dir = array("/Applications/MAMP/htdocs/*");

/** Your local top level domain */
$tld = 'localhost';

/*
*
*  Icon file names you would like to display next to the link to each site.
*  In order of the priority they should be used.
*
*/
$icons = array( 'favicon.ico', 'favicon.png', 'apple-touch-icon.png', );

/*
*
*  Development tools you want displayed in the top navigation bar. Each item should be
*  an array containing keys 'name' and 'url'. An example is included (commented out) below.
*
*/
$devtools = array(
 // array(
 //    'name' => 'Tool',
 //    'url' => 'http://example.com/'
 //  ),
  array(
    'name' => 'PHP My Admin',
    'url' => 'http://'.$tld.'/phpmyadmin'
  ),
  array(
    'name' => 'Root',
    'url' => 'http://'.$tld
  ),
  array(
    'name' => 'Foundation Icons',
    'url' => 'http://'.$tld.'/foundation-icons'
  ),
  array(
    'name' => 'Gitlab',
    'url' => 'https://gitlab.com/users/sign_in'
  ),
  );

/*
*
*  Options for sites being displayed. These are completely optional, if you don't set
*  anything there are default options which will take over.
*
*  If you only want to specify a display name for a site you can use the format:
*
*  'sitedir' => 'Display Name',
*
*  Otherwise, if you want to set additional options you'll use an array for the options.
*
*  'sitedir' => array( 'displayname' => 'Display Name', 'adminurl' => 'http://example.sites.dev/admin' ),
*
*/
$siteoptions = array(
  // 'dirname' => array( 'displayname' => 'DisplayName', 'adminurl' => 'http://something/admin' ),
  'durandbuilders' => 'Durand Builders'
);

/*
*
*  Directory names of sites you want to hide from the page. If you're using multiple directories
*  in $dir be aware that any directory names in the array below that show up in any of
*  your directories will be hidden.
*
*/
$hiddensites = array(
  'index.php',
  'home',
  'foundation',
  'foundation-icons',
  'wordpress-4.1.zip'
);