#!/bin/sh

echo "Content-type: text/html"
echo

/sites/logiqx.com/www/cgi/counter /sites/logiqx.com/www/counter
cat /sites/logiqx.com/www/counter/counter.dat
