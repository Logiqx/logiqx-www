# --- Standard file names

PC_TXT=_filelist_pc.txt
PC_TMP=_filelist_pc.tmp
ZTNET_TXT=_filelist_ztnet.txt
ZTNET_TMP=_filelist_ztnet.tmp

CMP_TMP=_filelist_compare.tmp
TIDY_SH=_filelist_tidy.sh

# --- Fix the PC filelist (it is PC text and has a different sort order!)

sed 's///' $PC_TXT >$PC_TMP
sort $PC_TMP >$PC_TXT
rm -f $PC_TMP

# --- Compare the two file lists

diff $ZTNET_TXT $PC_TXT >$CMP_TMP

# --- Show missing/incorrect files

echo "Missing/incorrect files: "`grep '^>' $CMP_TMP|grep -v "_filelist_.*\.txt"|wc -l|awk '{print $1}'`
grep '^>' $CMP_TMP|grep -v "_filelist_.*\.txt"

# --- Show unneeded files

grep '^<' $CMP_TMP|egrep -v "MAMEBeta|MAMEChanges|MAMETestDrivers|_filelist"|awk -F'	' '{print "rm -f \""$1"/"$2"\""}'|sed 's/< //' >$TIDY_SH
echo "Unneeded files: "`wc -l $TIDY_SH|awk '{print $1}'`

# --- Tidy up!

if [ -s $TIDY_SH ]
then
	echo "rm -f $TIDY_SH" >>$TIDY_SH
	chmod +x $TIDY_SH

	echo
	echo Run "'"$TIDY_SH"'" to delete any unneeded files
else
	rm -f $TIDY_SH
fi

rm -f $CMP_TMP
