
## Installation

First, clone this repository and set up your .env file.

```
git clone https://github.com/ch-hamzzyy/Laravel.git
```
```
cp .env.example .env
```
Then create the necessary database, by default the .env will be configured as blog so feel free to change it or go with the default one.


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
Link Storage

```
php artisan storage:link
```
Generate Application Key
```
php artisan key:generate
```
After that, you are good to go and run these commands in separate terminals
```
npm run dev
```
```
php artisan serve
```
After Making Changes, before going for production run this command
```
npm run build
```
