# Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See [deployment](#deployment) for notes on how to deploy the project on a live system.

### Prerequisites

You will need to have composer and php installed on your system. You can get them from [here](https://getcomposer.org/download/) and [here](https://www.php.net/downloads.php).

### Installing

1. Open up your command prompt and navigate to the folder where you have downloaded the project files.
2. Run `composer install` in the command prompt. If you get an error saying access is denied then turn off your antivirus for a while and try again.
3. Once composer has finished installing the dependencies run `php artisan key:generate` to generate an encryption key for your app.
4. Finally run `php artisan serve` to launch the site.

