## Smokoff Website
<a href="https://smokoff.me">Click here to go to smokoff.me</a>

## About this repository
This is the project repository of our group 6 web application development and security class at Binus International batch 2021.
The main reason of this project is to make a stop smoking website application.
- It's SOA, Service Oriented Architecture
- This is only the back end part
- Use Laravel as the framework for the back-end
- Use MySQL for the Databases

## Feature/ API in this repository
- Login and logout with Jwt Authorization
- sending E-mail reminder (Can check it with Mailtrap)
- CRUD for all the table
- user unique email validation
- Authorization for role, admin and user
- use faker to generate database dummy data

## How to use this
- Prepare the environment needed to use laravel, for further information click <a href="https://laravel.com/docs/5.8">Laravel.com/docs/5.8</a>
- Clone the repository to your local machine
- open your command promt/terminal
- open the file location from your command promt/terminal
- then you can already use it, to check all the command, you can type "php artisan list"
- make sure you already make database and change the database data in the .env file.
- the current name of database is "smokoff" username="root" and password="", if you use this for the databse, then you don't need to change anything in the .env file
- run "php aritsan migrate --seed" to make the table your and the row in the table with faker
- if you use localhost, you need to "php artisan serve"
- you can check the code by using code editor such as Visual studio code, sublime, ect


Thank you for reading this repository, sorry if there are alot of mistake and please help in making this back-end more perfect. 