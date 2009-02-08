@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Systems"

REM --- Set the version number using the makefile

sed "s/^NEOGEO_VER/SET &/" "Neo-Geo\Neo-Geo.vers.mak" >"Neo-Geo.vers.bat"
CALL "Neo-Geo.vers.bat"
DEL "Neo-Geo.vers.bat"

REM --- Generate CMPro ZIP

zip "Neo-Geo %NEOGEO_VER% (xml).zip" "Neo-Geo %NEOGEO_VER%*"
mv "Neo-Geo %NEOGEO_VER% (xml).zip" "%LOGIQX%/WWW/Dats/Neo-Geo/."

