<?php

use Faker\Generator as Faker;
use App\Country;

$factory->define(Country::class, function (Faker $faker) {
  return [
    Country::ISO_CODE => $faker->countryCode,
    Country::NAME => $faker->country
  ];
});
