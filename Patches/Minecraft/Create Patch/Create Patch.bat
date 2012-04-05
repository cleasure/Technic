@ECHO OFF
title Technic Patch Maker

:new
set /P newversion=What is the new version of Minecraft: %=%
if "%newversion%"=="" goto new

:old
set /P oldversion=What is the desired version of Minecraft: %=%
if "%oldversion%"=="" goto old

java -classpath diff.jar ie.wombat.jbdiff.JBDiff minecraft_%newversion%.jar minecraft_%oldversion%.jar Minecraft_%newversion%-%oldversion%.patch
echo Done
pause
Exit