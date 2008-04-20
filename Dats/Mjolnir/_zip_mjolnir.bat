@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^MJOLNIR_VER/SET &/" "Mjolnir\Mjolnir.vers.mak" >"Mjolnir.vers.bat"
CALL "Mjolnir.vers.bat"
DEL "Mjolnir.vers.bat"

REM --- Generate CMPro ZIP

zip "Mjolnir %MJOLNIR_VER% (xml).zip" "Mjolnir %MJOLNIR_VER%*"
mv "Mjolnir %MJOLNIR_VER% (xml).zip" "%LOGIQX%/WWW/Dats/Mjolnir/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Multi"

REM --- Generate RomCenter ZIP

zip "Mjolnir %MJOLNIR_VER% (rc).zip" "Mjolnir %MJOLNIR_VER%*"
mv "Mjolnir %MJOLNIR_VER% (rc).zip" "%LOGIQX%/WWW/Dats/Mjolnir/."
