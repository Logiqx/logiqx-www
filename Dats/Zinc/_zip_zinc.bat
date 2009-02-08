@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^ZINC_VER/SET &/;s/?/ /g" "ZiNc\ZiNc.vers.mak" >"ZiNc.vers.bat"
CALL "ZiNc.vers.bat"
DEL "ZiNc.vers.bat"

REM --- Generate CMPro ZIP

zip "ZiNc %ZINC_VER% (xml).zip" "ZiNc %ZINC_VER%*"
mv "ZiNc %ZINC_VER% (xml).zip" "%LOGIQX%/WWW/Dats/ZiNc/."

