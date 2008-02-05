@ECHO OFF

ECHO Generating RecentEmus.xml...
e:\tools\clrmamepro\cmpro /xml www.logiqx.com/Dats e:\Logiqx\WWW\Dats\RecentEmus.txt e:\Logiqx\WWW\Dats\RecentEmus.xml 
zip RecentEmus.zip RecentEmus.xml
rm RecentEmus.xml

ECHO Generating OlderEmus.xml...
e:\tools\clrmamepro\cmpro /xml www.logiqx.com/Dats e:\Logiqx\WWW\Dats\OlderEmus.txt e:\Logiqx\WWW\Dats\OlderEmus.xml
zip OlderEmus.zip OlderEmus.xml
rm OlderEmus.xml

ECHO Generating Systems.xml...
e:\tools\clrmamepro\cmpro /xml www.logiqx.com/Dats e:\Logiqx\WWW\Dats\Systems.txt e:\Logiqx\WWW\Dats\Systems.xml
zip Systems.zip Systems.xml
rm Systems.xml

ECHO Generating MAMESuperSet.xml...
e:\tools\clrmamepro\cmpro /xml www.logiqx.com/Dats e:\Logiqx\WWW\Dats\MAMESuperSet.txt e:\Logiqx\WWW\Dats\MAMESuperSet.xml
zip MAMESuperSet.zip MAMESuperSet.xml
rm MAMESuperSet.xml

PAUSE
