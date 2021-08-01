# Instruction for run this project 
## create a database
- create a database named "student_app_db"
## To copy sample
- copy .env_example .env 
 ## To install packges
- composer install
## To migrate and seed dummy data
- php artisan migrate:fresh --seed
## To server the application on port 8000
- php artisan serve