<?php
//var_dump($_GET['id']);
include('connection.php');
$conn = connect();
mysqli_set_charset($conn, 'utf8');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM phones WHERE id = $id";
    $result = mysqli_query($conn, $sql);
//    $phones = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //zwraca tablice asocjacyjną z informacjami o pojedynczym elemencie bazy danych
    $phone = mysqli_fetch_assoc($result);

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

    <h4>Smartfony</h4>
    <p>
        <a href="read.php">Powrót</a>
    </p>
    <h3><?php echo $phone['title']; ?></h3>
    <p><?php echo $phone['description']; ?></p>
</div>

</body>

</html>