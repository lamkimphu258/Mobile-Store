<?php
include "init.php";

function connection_to_database()
{
    $connection = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
    return $connection;
}

function confirm_query($connection, $result)
{
    if (!$result) {
        echo "QUERY FAILED" . mysqli_error($connection);
        exit();
    }
}
