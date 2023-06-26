

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## About Projects

It is Eray Dura's Blog there is about me, blogs/projects, and contact me

How To Run downloaded Laravel Projects From GITHUB on localhost XAMPP 

STEPS:
download zip file or clone the project
cd laravel-starter
cp .env.example .env
open .env and update DB_DATABASE (database details)
run : composer install
run : php artisan key:generate
run : php artisan migrate:fresh --seed
run : php artisan serve

