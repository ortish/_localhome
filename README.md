# A localhost Home Page
This page is designed to be a useful companion to your localhost website development environment.

I assume you are using Xampp, Mamp, or Lamp with this, so keep that in mind.  Also, I work on this at home on Windows so you will need to change the dir path in inc/config.php to the appropriate htdocs location.

## Get Started
Easiest way to get this up and running is to clone this into localhost/home and create an index.php file at root with the following code in it:
<?php header("Location: /home"); ?>

This will redirect localhost to localhost/home, and has the benefit of keeping all these file in their own easy to organize folder.

Plus that's just how I do it... feel free to chop and dice this beast up however you like.  That's the cool part about programming right?

### Features
List all sites/files in localhost
Blacklist for sites/files
Show admin link/icon for each site
Helpful dev links in top nav
And all of it is easily configurable

* img/icon-gear.png from [Icons DB](http://www.iconsdb.com/black-icons/gear-2-icon.html)