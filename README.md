
# Monitoring Kendaraan
Aplikasi ini merupakan Monitoting Kendaraan perusahaan 


## Tech

Monitoring kendaraan uses a number of open source projects to work properly:

- [Laravel -V 8.0](https://laravel.com/docs/8.x) - Laravel is an open source PHP-based web application framework, using the Model-View-Controller concept.
- [Visual Studio Code](https://code.visualstudio.com/download) - 
Visual Studio Code is Microsoft's source-code editing software for Linux, macOS, and Windows.
- [Xampp](https://www.apachefriends.org/download.html) - 
XAMPP is free software, which supports many operating systems, is a compilation of several programs.
- [PHP -V 7.4](https://www.php.net/downloads.php) - 
PHP: Hypertext Preprocessor or simply PHP, is a general-purpose scripting language primarily used for web development.
- [Composer](https://getcomposer.org/download/) - 
Composer is a package manager application for the PHP programming language that provides a standard format for managing PHP dependencies and required libraries.
- [Database -V 10.4.24](http://localhost/phpmyadmin/) - 
Database or database is a collection of data that is managed in such a way based on certain conditions that are interconnected so that it is easy to manage. Through this management, users can find it easy to find information, store information and dispose of information.



create a database in phpmy admin with the name pt.akucintaindonesiaraya and configure it in the .env file by changing it to

DB_DATABASE=monitoring

DB_USERNAME=root

DB_PASSWORD=

```
Composer install
php artisan migrate
php artisan db:seed --CreateUsersSeeder
php artisan serve
```

Username : admin@gmail

Password : 123456

Username : penyetuju@gmail

Password : 123456
