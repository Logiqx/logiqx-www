#!/usr/bin/env sh

WWW=/home2/lac/www

UPLOAD=$WWW/upload

cd $WWW

echo "Content-type: text/html"
echo

echo "<html><body><pre>"
date
echo

tar -x -v -b20 -f${UPLOAD}/all.tar.gz -z --no-same-permissions

RESULT=$?

echo
echo Error code=$RESULT

find . -type d -exec chmod o-w {} \;

echo
date
echo "</pre></body></head>"

