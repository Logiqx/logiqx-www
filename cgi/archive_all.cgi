#!/bin/sh

archive_dir()
{
	echo "<h1>$2</h1><pre>"
	date
	echo
	$ROOT_DIR/cgi/archive_dir.cgi $1 $2 $3
	ERRFLG=$?
	echo
	echo "Error code=$ERRFLG"
	echo
	date
	echo "</pre>"
}

# SSH root driectory
#ROOT_DIR=/home/logiqx/web

# CGI root directory
ROOT_DIR=/sites/logiqx.com/www

echo "Content-type: text/html"
echo
echo "<html><body>"

archive_dir $ROOT_DIR Dats/CMP_Dats zip
echo "<hr/>"
archive_dir $ROOT_DIR Dats/RC_Dats zip
echo "<hr/>"
archive_dir $ROOT_DIR Dats/XML xml

echo "</body></html>"
