<?php
// $dir = array("/Applications/MAMP/htdocs/*"); // OSX
$dir = array("p:/xampp/htdocs/*"); // Windows

// (t)op (l)evel (d)omain
$tld = 'localhost';

// Icons to be used for each site, in order of request
$icons = array('favicon.png','favicon.ico');

// Development tools displayed in the top nav bar
$devtools = array(
 // array('name'=>'Tool','url'=>'http://example.com/'),
  array(
    'name' => 'PHP My Admin',
    'url' => 'http://'.$tld.'/phpmyadmin'
  ),
  array(
    'name' => 'PHP Info',
    'url' => 'http://'.$tld.'/home/info.php'
  ),
  // array(
  //   'name' => 'Foundation Icons',
  //   'url' => 'http://'.$tld.'/foundation-icons'
  // ),
  array(
    'name' => 'GitLAB',
    'url' => 'https://gitlab.com/users/sign_in'
  ),
  array(
    'name' => 'GitHUB',
    'url' => 'https://github.com/login'
  ),
);

/*
*
*  Options for sites being displayed. These are completely optional, if you don't set
*  anything there are default options which will take over.
*
*  If you only want to specify a display name for a site you can use the format:
// 'sitedir' => 'Display Name',
*  Otherwise, if you want to set additional options you'll use an array for the options.
// 'sitedir' => array( 'displayname' => 'Display Name', 'adminurl' => 'http://example.sites.dev/admin' ),
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
  'wp',
  '_archive',
  'favicon.ico',
  'favicon.png',
);