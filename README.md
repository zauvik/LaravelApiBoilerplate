# Laravel Api Pre-Setup
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## This set-up contain :
1. Repository design pattern
2. Service desugn pattern
3. Multi table OAuth 2.0 using Lravel Passport and smartins multi auth packages (https://github.com/sfelix-martins/passport-multiauth)
4. Cors origin middleware
5. Api format helper

## How to Install
You can install this project like installing regular composer peoject:
1. Install All depedency : composer Install
1. Make .env file and setting database properly
1. Generate app key : php artisan key:generate
1. Re-cache config : php artisan config:cache
1. Install passport client key : php artisan passport:install
1. Migrate your database : php artisan migrate
1. Seed dummy user : php artisan db:seeed

## Presented by :
![N|Solid](https://miro.medium.com/max/366/1*bl_W60QmWU_0N7iLSDbxFA.png)

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
