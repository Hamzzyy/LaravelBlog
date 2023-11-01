
## Installation

First clone this repository and setup your .env file.

```
git clone https://github.com/ch-hamzzyy/Laravel.git
```
```
cp .env.example .env
```
Then create the necessary database.


```
create database blog
```
Install Dependencies


```
composer install
```
```
npm install
```


And run the initial migrations and seeders.

```
php artisan migrate --seed
```
After that you are good to go and run this command
```
php artisan serve
```
