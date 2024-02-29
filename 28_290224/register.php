<?php
$alert = "";

if (isset($_POST['btn'])) {
    if (empty(trim($_POST["email"])) || empty(trim($_POST["password"])) || $_POST['password'] !== $_POST['password2']) {
        $alert = "Proszę wpisać poprawne dane użytkownika";
    } else {
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        $passHash = password_hash($password, PASSWORD_DEFAULT);

        $conn = mysqli_connect("localhost", "root", "", "users_db");

        $sql = "INSERT INTO users(email, password) VALUES('$email', '$passHash')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja użytkownika</title>
</head>

<body>
    <form action="" method="post" autocomplete="off">
        <input type="email" name="email" placeholder="e-mail" />
        <input type="password" name="password" placeholder="hasło" />
        <input type="password" name="password2" placeholder="powtórz hasło" />
        <input type="submit" value="Zaloguj" name="btn" />
    </form>
    <p><?php echo $alert; ?></p>
</body>

</html>