@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Systems"

REM --- Set the version number using the makefile

sed "s/^CPS1_VER/SET &/" "CPS-1\CPS-1.vers.mak" >"CPS-1.vers.bat"
CALL "CPS-1.vers.bat"
DEL "CPS-1.vers.bat"

REM --- Generate CMPro ZIP

zip "CPS-1 %CPS1_VER% (cm).zip" "CPS-1 %CPS1_VER%*"
mv "CPS-1 %CPS1_VER% (cm).zip" "%LOGIQX%/WWW/Dats/CPS-1/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Systems"

REM --- Generate RomCenter ZIP

zip "CPS-1 %CPS1_VER% (rc).zip" "CPS-1 %CPS1_VER%*"
mv "CPS-1 %CPS1_VER% (rc).zip" "%LOGIQX%/WWW/Dats/CPS-1/."
