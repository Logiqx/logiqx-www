#!/bin/sh

HOME_DIR=$1
SUB_DIR=$2
EXTENSION=$3

SOURCE_DIR=$HOME_DIR/$SUB_DIR
ARCHIVE_DIR=$HOME_DIR/$SUB_DIR/Archive

ERRFLG=0

cd "$SOURCE_DIR"
ERRFLG=$?

if [ $ERRFLG -ne 0 ]
then
	echo "Source directory does not exist!"
fi

if [ $ERRFLG -eq 0 ]
then
	if [ ! -d "$ARCHIVE_DIR" ]
	then
		mkdir -p "$ARCHIVE_DIR"
		ERRFLG=$?
	
		if [ $ERRFLG -ne 0 ]
		then
			echo "Error creating $ARCHIVE_DIR"
		fi
	fi
fi

if [ $ERRFLG -eq 0 ]
then
	TMP_FILE=tmp.lst
	ls *.$EXTENSION >$TMP_FILE

	sleep 1

	NUM_FILES=`wc -l $TMP_FILE|awk '{print $1}'`
	FILE_NUM=1

	while [ $ERRFLG -eq 0 -a $FILE_NUM -le $NUM_FILES ]
	do
		FILE=`tail +$FILE_NUM $TMP_FILE|head -1`

		echo "Checking $SUB_DIR/$FILE..."

		SOURCE_CRC32=`cksum "$FILE"|awk '{print $1}'`

		if [ -f "$ARCHIVE_DIR/$FILE" ]
		then
			ARCHIVE_CRC32=`cksum "$ARCHIVE_DIR/$FILE"|awk '{print $1}'`
		else
			ARCHIVE_CRC32=""
		fi

		if [ "$SOURCE_CRC32" != "$ARCHIVE_CRC32" ]
		then
			if [ $ERRFLG -eq 0 ]
			then
				if [ -f "$ARCHIVE_DIR/$FILE" ]
				then
					DATE=`date +%Y%m%d.%H%M`
					TMP=`echo "$FILE"|sed "s/$EXTENSION$/$DATE.$EXTENSION/"`
	
					echo "   Adding date to existing archive copy ($DATE)..."
	
					mv "$ARCHIVE_DIR/$FILE" $ARCHIVE_DIR/$TMP
					ERRFLG=$?
	
					if [ $ERRFLG -ne 0 ]
					then
						echo "      Error!"
					fi
				fi
			fi

			if [ $ERRFLG -eq 0 ]
			then
				echo "   Backing up $SUB_DIR/$FILE..."

				cp -rp "$SOURCE_DIR/$FILE" $ARCHIVE_DIR
				ERRFLG=$?

				if [ $ERRFLG -ne 0 ]
				then
					echo "      Error!"
				fi
			fi
		fi

		FILE_NUM=`expr $FILE_NUM + 1`
	done

	rm -f $TMP_FILE
fi

exit $ERRFLG
