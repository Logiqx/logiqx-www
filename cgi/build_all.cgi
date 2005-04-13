#!/bin/sh

WWW_HOME=/home2/lac/www

cd $WWW_HOME

echo "Content-type: text/html"
echo

echo "<html><body><pre>"
date
echo

echo Building mamebeta_history.out...
cgi-bin/mamebeta_history.cgi | tail +3 >$WWW_HOME/Dats/MAMEBeta/mamebeta_history.out

echo Building mamechanges_history.out...
cgi-bin/mamechanges_history.cgi | tail +3 >$WWW_HOME/Dats/MAMEChanges/mamechanges_history.out

echo Building olderemus_cm_zip.out...
cgi-bin/olderemus_cm_zip.cgi | tail +3 >$WWW_HOME/Dats/OlderEmus/olderemus_cm_zip.out

echo Building olderemus_rc_zip.out...
cgi-bin/olderemus_rc_zip.cgi | tail +3 >$WWW_HOME/Dats/OlderEmus/olderemus_rc_zip.out

echo
date
echo "</pre></body></head>"
