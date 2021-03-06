@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\SuperSet"

REM --- Set the version number using the makefile

sed "s/^MAME_/SET &/" "%LOGIQX%\Dats\Recent\Multi\MAME\MAME.vers.mak" >"MAME.vers.bat"
CALL "MAME.vers.bat"
DEL "MAME.vers.bat"

REM --- Generate CMPro ZIP

zip "MAME SuperSet %MAME_VER_CURRENT% (Split-merged MAME Supplement) (xml).zip" "MAME SuperSet %MAME_VER_CURRENT% *Supplement*" "MAME SuperSet %MAME_VER_CURRENT%.txt"
mv "MAME SuperSet %MAME_VER_CURRENT% (Split-merged MAME Supplement) (xml).zip" "%LOGIQX%/WWW/Dats/MAMESuperSetSuppS"

