@ECHO OFF

ECHO Local archive:
ECHO.

ls -l  all.tar.gz

ECHO.
ECHO Transferring 'all.tar.gz' to %LOGIQX_FTP%/web/upload...

ECHO open %LOGIQX_FTP%       >_upload.ftp
ECHO user %LOGIQX_LOGIN%    >>_upload.ftp
ECHO cd web/upload          >>_upload.ftp
ECHO bin                    >>_upload.ftp
ECHO put all.tar.gz         >>_upload.ftp
ECHO dir all.tar.gz         >>_upload.ftp
ECHO bye                    >>_upload.ftp

ECHO.
FTP -i -n <_upload.ftp

rm -f _upload.ftp all.tar.gz

ECHO.
PAUSE