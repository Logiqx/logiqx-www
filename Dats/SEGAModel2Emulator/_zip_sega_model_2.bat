@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^SEGA_MODEL_2_VER/SET &/" "SEGA Model 2 Emulator\SEGA Model 2 Emulator.vers.mak" >"SEGA Model 2 Emulator.vers.bat"
CALL "SEGA Model 2 Emulator.vers.bat"
DEL "SEGA Model 2 Emulator.vers.bat"

REM --- Generate CMPro ZIP

zip "SEGA Model 2 Emulator %SEGA_MODEL_2_VER% (xml).zip" "SEGA Model 2 Emulator %SEGA_MODEL_2_VER%*"
mv "SEGA Model 2 Emulator %SEGA_MODEL_2_VER% (xml).zip" "%LOGIQX%/WWW/Dats/SEGAModel2Emulator/."

