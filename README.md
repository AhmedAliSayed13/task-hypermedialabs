# task-hypermedialabs

## Run the project
1. Clone repository

    ```
        1.1- git clone https://github.com/AhmedAliSayed13/task-hypermedialabs.git
        1.2- cd task-hypermedialabs 
        1.3- composer install
        1.4- cp .env.example .env
        1.5- php artisan key:generate
    ```
2. Database 

    2.1 Create database with name `task-hypermedialabs`

    2.2 Database Configuration in .env file in application root
    ``` 
        DB_DATABASE=task-hypermedialabs
        DB_USERNAME=
        DB_PASSWORD=
        Put your database user after DB_USERNAME, and your user password after DB_PASSWORD
    ```
    2.3 Migrate & seed
    ``` 
        php artisan migrate --seed
    ```
    2.4 Run the project
    ```
        php artisan serve
    ```
---
## License
Ahmed Ali application Copyright © 2022 .
