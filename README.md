## Installation
Clone the repository and install the dependency

```bash
- cd weather-montreal
- git init
- git clone https://github.com/albertineMap/weather-montreal.git
- cp .env.example .env
- composer install
- npm init
- npm install
```

Then create the necessary database.

**Database** 

Create new database weather 

And run the initial migration

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
  ### Reload the page for the first time
