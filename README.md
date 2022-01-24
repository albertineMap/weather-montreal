## Installation
First clone this repository, install the dependencies, and setup your .env file.

git clone git@github.com:JeffreyWay/Laravel-From-Scratch-Blog-Project.git blog
composer install
cp .env.example .env
Then create the necessary database.

**Database** 

Create database forecasts

And run the initial migrations

```bash
php artisan migrate 
```
 
**Run application**

 To run the application
 
 ```bash
 php artisan serve 
 npm run watch
 ```
 
**To run test**

```bash
 composer test
 ```
  ***reload the page for any problem ***
