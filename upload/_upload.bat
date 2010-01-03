@ECHO OFF

ECHO Uploading to %LOGIQX_LOGIN%@%LOGIQX_FTP%...
ECHO.

pscp all.zip %LOGIQX_LOGIN%@%LOGIQX_FTP%:www/upload/all.zip

rm -f all.zip

ECHO.
PAUSE
