@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^WINKAWAKS_VER/SET &/" "WinKawaks\WinKawaks.vers.mak" >"WinKawaks.vers.bat"
CALL "WinKawaks.vers.bat"
DEL "WinKawaks.vers.bat"

REM --- Generate CMPro ZIP

zip "WinKawaks %WINKAWAKS_VER% (xml).zip" "WinKawaks %WINKAWAKS_VER%*"
mv "WinKawaks %WINKAWAKS_VER% (xml).zip" "%LOGIQX%/WWW/Dats/WinKawaks/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Multi"

REM --- Generate RomCenter ZIP

zip "WinKawaks %WINKAWAKS_VER% (rc).zip" "WinKawaks %WINKAWAKS_VER%*"
mv "WinKawaks %WINKAWAKS_VER% (rc).zip" "%LOGIQX%/WWW/Dats/WinKawaks/."
