#!/bin/sh

HOME=/home/logiqx/web
UPLOAD=$HOME/upload

cd $HOME

tar -x -v -b20 -f${UPLOAD}/all.tar.gz -z

RESULT=$?

echo
echo Error code=$RESULT
