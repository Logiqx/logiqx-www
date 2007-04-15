#!/usr/bin/env sh

WWW=/home2/lac/www

if [[ $PWD != $WWW ]]
then
	echo "Wrong working directory (must be in $WWW)"
	exit 1
fi

tar -x -v -fupload/all.tar.gz -z --no-same-permissions

RESULT=$?

echo
echo Error code=$RESULT

