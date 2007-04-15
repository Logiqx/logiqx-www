#!/usr/bin/env sh

WWW=/home2/lac/www
UPLOAD=$WWW/upload

cd $WWW

tar -x -v -b20 -f${UPLOAD}/all.tar.gz -z --no-same-permissions

RESULT=$?

echo
echo Error code=$RESULT

