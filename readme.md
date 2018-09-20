# Understanding

Understanding is a project designed to explore the possibilities inherent in linked data and extracting content from APIs. The idea is to extract named entities for specific areas of study (say Philosophy) from Wikipedia and then use other, available services and APIs (such as wikidata, youtube) to make connections between those entities and to provide associated content around them.

## Getting Started

The project uses bitnami's base laravel/docker installer. Simpple clone the repo cd into the directory and 
```
docker up
```

### Prerequisites

What things you need to install the software and how to install them

```
Give examples
```

### Installing

A step by step series of examples that tell you how to get a development env running

Say what the step will be

```
Give the example
```

And repeat

```
until finished
```
If you get errors when seeding the database first make sure you DB is configured to allow emoji's (some of the content comes from YouTube for example). This means you need to configure the DB connection:
'charset' => 'utf8mb4',
'collation' => 'utf8mb4_unicode_ci',

and make sure that the DB and media table at least are converted 
SET NAMES utf8mb4;
ALTER DATABASE understanding CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
ALTER TABLE media CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

If you get an error like the following when migrating:
```
Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes
```
Just follow the steps [here](https://laravel-news.com/laravel-5-4-key-too-long-error)


## Running the tests

./vendor/bin/phpunit runs the tests

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

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Sam Dwyer** - *Initial work* - [Steerpike](https://github.com/steerpike)

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc
