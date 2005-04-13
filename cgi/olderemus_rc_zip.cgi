#!/bin/sh

HOME=/home2/lac/www

cd $HOME

echo "Content-type: text/html"
echo

ZIP=$(ls -rt $HOME/Dats/OlderEmus/Older?Emus???????????rc?.zip | tail -1)

unzip -l "$ZIP"
