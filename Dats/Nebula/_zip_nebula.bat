@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^NEBULA_VER/SET &/" "Nebula\Nebula.vers.mak" >"Nebula.vers.bat"
CALL "Nebula.vers.bat"
DEL "Nebula.vers.bat"

REM --- Generate CMPro ZIP

zip "Nebula %NEBULA_VER% (xml).zip" "Nebula %NEBULA_VER%*"
mv "Nebula %NEBULA_VER% (xml).zip" "%LOGIQX%/WWW/Dats/Nebula/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Multi"

REM --- Generate RomCenter ZIP

zip "Nebula %NEBULA_VER% (rc).zip" "Nebula %NEBULA_VER%*"
mv "Nebula %NEBULA_VER% (rc).zip" "%LOGIQX%/WWW/Dats/Nebula/."
