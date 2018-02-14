# Time-sheet

Sample project using Symfony2.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

1. Install PHP and MySQL on your computer
2. Install composer for dependencies

### Installing

A step by step series of examples that tell you have to get a development env running

Clone this repository and install dependencies


1. $ git clone <this_repo>
2. $ cd time-sheet
3. $ composer install

Setting up our database


1. $ php app/console doctrine:database:create

2. $ php app/console doctrine:schema:update --force


Run the application


$ php app/console server:run

Open your browser and access


http://localhost:8000/


## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Symfony2](https://symfony.com/doc/2.6/index.html) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning.

## Authors

* **Leandro Souza** - *Initial work*


## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Acknowledgments

* This project is in development
