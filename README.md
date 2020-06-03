<p align="center"><img width="200" src="https://image.flaticon.com/icons/svg/2413/2413697.svg" alt="Laravel Schedule Loop" /></p>

# Laravel Schedule Loop

[![StyleCI](https://github.styleci.io/repos/269178408/shield?branch=master)](https://github.styleci.io/repos/269178408)

## About

This package provides a `schedule:loop` command for Laravel that runs `schedule:run` every N seconds (60 by default)

## Installation

```sh
composer install rogervila/laravel-schedule-loop
```

## Usage

By default, it will loop every 60 seconds

```sh
php artisan schedule:loop
```

You may specify the loop sleep with an integer

```sh
# Will run schedule:run every 30 seconds.
php artisan schedule:loop 30
```

## License

Laravel Schedule Loop is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Icons made by <a href="https://www.flaticon.com/authors/iconixar" title="iconixar">iconixar</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a>
