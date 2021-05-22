<?php

include './config/Database.php';
$database = new Database();
$db = $database->connect();

// if($db) {echo "CONNECTION";}

require "vendor/autoload.php";

$faker = \Faker\Factory::create();
$password = 'password';

    $query = "INSERT INTO users (name, email, password) VALUES('".$faker->name."', '".$faker->email."', '".$password."')";

    $stmt = $db->prepare($query);
    $stmt->execute();


echo "DONE";