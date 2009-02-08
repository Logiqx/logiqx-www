@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\SuperSet.merged"

REM --- Set the version number using the makefile

sed "s/^MAME_/SET &/" "%LOGIQX%\Dats\Recent\Multi\MAME\MAME.vers.mak" >"MAME.vers.bat"
CALL "MAME.vers.bat"
DEL "MAME.vers.bat"

REM --- Generate CMPro ZIP

zip "Various Emulators %MAME_VER_CURRENT% (Fully-merged SuperSet Supplements) (xml).zip" "*SuperSet Supplement*" "Logiqx - Supplement Notes.*"
mv "Various Emulators %MAME_VER_CURRENT% (Fully-merged SuperSet Supplements) (xml).zip" "%LOGIQX%/WWW/Dats/MAMESuperSetEmusM"

