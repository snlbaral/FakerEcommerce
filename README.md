# FakerEcommerce
# =======================

Ecommerce Products names generate using fakerphp/faker


Installation
------------

Add the FakerEcommerce library to your `composer.json` file:

```
composer require snlbaral/faker-ecommerce
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
