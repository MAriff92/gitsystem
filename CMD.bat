@ECHO OFF
ECHO php artisan make:auth
ECHO php artisan make:controller
ECHO php artisan db:migrate --fresh
ECHO php artisan make:seeder
ECHO php artisan db:seed

SET /p laravelcommand = "Enter Or Paste Here:"
call %laravelcommand%

PAUSE