#!/bin/sh

HOME=/sites/logiqx.com/www

cd $HOME

echo "Content-type: text/html"
echo

echo "<html><body><pre>"
date
echo

echo Building mamebeta_history.out...
cgi/mamebeta_history.cgi | tail +3 >cgi/mamebeta_history.out

echo Building mamechanges_history.out...
cgi/mamechanges_history.cgi | tail +3 >cgi/mamechanges_history.out

echo Building olderemus_cm_zip.out...
cgi/olderemus_cm_zip.cgi | tail +3 >cgi/olderemus_cm_zip.out

echo Building olderemus_rc_zip.out...
cgi/olderemus_rc_zip.cgi | tail +3 >cgi/olderemus_rc_zip.out

echo
date
echo "</pre></body></head>"
