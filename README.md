# CRUD with Laravel

## Abstract
This project aims to put my studies with Laravel into practice. Follow my code and then see the GIF below:

#### Server requirements:
- PHP >= 7.2.5
- BCMath PHP Extension
- Ctype PHP Extension
- Fileinfo PHP extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
-  XML PHP Extension

---

- **Cloning the repository**
```
$ git clone https://github.com/gilmarodp/crud-laravel.git
$ cd crud-laravel
$ cp .env.example .env
```

- **Installing depencies with the composer**
```
$ composer install
```

- **Edit the file .env and configure with your database**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
- **Commands I runned with the `artisan`**
```
$ php artisan make:controller Form\\UserController --resource --model=User
$ php artisan migrate
```

- **Files and folder I changed or I created**
```
app/Providers/AppServiceProvider.php
routes/web.php
app/Http/Controllers/Form/
app/Http/Controllers/Form/UserController.php
resources/views/createUser.blade.php
resources/views/editUser.blade.php
resources/views/listAllUsers.blade.php
resources/views/showUser.blade.php
```

# Demonstration of the CRUD

### I - Create
![Create example](https://media.giphy.com/media/Ihmkmq1hukuFS9XZT9/giphy.gif)

### II - Read
![Read example](https://media.giphy.com/media/JpXpbTzKOOkdnPQoSo/giphy.gif)

### III - Update
![Update example](https://media.giphy.com/media/RfjVShkC0A0pdqFtLQ/giphy.gif)

### IV - Delete
![Delete example](https://media.giphy.com/media/JO9h1io1leqxH32GtR/giphy.gif)


Built with ❤ by [**Antonio Gilmar**](//instagram.com/gilmarodp)