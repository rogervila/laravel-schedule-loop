<p align="center"><img width="200" src="https://image.flaticon.com/icons/svg/2413/2413697.svg" alt="Laravel Schedule Loop" /></p>

# Laravel Schedule Loop

[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=rogervila_laravel-schedule-loop&metric=alert_status)](https://sonarcloud.io/dashboard?id=rogervila_laravel-schedule-loop)
[![Coverage](https://sonarcloud.io/api/project_badges/measure?project=rogervila_laravel-schedule-loop&metric=coverage)](https://sonarcloud.io/dashboard?id=rogervila_laravel-schedule-loop)
[![StyleCI](https://github.styleci.io/repos/269178408/shield?branch=master)](https://github.styleci.io/repos/269178408)
[![Latest Stable Version](https://poser.pugx.org/rogervila/laravel-schedule-loop/v/stable)](https://packagist.org/packages/rogervila/laravel-schedule-loop)
[![Total Downloads](https://poser.pugx.org/rogervila/laravel-schedule-loop/downloads)](https://packagist.org/packages/rogervila/laravel-schedule-loop)
[![License](https://poser.pugx.org/rogervila/laravel-schedule-loop/license)](https://packagist.org/packages/rogervila/laravel-schedule-loop)

## About

This package provides a `schedule:loop` command for Laravel that runs `schedule:run` every N seconds (60 by default)

## Installation

```sh
composer require rogervila/laravel-schedule-loop
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
