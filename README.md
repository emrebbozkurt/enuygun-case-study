# Enuygun Case Study

enuygun.com case study project created with [Laravel](https://github.com/laravel/laravel).

* [Installation](#installation)
* [Usage](#usage)

## Installation

1. Clone the project:

    ```bash
    git clone https://github.com/emrebbozkurt/enuygun-case-study.git
    ```

2. Starting the docker containers:

    ```bash
    docker-compose up -d --build
    ```

3. Install packages:

    ```bash
    composer install
    ```

4. Copy .env.example file and rename to .env


5. Generate the application key:

    ```php
    php artisan key:generate
    ```

6. Create the tables:

    ```php
    php artisan migrate --seed
    ```

## Usage

Create the tasks from providers:

```php
php artisan tasks:create
```

Go to http://localhost:8080 and see the magic :D
