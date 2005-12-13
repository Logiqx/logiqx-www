@ECHO OFF

IF NOT EXIST %LOGIQX%\WWW\Upload MKDIR %LOGIQX%\WWW\Upload
IF NOT EXIST %LOGIQX%\WWW\Upload\all.tar.gz GOTO MAKE_TAR

DEL %LOGIQX%\WWW\Upload\all.tar.gz /S /Q >nul

:MAKE_TAR

ECHO Copying updates to the WWW_update directory....

REM M=archive attrib, S=subdirs, I=to directory, Y=overwrite
ECHO.
XCOPY * %LOGIQX%\WWW_update /M /S /I /Y

IF NOT EXIST %LOGIQX%\WWW_update MKDIR %LOGIQX%\WWW_update

ECHO.
ECHO Creating %LOGIQX%\WWW\Upload\all.tar.gz...

cd %LOGIQX%\WWW_update
ECHO.
tar cvfz ../WWW/Upload/all.tar.gz *

ECHO.
ECHO All done!

ECHO.
PAUSE
