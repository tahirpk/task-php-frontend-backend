# task-php-frontend-backend

##  user job application

Frontend: user can send the application
Backend: listing add,edit approval delted

-   git clone https://github.com/tahirpk/task-php-frontend-backend.git
-   cd task-php-frontend-backend/
-   git checkout master
-   compoer install
-   php -r "file_exists('.env') || copy('.env.example', '.env');"
-   set the database name
-   php artisan key:generate
-   php artisan migrate
-   php artisan db:seed --class=UserSeeder
