@echo off
set "PATH=D:\xampp\php;C:\xampp\php;C:\ProgramData\ComposerSetup\bin;%PATH%"
cd /d "%~dp0"
echo ===================================================
echo   Core Unity Solutions - Laravel CMS and Frontend
echo ===================================================
echo   Website:    http://127.0.0.1:8000
echo   Admin CMS:  http://127.0.0.1:8000/admin
echo   Email:      admin@coreunity.com
echo   Password:   admin123
echo ===================================================
php artisan serve
pause
