

<?php
session_start();
$alert = "";

if(isset($_POST["btn"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //połączenie z baza danych
    $conn = mysqli_connect("localhost", "root", "", "users_db");

    $sql = "SELECT email, password FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if($user) {
        if($email === $user['email'] && password_verify($password, $user['password'])) {
            $_SESSION["token"] = true;
            header("Location: home.php");
        } else {
            $alert = "Hasło jest niepoprawne";
        }
    } else {
        $alert = "Nie ma takiego użytkownika";
    }

   

}


?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <a href="register.php">Zarejestruj nowego użytkownika</a>
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="e-mail" />
        <input type="password" name="password" placeholder="hasło">
        <input type="submit" value="Zaloguj" name="btn">
    </form>
    <p><?php echo $alert; ?></p>
</body>
</html>