@ECHO OFF

ECHO Generating RecentEmus.xml...
e:\tools\cmpro\cmpro /xml www.logiqx.com/Dats H:\Logiqx\WWW\Dats\RecentEmus.txt H:\Logiqx\WWW\Dats\RecentEmus.xml 
zip RecentEmus.zip RecentEmus.xml
rm RecentEmus.xml

ECHO Generating OlderEmus.xml...
e:\tools\cmpro\cmpro /xml www.logiqx.com/Dats H:\Logiqx\WWW\Dats\OlderEmus.txt H:\Logiqx\WWW\Dats\OlderEmus.xml
zip OlderEmus.zip OlderEmus.xml
rm OlderEmus.xml

ECHO Generating Systems.xml...
e:\tools\cmpro\cmpro /xml www.logiqx.com/Dats H:\Logiqx\WWW\Dats\Systems.txt H:\Logiqx\WWW\Dats\Systems.xml
zip Systems.zip Systems.xml
rm Systems.xml
