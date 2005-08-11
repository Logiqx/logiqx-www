@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Resources"

REM --- Set the version number using the makefile

sed "s/^MAME_SAMPLES_/SET &/" "MAME Samples\MAME Samples.vers.mak" >"MAME Samples.vers.bat"
CALL "MAME Samples.vers.bat"
DEL "MAME Samples.vers.bat"

REM --- Generate CMPro ZIP

zip "MAME Samples %MAME_SAMPLES_VER% (cm).zip" "MAME Samples %MAME_SAMPLES_VER%*"
mv "MAME Samples %MAME_SAMPLES_VER% (cm).zip" "%LOGIQX%/WWW/Dats/MAMESamples"

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Resources"

REM --- Generate RomCenter ZIP

zip "MAME Samples %MAME_SAMPLES_VER% (rc).zip" "MAME Samples %MAME_SAMPLES_VER%*"
mv "MAME Samples %MAME_SAMPLES_VER% (rc).zip" "%LOGIQX%/WWW/Dats/MAMESamples"
