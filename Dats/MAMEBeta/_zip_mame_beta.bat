@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^MAME_/SET &/" "MAME\MAME.vers.mak" >"MAME.vers.bat"
CALL "MAME.vers.bat"
DEL "MAME.vers.bat"

REM --- Generate CMPro ZIP

zip "MAME %MAME_VER_CURRENT% (xml).zip" "MAME %MAME_VER_CURRENT%.dat"
mv "MAME %MAME_VER_CURRENT% (xml).zip" "%LOGIQX%/WWW/Dats/MAMEBeta"

