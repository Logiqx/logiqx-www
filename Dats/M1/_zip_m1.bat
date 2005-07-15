@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Sound"

REM --- Set the version number using the makefile

sed "s/^M1_VER/SET &/" "M1\M1.vers.mak" >"M1.vers.bat"
CALL "M1.vers.bat"
DEL "M1.vers.bat"

REM --- Generate CMPro ZIP

zip "M1 %M1_VER% (cm).zip" "M1 %M1_VER%*"
mv "M1 %M1_VER% (cm).zip" "%LOGIQX%/WWW/Dats/M1/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Sound"

REM --- Generate RomCenter ZIP

zip "M1 %M1_VER% (rc).zip" "M1 %M1_VER%*"
mv "M1 %M1_VER% (rc).zip" "%LOGIQX%/WWW/Dats/M1/."
