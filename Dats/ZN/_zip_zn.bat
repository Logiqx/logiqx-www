@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Systems"

REM --- Set the version number using the makefile

sed "s/^ZN_VER/SET &/" "ZN\ZN.vers.mak" >"ZN.vers.bat"
CALL "ZN.vers.bat"
DEL "ZN.vers.bat"

REM --- Generate CMPro ZIP

zip "ZN %ZN_VER% (cm).zip" "ZN %ZN_VER%*"
mv "ZN %ZN_VER% (cm).zip" "%LOGIQX%/WWW/Dats/ZN/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Systems"

REM --- Generate RomCenter ZIP

zip "ZN %ZN_VER% (rc).zip" "ZN %ZN_VER%*"
mv "ZN %ZN_VER% (rc).zip" "%LOGIQX%/WWW/Dats/ZN/."
