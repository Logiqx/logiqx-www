@ECHO OFF

IF NOT EXIST %LOGIQX%\WWW\Upload MKDIR %LOGIQX%\WWW\Upload
IF NOT EXIST %LOGIQX%\WWW\Upload\all.zip GOTO MAKE_ZIP

DEL %LOGIQX%\WWW\Upload\all.zip /S /Q >nul

:MAKE_ZIP

ECHO Copying updates to the WWW_update directory....

REM M=archive attrib, S=subdirs, I=to directory, Y=overwrite
ECHO.
XCOPY * %LOGIQX%\WWW_update /M /S /I /Y

IF NOT EXIST %LOGIQX%\WWW_update MKDIR %LOGIQX%\WWW_update

ECHO.
ECHO Creating %LOGIQX%\WWW\Upload\all.zip...

cd %LOGIQX%\WWW_update
ECHO.
zip -r -9 ../WWW/Upload/all.zip *

ECHO.
ECHO All done!

ECHO.
PAUSE
