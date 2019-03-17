@ECHO OFF

ECHO Creating backups...
ECHO.

cd ..\Logiqx

rm -f %LOGIQX%.gz/*.zip

zip -r -9 -q %LOGIQX%.gz/Bin.zip Bin Bin.BenJos
ls -l %LOGIQX%.gz/Bin.zip

zip -r -9 -q %LOGIQX%.gz/Dats.zip Dats
ls -l %LOGIQX%.gz/Dats.zip

zip -r -9 -q %LOGIQX%.gz/Dats_RC.zip Dats_RC
ls -l %LOGIQX%.gz/Dats_RC.zip

zip -r -9 -q %LOGIQX%.gz/Dev.zip Dev
ls -l %LOGIQX%.gz/Dev.zip

zip -r -9 -q %LOGIQX%.gz/WWW.zip WWW -x *\CVS\*
zip -r -9 -q %LOGIQX%.gz/WWW.zip WWW -i *\*CVS*.*
ls -l %LOGIQX%.gz/WWW.zip

cd %LOGIQX%.gz

ECHO.
ECHO Uploading to %LOGIQX_LOGIN%@%LOGIQX_FTP%...
ECHO.

pscp Bin.zip %LOGIQX_LOGIN%@%LOGIQX_FTP%:web/team/download/Bin.zip
pscp Dats.zip %LOGIQX_LOGIN%@%LOGIQX_FTP%:web/team/download/Dats.zip
pscp Dats_RC.zip %LOGIQX_LOGIN%@%LOGIQX_FTP%:web/team/download/Dats_RC.zip
pscp Dev.zip %LOGIQX_LOGIN%@%LOGIQX_FTP%:web/team/download/Dev.zip
pscp WWW.zip %LOGIQX_LOGIN%@%LOGIQX_FTP%:web/team/download/WWW.zip

ECHO.
PAUSE