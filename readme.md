# Quick Start Guide

## Instalation

**1. Clone this repo:**

```sh
git clone https://github.com/FerdyID/Revisi_Blog.git
```

**2. Update the dependencies:**

```sh
composer update
```

**3. Copy `.env` file:**

```sh
copy .env.example .env
```

**4. Generate app key **

```sh
php artisan key:generate
```

**5. Setup database config `.env` **

```sh
...

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=your-mysql-username
DB_PASSWORD=your-mysql-password

...
```

**6. Running Database Migration**

```sh
php artisan migrate
```

**7. Running Database Seeder**

```sh
php artisan db:seed
```

**8. Running Development Server**

```sh
php artisan serve
```

> Please open the following url `localhost:8080/blog`


