#!/bin/sh

HOME=/sites/logiqx.com/www

cd $HOME

echo "Content-type: text/html"
echo

ZIP=$(ls -rt $HOME/Dats/OlderEmus/Older?Emus???????????cm?.zip | tail -1)

unzip -l "$ZIP"
