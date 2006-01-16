@ECHO OFF

ECHO Generating RecentEmus.xml...
"c:\program files\clrmamepro\cmpro" /xml www.logiqx.com/Dats C:\GNU\Logiqx\WWW\Dats\RecentEmus.laptop.txt C:\GNU\Logiqx\WWW\Dats\RecentEmus.xml 
zip RecentEmus.zip RecentEmus.xml
rm RecentEmus.xml

ECHO Generating OlderEmus.xml...
"c:\program files\clrmamepro\cmpro" /xml www.logiqx.com/Dats C:\GNU\Logiqx\WWW\Dats\OlderEmus.laptop.txt C:\GNU\Logiqx\WWW\Dats\OlderEmus.xml
zip OlderEmus.zip OlderEmus.xml
rm OlderEmus.xml

ECHO Generating Systems.xml...
"c:\program files\clrmamepro\cmpro" /xml www.logiqx.com/Dats C:\GNU\Logiqx\WWW\Dats\Systems.laptop.txt C:\GNU\Logiqx\WWW\Dats\Systems.xml
zip Systems.zip Systems.xml
rm Systems.xml

PAUSE
