@ECHO OFF

ECHO Uploading to %LOGIQX_LOGIN%@%LOGIQX_FTP%...
ECHO.

pscp all.tar.gz %LOGIQX_LOGIN%@%LOGIQX_FTP%:www/upload/all.tar.gz

rm -f all.tar.gz

ECHO.
PAUSE