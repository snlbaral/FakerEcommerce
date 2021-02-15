# FakerEcommerce

[![Latest Stable Version](https://poser.pugx.org/snlbaral/faker-ecommerce/v)](//packagist.org/packages/snlbaral/faker-ecommerce) [![Total Downloads](https://poser.pugx.org/snlbaral/faker-ecommerce/downloads)](//packagist.org/packages/snlbaral/faker-ecommerce) [![Latest Unstable Version](https://poser.pugx.org/snlbaral/faker-ecommerce/v/unstable)](//packagist.org/packages/snlbaral/faker-ecommerce) [![License](https://poser.pugx.org/snlbaral/faker-ecommerce/license)](//packagist.org/packages/snlbaral/faker-ecommerce)

Ecommerce Products names generate using fakerphp/faker


Installation
------------

Add the FakerEcommerce library to your `composer.json` file:

```
composer require snlbaral/faker-ecommerce
```

Init
-----
```php
<?php
include 'vendor/autoload.php';
```

Usage
-----
To  use this with [Faker](https://github.com/fzaninotto/Faker), you must add the `FakerEcommerce\Ecommerce` class to the Faker generator:

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \FakerEcommerce\Ecommerce($faker));

// Generator
$faker->televisions();
$faker->mobilePhones();
$faker->laptops();
$faker->cameras();
$faker->mensClothing();
$faker->womensClothing();
$faker->jewelry();
$faker->watches();
```
