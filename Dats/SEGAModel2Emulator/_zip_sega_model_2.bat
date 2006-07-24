@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^SEGA_MODEL_2_VER/SET &/" "Sega Model 2 Emulator\Sega Model 2 Emulator.vers.mak" >"Sega Model 2 Emulator.vers.bat"
CALL "Sega Model 2 Emulator.vers.bat"
DEL "Sega Model 2 Emulator.vers.bat"

REM --- Generate CMPro ZIP

zip "Sega Model 2 Emulator %SEGA_MODEL_2_VER% (cm).zip" "Sega Model 2 Emulator %SEGA_MODEL_2_VER%*"
mv "Sega Model 2 Emulator %SEGA_MODEL_2_VER% (cm).zip" "%LOGIQX%/WWW/Dats/SegaModel2Emulator/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Multi"

REM --- Generate RomCenter ZIP

zip "Sega Model 2 Emulator %SEGA_MODEL_2_VER% (rc).zip" "Sega Model 2 Emulator %SEGA_MODEL_2_VER%*"
mv "Sega Model 2 Emulator %SEGA_MODEL_2_VER% (rc).zip" "%LOGIQX%/WWW/Dats/SegaModel2Emulator/."
