@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^RAINE_VER/SET &/" "RAINE\RAINE.vers.mak" >"RAINE.vers.bat"
CALL "RAINE.vers.bat"
DEL "RAINE.vers.bat"

REM --- Generate CMPro ZIP

zip "RAINE %RAINE_VER% (cm).zip" "RAINE %RAINE_VER%*"
mv "RAINE %RAINE_VER% (cm).zip" "%LOGIQX%/WWW/Dats/RAINE/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Multi"

REM --- Generate RomCenter ZIP

zip "RAINE %RAINE_VER% (rc).zip" "RAINE %RAINE_VER%*"
mv "RAINE %RAINE_VER% (rc).zip" "%LOGIQX%/WWW/Dats/RAINE/."
