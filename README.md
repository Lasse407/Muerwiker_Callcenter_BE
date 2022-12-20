# Documentation
## Installation
Install Laravel with Composer
`composer create-project laravel/laravel example-app`

## Database Setup

1. Install a Database-Application (i.e. mysql)

2. Set up a new local database

3. Connect the new database to the project by adapting the .env file and change the following:

`DB_CONNECTION=(type of database, i.e. 'mysql')`

`DB_HOST=localhost`

`DB_PORT=3306`

`DB_DATABASE=(name of database)`

`DB_USERNAME=root`

`DB_PASSWORD=password`

4. Execute the following commands:

    
terminal -> open folder ./backend/ and type
- `php artisan serve`
- `php artisan migrate`
- `php artisan db:seed`


## Start up 
Frontend: terminal -> open folder ./frontend/ and type `npm run dev`

Backend: terminal -> open folder ./backend/ and type `php artisan serve`


