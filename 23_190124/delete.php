<?php

//var_dump($_GET['id']);
include("connection.php");
$conn = connect();

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM phones WHERE id = $id";
   $result = mysqli_query($conn, $sql);
   if($result) {
       mysqli_close($conn);
       header("Location: read.php");
   } else {
       echo "Błąd przy usuwaniu telefonu";
   }
}


