<?php
session_start();
if(!$_SESSION['token']) {
    header("Location: login.php");
}


?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
</head>
<body>
    <h3>Dzień dobry - jesteś zalogowany</h3>
    <form action="logout.php" >
        <input type="submit" value="Wyloguj" />
    </form>
</body>
</html>