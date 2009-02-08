@ECHO OFF

REM --- Move to CMPro directory

cd "%LOGIQX%\Dats\Recent\Multi"

REM --- Set the version number using the makefile

sed "s/^OLDSPARK_C++_VER/SET &/" "OldSpark C++\OldSpark C++.vers.mak" >"OldSpark C++.vers.bat"
CALL "OldSpark C++.vers.bat"
DEL "OldSpark C++.vers.bat"

REM --- Generate CMPro ZIP

zip "OldSpark C++ %OLDSPARK_C++_VER% (xml).zip" "OldSpark C++ %OLDSPARK_C++_VER%*"
mv "OldSpark C++ %OLDSPARK_C++_VER% (xml).zip" "%LOGIQX%/WWW/Dats/OldSpark/."

