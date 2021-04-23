@ECHO OFF

:BEGIN
ECHO -------------------------------------------

ECHO [1] php artisan make:auth
ECHO [2] php artisan make:controller
ECHO [3] php artisan db:migrate --fresh
ECHO [4] php artisan make:seeder
ECHO [5] php artisan db:seed
ECHO [6] exit

CHOICE /N /C:12345 /M "Select Artisan Options:"%1
IF ERRORLEVEL ==6 GOTO 6
IF ERRORLEVEL ==5 GOTO 5
IF ERRORLEVEL ==4 GOTO 4
IF ERRORLEVEL ==3 GOTO 3
IF ERRORLEVEL ==2 GOTO 2
IF ERRORLEVEL ==1 GOTO 1
GOTO END

SET /p ArtisanOpt= "Select Artisan Options:"

:1
	call composer require laravel/ui
	call php artisan ui vue --auth
	call npm install
	call npm run dev
GOTO BEGIN

:2
	SET /p ControllerName="Enter Controller Name:"
	call php artisan make:controller %ControllerName%Controller
GOTO BEGIN


:3
	call php artisan db:migrate --fresh
GOTO BEGIN

:4
	SET /p SeederName="Enter Seeder Name:"
	call php artisan make:seeder %SeederName%Seeder
GOTO BEGIN

:5
	call composer dump-autoload
	call php artisan db:seed
GOTO BEGIN
:6
GOTO END
:END


pause