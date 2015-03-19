#!/bin/bash

EXPECTED_ARGS=1
E_BADARGS=65
output=${1-newsite}


if [ $# -ne $EXPECTED_ARGS ] then
  echo "Usage: $0 sitename"
  exit $E_BADARGS
fi

unzip /Applications/mamp/htdocs/wordpress-4.1.zip -d /Applications/MAMP/htdocs/
mv /Applications/mamp/htdocs/wordpress -d /Applications/MAMP/htdocs/$output
echo success\!

# sudo cp -R /Volumes/apollo/Wordpress/test /Volumes/apollo/Sites/$output
# sudo chmod ugo+rwx /Volumes/apollo/Sites/$output