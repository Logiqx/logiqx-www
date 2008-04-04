@ECHO OFF

touch dummy.zip
CALL cvspurge

touch *.zip
CALL cvsadd

PAUSE