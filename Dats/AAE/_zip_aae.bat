@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^AAE_VER/SET &/;s/?/ /g" "AAE\AAE.vers.mak" >"AAE.vers.bat"
CALL "AAE.vers.bat"
DEL "AAE.vers.bat"

REM --- Generate CMPro ZIP

zip "AAE %AAE_VER% (xml).zip" "AAE %AAE_VER%*"
mv "AAE %AAE_VER% (xml).zip" "%LOGIQX%/WWW/Dats/AAE/."

