#!/bin/sh

HOME=/home/lac/www

cd $HOME

echo "Content-type: text/html"
echo

ZIP=$(ls -rt $HOME/Dats/OlderEmus/Older?Emus???????????cm?.zip | tail -1)

unzip -l "$ZIP"
