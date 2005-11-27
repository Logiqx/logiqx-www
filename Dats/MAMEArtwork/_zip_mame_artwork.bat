@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Resources"

REM --- Set the version number using the makefile

sed "s/^MAME_ARTWORK_VER/SET &/" "Mame Artwork\Mame Artwork.vers.mak" >"Mame Artwork.vers.bat"
CALL "Mame Artwork.vers.bat"
DEL "Mame Artwork.vers.bat"

REM --- Generate CMPro ZIP

zip "MAME Artwork %MAME_ARTWORK_VER% (cm).zip" "MAME Artwork %MAME_ARTWORK_VER%*"
mv "MAME Artwork %MAME_ARTWORK_VER% (cm).zip" "%LOGIQX%/WWW/Dats/MAMEArtwork/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Resources"

REM --- Generate RomCenter ZIP

zip "MAME Artwork %MAME_ARTWORK_VER% (rc).zip" "MAME Artwork %MAME_ARTWORK_VER%*"
mv "MAME Artwork %MAME_ARTWORK_VER% (rc).zip" "%LOGIQX%/WWW/Dats/MAMEArtwork/."
