<?php

error_reporting(E_ALL | E_STRICT);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

echo "<h1>beerlocal.com: " . __FILE__ . '</h1>';

$db = new mysqli("127.0.0.1","root","root99","beer");

if ($db->connect_errno > 0) {
    die("Error: Cannot connect to Database beer ");
}

//consultation:

$sql = "SELECT * FROM brewery";

//execute the query.

$result = $db->query($sql);

//display information:
while($row = mysqli_fetch_array($result)) {
    $id = $row["br_breweryid"];
    $breweryName = $row["br_name"];

    $outputLine = $id . " - " . $breweryName . "<br>";

    echo $outputLine;
}

