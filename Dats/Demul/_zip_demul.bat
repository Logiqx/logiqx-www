@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^DEMUL_VER/SET &/" "Demul\Demul.vers.mak" >"Demul.vers.bat"
CALL "Demul.vers.bat"
DEL "Demul.vers.bat"

REM --- Generate CMPro ZIP

zip "Demul %DEMUL_VER% (xml).zip" "Demul %DEMUL_VER%*"
mv "Demul %DEMUL_VER% (xml).zip" "%LOGIQX%/WWW/Dats/Demul/."

