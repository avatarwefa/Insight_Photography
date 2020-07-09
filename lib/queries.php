<?php
function myConnect() {
    $servername = "127.0.0.1:3306";
    // $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "insight";
    $conn = mysqli_connect($servername, $username, $password);
    mysqli_select_db($conn, $dbname);
    mysqli_query($conn, "SET NAME 'utf8'");
    return $conn;
}
