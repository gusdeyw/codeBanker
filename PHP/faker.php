<?php

require_once 'vendor/autoload.php';


// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name();
echo '<br>';
echo '<br>';
// 'Vince Sporer'
echo $faker->email();
echo '<br>';
echo '<br>';
// 'walter.sophia@hotmail.com'
echo $faker->text();

echo '<br>';
echo '<br>';
// 'Numquam ut mollitia at consequuntur inventore dolorem.'


for ($i = 0; $i < 10; $i++) {
    echo $faker->name() . "\n";
    echo '<br>';
    echo '<br>';
}

// 'Cyrus Boyle'
// 'Alena Cummerata'
// 'Orlo Bergstrom'