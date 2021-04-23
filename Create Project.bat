@ECHO OFF
ECHO Create Laravel Project
SET /p ProjectName="Enter Project Name: "
call laravel new %ProjectName%
ECHO Create Project is done...
copy *.bat %ProjectName%
PAUSE