
export DB_HOST=your db host
export DB_CONNECTION=mysql
export DB_PORT=3306
export DB_DATABASE=your db name
export DB_USERNAME=your db username
export DB_PASSWORD=you

WEB_DIR=$(pwd)
ENV_FILE=".env"

# Determine the action to perform
action="$1"
command="$2"

if [ "$action" == "start" ]; then
    composer update
    php artisan cache:clear
    php artisan view:clear
    php artisan route:clear

    php artisan serve --port=8000

elif [ "$action" == "test" ];  then
    ./vendor/bin/phpunit ./tests/Feature/BackendApiTest.php

elif [ "$action" == "artisan" ]; then
    php artisan $command

fi
