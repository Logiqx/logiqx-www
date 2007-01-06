@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\SuperSet"

REM --- Set the version number using the makefile

sed "s/^MAME_/SET &/" "%LOGIQX%\Dats\Recent\Multi\MAME\MAME.vers.mak" >"MAME.vers.bat"
CALL "MAME.vers.bat"
DEL "MAME.vers.bat"

REM --- Generate CMPro ZIP

zip "MAME SuperSet %MAME_VER_CURRENT% (cm).zip" "MAME SuperSet %MAME_VER_CURRENT%.dat" "MAME SuperSet %MAME_VER_CURRENT%.txt"
mv "MAME SuperSet %MAME_VER_CURRENT% (cm).zip" "%LOGIQX%/WWW/Dats/MAMESuperSet"

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\SuperSet"

REM --- Generate RomCenter ZIP

zip "MAME SuperSet %MAME_VER_CURRENT% (rc).zip" "MAME SuperSet %MAME_VER_CURRENT%.dat" "MAME SuperSet %MAME_VER_CURRENT%.txt"
mv "MAME SuperSet %MAME_VER_CURRENT% (rc).zip" "%LOGIQX%/WWW/Dats/MAMESuperSet"

