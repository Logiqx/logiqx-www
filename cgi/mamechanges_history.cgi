#!/bin/sh

HOME=/home/lac/www

cd $HOME

echo "Content-type: text/html"
echo

echo "<table border=\"0\" width=\"100%\"><tr>"

echo "<td width=\"50%\" align=\"center\">"
LAST_DAT=$(ls $HOME/Dats/MAMEChanges/*\(cm\).zip | wc -l)
CURR_DAT=1
while (( $CURR_DAT <= $LAST_DAT ))
do
	LINE=$(ls -r $HOME/Dats/MAMEChanges/*\(cm\).zip | tail -n +$CURR_DAT | head -n 1)
	DAT=$(basename "$LINE")
	SIZE=$(du -sk "$LINE"|cut -d "	" -f 1)

	echo "<a href=\"$DAT\">$DAT</a> (${SIZE}KB)<br/>"

	CURR_DAT=$(( $CURR_DAT + 1 ))
done
echo "</td>"

echo "<td width=\"50%\" align=\"center\">"
LAST_DAT=$(ls $HOME/Dats/MAMEChanges/*\(rc\).zip | wc -l)
CURR_DAT=1
while (( $CURR_DAT <= $LAST_DAT ))
do
	LINE=$(ls -r $HOME/Dats/MAMEChanges/*\(rc\).zip | tail -n +$CURR_DAT | head -n 1)
	DAT=$(basename "$LINE")
	SIZE=$(du -sk "$LINE"|cut -d "	" -f 1)

	echo "<a href=\"$DAT\">$DAT</a> (${SIZE}KB)<br/>"

	CURR_DAT=$(( $CURR_DAT + 1 ))
done
echo "</td>"

echo "</tr></table>"
