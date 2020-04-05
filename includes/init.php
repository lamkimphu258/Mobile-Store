<?php
define("DB_HOSTNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "1234");
define("DB_NAME", "mobile-store");

function connection_to_database()
{
    $connection = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
    return $connection;
}

$connection = connection_to_database();

if (!$connection) {
    echo "Connect to database fail";
    exit();
}
