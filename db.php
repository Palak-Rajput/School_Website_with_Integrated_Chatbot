<?php
// $db['db_host'] = "localhost";
// $db['db_user'] = "root";
// $db['db_pass'] = "";
// $db['db_name'] = "cms";

// foreach ($db as $key => $value) {
//     define(strtoupper($key), $value);
// }
// $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$connection = mysqli_connect('localhost', 'root', '' , 'school');
if (!$connection)
    die("Connection Failed");
// else
//     echo "Connected";

// $serverName = "localhost";
// $userName = "root";
// $password = "";
// $dbName = "school";

// try{
//     $connection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);

//     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "success";
// }
// catch (PDOException $e){
//     echo "Error: " . $e->getMessage();
// }
?>
