## Instructions

I created the system using the latest version of the Laravel Framework. I used migrations to create the tables and all tables have a seeder to populate the database
On this project, I used the MySQL database and for testing the application I used Insomnia.

To access the endpoints of this webservice, please access: 
http://flighthub.hellenpastana.com

Moreover, a json file with the endpoints from Insomnia are available in a separate file in public/endpoints.

PS: Prepare the file .env before running the command below, in order to run the migration correctly.

- composer update
- php artisan key: generate
- php artisan migrate --seed


## About the project

This is a project designed to get a list of available flights according to filters requested by the user.
