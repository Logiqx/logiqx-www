@ECHO OFF

ECHO Uploading to %LOGIQX_LOGIN%@%LOGIQX_FTP%...
ECHO.

pscp -P 5334 all.zip %LOGIQX_LOGIN%@%LOGIQX_FTP%:www/upload/all.zip

rm -f all.zip

ECHO.
PAUSE
