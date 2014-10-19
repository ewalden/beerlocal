<?php
/**
 * Created by PhpStorm.
 * User: Eliot
 * Date: 10/19/14
 * Time: 3:13 PM
 */

$eol = "<br />";

$d = $_GET ['dow'] % 7;


$dayofweek = array("sunday","monday","tuesday","wednesday","thursday","friday","saturday");
echo "today is " .$dayofweek [$d];



$tax = array(
    "nassau" => "8.65",
    "suffolk" => "8.90",
    "nyc" => "10.00",
    "default" => "unknown",
 );

$county = $_GET ['county'];

if (empty($tax [$county])) {
    $county = 'default';
}

$cities = array(
    "phoenix",
    "chicago",
    "new york",
);
echo "<pre>";
print_r ($cities);

echo "<br />";

sort($cities);
print_r ($cities);

echo "</pre>";

foreach ($cities as $city) {
    printf ("%s". $eol, $city);
;}

foreach ($tax as $key => $value) {
    printf ("%s %s ". $eol, $key, $value);
    ;}