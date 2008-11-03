@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^DSP_VER/SET &/;s/?/ /g" "DSP\DSP.vers.mak" >"DSP.vers.bat"
CALL "DSP.vers.bat"
DEL "DSP.vers.bat"

REM --- Generate CMPro ZIP

zip "DSP %DSP_VER% (xml).zip" "DSP %DSP_VER%*"
mv "DSP %DSP_VER% (xml).zip" "%LOGIQX%/WWW/Dats/DSP/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Multi"

REM --- Generate RomCenter ZIP

zip "DSP %DSP_VER% (rc).zip" "DSP %DSP_VER%*"
mv "DSP %DSP_VER% (rc).zip" "%LOGIQX%/WWW/Dats/DSP/."
