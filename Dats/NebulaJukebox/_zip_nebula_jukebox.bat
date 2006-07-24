@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Sound"

REM --- Set the version number using the makefile

sed "s/^NEBULA_JUKEBOX_VER/SET &/" "Nebula Jukebox\Nebula Jukebox.vers.mak" >"Nebula Jukebox.vers.bat"
CALL "Nebula Jukebox.vers.bat"
DEL "Nebula Jukebox.vers.bat"

REM --- Generate CMPro ZIP

zip "Nebula Jukebox %NEBULA_JUKEBOX_VER% (cm).zip" "Nebula Jukebox %NEBULA_JUKEBOX_VER%*"
mv "Nebula Jukebox %NEBULA_JUKEBOX_VER% (cm).zip" "%LOGIQX%/WWW/Dats/NebulaJukebox/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Sound"

REM --- Generate RomCenter ZIP

zip "Nebula Jukebox %NEBULA_JUKEBOX_VER% (rc).zip" "Nebula Jukebox %NEBULA_JUKEBOX_VER%*"
mv "Nebula Jukebox %NEBULA_JUKEBOX_VER% (rc).zip" "%LOGIQX%/WWW/Dats/NebulaJukebox/."
