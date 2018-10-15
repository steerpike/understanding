# Understanding

Understanding is a project designed to explore the possibilities inherent in linked data and extracting content from APIs. The idea is to extract named entities for specific areas of study (say Philosophy) from Wikipedia and then use other, available services and APIs (such as wikidata, youtube) to make connections between those entities and to provide associated content around them.

## Getting Started

The project uses bitnami's base laravel/docker installer. Simply clone the repo, cd into the directory and 
```
docker-compose up
```

### Prerequisites

It's recomemnded you create a few aliases to simplify some of the commands you'll be doing over and over again during development. I recommend having the following (or similar) in your ~/.bash_profile

```
alias dphp='docker-compose exec app php'
alias dc='docker-compose exec app'
```
This allows you to run commands as:
```
dc composer install
```
and
```
dphp artisan <command>
```

### Installing

The project uses bitnami's base laravel/docker installer. Simply clone the repo, cd into the directory and 
```
docker-compose up
```
Once docker-compose has finished orchestrating everythign you should be able to do
```
dc npm install
dphp artisan migrate:refresh --seed
dc npm run watch
```
and then visit
```
http://localhost:3000/
```

If you get errors when seeding the database first make sure you DB is configured to allow emoji's (some of the content comes from YouTube for example). This means you need to configure the DB connection in config/database.php:
```
'charset' => 'utf8mb4',
'collation' => 'utf8mb4_unicode_ci',
```

and make sure that the DB and media table at least are converted 
```
SET NAMES utf8mb4;
ALTER DATABASE understanding CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
ALTER TABLE media CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

If you get an error like the following when migrating:
```
Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes
```
Just follow the steps [here](https://laravel-news.com/laravel-5-4-key-too-long-error)

If you need to ssh into the Docker container
```
docker exec -it understanding_app_1 bash
```
This lets you do things like change the php.ini file
	/opt/bitnami/php/lib/php.ini

## Running the tests

```
dc ./vendor/bin/phpunit 
```
runs the tests if you have previously created the aliases mentioned above.

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Laravel 5.6](https://laravel.com/docs/5.6/) - The web framework used
* [Docker](https://maven.apache.org/) - Container Management
* [Bitnami Laravel Development Container](https://hub.docker.com/r/bitnami/laravel/) - Base docker container

## Contributing


## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Sam Dwyer** - *Initial work* - [Steerpike](https://github.com/steerpike)

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc
