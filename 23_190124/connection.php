<?php


function connect() {
    $localhost = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "phones_db";
    //połączenie z bazą danych
    return mysqli_connect($localhost, $user, $pass, $dbName);
}
