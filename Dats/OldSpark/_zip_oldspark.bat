@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^OLDSPARK_C++_VER/SET &/" "OldSpark C++\OldSpark C++.vers.mak" >"OldSpark C++.vers.bat"
CALL "OldSpark C++.vers.bat"
DEL "OldSpark C++.vers.bat"

REM --- Generate CMPro ZIP

zip "OldSpark C++ %OLDSPARK_C++_VER% (cm).zip" "OldSpark C++ %OLDSPARK_C++_VER%*"
mv "OldSpark C++ %OLDSPARK_C++_VER% (cm).zip" "%LOGIQX%/WWW/Dats/OldSpark/."

REM --- Move to RomCenter directory

cd "%LOGIQX%\Dats_RC\Recent\Multi"

REM --- Generate RomCenter ZIP

zip "OldSpark C++ %OLDSPARK_C++_VER% (rc).zip" "OldSpark C++ %OLDSPARK_C++_VER%*"
mv "OldSpark C++ %OLDSPARK_C++_VER% (rc).zip" "%LOGIQX%/WWW/Dats/OldSpark/."
