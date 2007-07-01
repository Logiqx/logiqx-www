@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^CPS3_EMULATOR_VER/SET &/" "Capcom Play System 3 Emulator\Capcom Play System 3 Emulator.vers.mak" >"Capcom Play System 3 Emulator.vers.bat"
CALL "Capcom Play System 3 Emulator.vers.bat"
DEL "Capcom Play System 3 Emulator.vers.bat"

REM --- Generate CMPro ZIP

zip "Capcom Play System 3 Emulator %CPS3_EMULATOR_VER% (cm).zip" "Capcom Play System 3 Emulator %CPS3_EMULATOR_VER%*"
mv "Capcom Play System 3 Emulator %CPS3_EMULATOR_VER% (cm).zip" "%LOGIQX%/WWW/Dats/CPS3Emulator/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Multi"

REM --- Generate RomCenter ZIP

zip "Capcom Play System 3 Emulator %CPS3_EMULATOR_VER% (rc).zip" "Capcom Play System 3 Emulator %CPS3_EMULATOR_VER%*"
mv "Capcom Play System 3 Emulator %CPS3_EMULATOR_VER% (rc).zip" "%LOGIQX%/WWW/Dats/CPS3Emulator/."
