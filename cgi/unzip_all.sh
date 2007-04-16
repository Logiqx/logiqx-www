#!/usr/bin/env sh

WWW=/home2/lac/www

cd $WWW
unzip -o upload/all.zip
RESULT=$?

echo
echo Error code=$RESULT

