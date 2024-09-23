# PHP Laravel environment
Docker environment required to run Laravel (based on official php and mysql docker hub repositories).

[![Actions Status](https://github.com/systemsdk/docker-nginx-php-laravel/workflows/Laravel%20App/badge.svg)](https://github.com/systemsdk/docker-nginx-php-laravel/actions)
[![CircleCI](https://circleci.com/gh/systemsdk/docker-nginx-php-laravel.svg?style=svg)](https://circleci.com/gh/systemsdk/docker-nginx-php-laravel)
[![Coverage Status](https://coveralls.io/repos/github/systemsdk/docker-nginx-php-laravel/badge.svg)](https://coveralls.io/github/systemsdk/docker-nginx-php-laravel)
[![Latest Stable Version](https://poser.pugx.org/systemsdk/docker-nginx-php-laravel/v)](https://packagist.org/packages/systemsdk/docker-nginx-php-laravel)
[![Total Downloads](https://poser.pugx.org/systemsdk/docker-nginx-php-laravel/downloads)](https://packagist.org/packages/systemsdk/docker-nginx-php-laravel)
[![MIT licensed](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

[Source code](https://github.com/systemsdk/docker-nginx-php-laravel.git)

## Requirements
* Docker Engine version 18.06 or later
* Docker Compose version 1.22 or later
* An editor or IDE
* MySQL Workbench

Note: OS recommendation - Linux Ubuntu based.

## Components
1. Nginx 1.27
2. PHP 8.3 fpm
3. MySQL 8
4. Laravel 11
5. Mailpit (only for debug emails on dev environment)

## Setting up Docker Engine with Docker Compose
For installing Docker Engine with docker compose please follow steps mentioned on page [Docker Engine](https://docs.docker.com/engine/install/).

Note 1: Please run next cmd after above step if you are using Linux OS: `sudo usermod -aG docker $USER`

Note 2: If you are using Docker Desktop for MacOS 12.2 or later - please enable [virtiofs](https://www.docker.com/blog/speed-boost-achievement-unlocked-on-docker-desktop-4-6-for-mac/) for performance (enabled by default since Docker Desktop v4.22).

## Setting up DEV environment
1.You can clone this repository from GitHub or install via composer.

Note: Delete `storage/mysql-data` folder if it is exists.

If you have installed composer and want to install environment via composer you can use next cmd command:
```bash
composer create-project systemsdk/docker-nginx-php-laravel example-app
```

2.Add domain to local `hosts` file:
```bash
127.0.0.1    localhost
```

3.Configure `/docker/dev/xdebug-main.ini` (Linux/Windows) or `/docker/dev/xdebug-osx.ini` (MacOS) (optional):

- In case you need debug only requests with IDE KEY: PHPSTORM from frontend in your browser:
```bash
xdebug.start_with_request = no
```
Install locally in Firefox extension "Xdebug helper" and set in settings IDE KEY: PHPSTORM

- In case you need debug any request to an api (by default):
```bash
xdebug.start_with_request = yes
```

4.Build, start and install the docker images from your terminal:
```bash
make build
make start
make composer-install
make env-dev
```
Note: If you want to change default docker configurations (web_port, etc...) - open `.env` file, edit necessary environment variable value and stop, rebuild, start docker containers.

5.Make sure that you have installed migrations/seeds:
```bash
make migrate
make seed
```

6.Set key for application:
```bash
make key-generate
```

7.In order to use this application, please open in your browser next urls:
- [http://localhost](http://localhost)
- [http://localhost:8025 (Mailpit)](http://localhost:8025)

