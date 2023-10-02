# About

This project aims to convert an existing Laravel project to use Laravel Livewire components. At this moment we are only doing a proof of concept, so we are only converting a few pages with a limited number of components.

In addition, the components must interface with a backend API controller to get the data. The API controller is already created and the data is already being mocked. You will need to create the Laravel Livewire components and populate them with data from the API controller.

# Get Started

- Create an empty folder

- Unzip the contents of the site to the folder

- Setup a mysql database

- Configure the .env file

- Run:
```
composer update
php artisan cache:clear
php artisan view:clear
php artisan route:clear
php artisan migrate
php artisan serve
```
You can test the backend API controller using the following command:
```
./vendor/bin/phpunit ./tests/Feature/BackendApiTest.php
```

# High Level Requirements

- Convert a data table and apex chart to use Laravel Livewire components using the backend API controller to get the data.
- Convert a form to use Laravel Livewire components using the backend API controller to post the data to a file on disk.
- Convert the login, logout, and register pages to use Laravel Livewire components using the existing model and controller.

# Out of Scope

- UI design
- Database design
- Documentation

# Detailed Requirements

Once you launch the website, you will see a list of pages that need to be converted to Laravel Livewire components.

The following pages need to be converted:

login

- convert to Laravel Livewire component.
- use the existing model and controller, no need to use the backend API controller.

logout

- convert to Laravel Livewire component.
- use the existing model and controller, no need to use the backend API controller.

register

- convert to Laravel Livewire component.
- use the existing model and controller, no need to use the backend API controller.

chart->apex charts->line with data labels

- convert to Laravel Livewire component.

- populate data from Backend API controller using get.

Sample code to get the apex data:
```
use App\Http\Controllers\BackendApi;
$api = new BackendApi();
$response = $api->get('apexchart');
```

tables->data tables->default data table

- convert to Laravel Livewire component.

- populate data from Backend API controller using get.

Sample code to get the datatable data:
```
use App\Http\Controllers\BackendApi;
$api = new BackendApi();
$response = $api->get('datatable');
```

forms->basic elements->basic form

- convert to Laravel Livewire component.

- populate data from Backend API controller using get.

Sample code to post the form data:
```
use App\Http\Controllers\BackendApi;
$api = new BackendApi();
$response = $api->post('form', ["name" => "John Doe", "username" => "john@hon.com"]);
```
