<?php
/**
 * Created by PhpStorm.
 * User: Eliot
 * Date: 9/26/14
 * Time: 2:54 PM
 */
echo "<h1>beerlocal.com: Hello World</h1>";
echo "<h1>" . __FILE__ . '</h1>';


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
    echo $row["br_breweryid"] . " - " . $row["br_name"] . "<br>";
}

