<?php

include('connection.php');
$conn = connect();
$msg = "";

// var_dump($_POST);
if (isset($_POST['btn'])) {
    if(!empty(trim($_POST['title'])) && !empty(trim($_POST['description']))) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        //wysyłnie danych do bazy danych
        mysqli_set_charset($conn, 'utf8');
        $sql = "INSERT INTO phones(title, description) VALUES('$title', '$description')";
        $result = mysqli_query($conn, $sql);
        // if($result) {
        //    $msg = "Telefon został dodane do bazy danych";
        // }
        header("Location: read.php");//przejście do pliku read.php
    } else {
        $msg = "Proszę wypełnić pola formularza";
    }
    
}

mysqli_close($conn);

?>

<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>PHP - programowanie aplikacji internetowych</title>
</head>

<body>
    <header>
        <h1>PHP - programowanie aplikacji internetowych</h1>
    </header>

    <div class="container">

        <h4>Dodaj telefon</h4>
        <p>
            <a href="read.php">Powrót</a>
        </p>
        <form action="" method="POST" autocomplete="off">
            <div class="field">
                <input type="text" name="title" placeholder="nazwa telefonu" />
            </div>
            <div class="field">
                <textarea name="description" cols="30" rows="10" placeholder="opis"></textarea>
            </div>
            <input type="submit" name="btn" value="dodaj">
        </form>

<p><?php echo $msg; ?></p>
    </div>

</body>

</html>