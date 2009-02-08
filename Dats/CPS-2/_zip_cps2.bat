@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Systems"

REM --- Set the version number using the makefile

sed "s/^CPS2_VER/SET &/" "CPS-2\CPS-2.vers.mak" >"CPS-2.vers.bat"
CALL "CPS-2.vers.bat"
DEL "CPS-2.vers.bat"

REM --- Generate CMPro ZIP

zip "CPS-2 %CPS2_VER% (xml).zip" "CPS-2 %CPS2_VER%*"
mv "CPS-2 %CPS2_VER% (xml).zip" "%LOGIQX%/WWW/Dats/CPS-2/."

