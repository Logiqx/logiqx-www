#!/usr/bin/env sh

WWW=/home/lac/www

echo "Content-type: text/html"
echo

echo "<html><body><pre>"
date
echo

cd $WWW
unzip -o upload/all.zip
RESULT=$?

echo
echo Error code=$RESULT

echo
date
echo "</pre></body></head>"

