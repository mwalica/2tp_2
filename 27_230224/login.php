<?php
//email: jan@wp.pl
//hasło: 123456
session_start();
$alert  = "";

if (isset($_POST['btn'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   //połączenie z bazą danych

   if ($email === "jan@wp.pl" && $password === "123456") {
      $_SESSION['token'] = true;
      header("Location: start.php");
   } else {
      $alert = "Proszę wpisać poprawny e-mail i hasło";
   }
}

?>

<!DOCTYPE html>
<html lang="pl">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="login.php" method="POST">
      <input type="email" name="email" placeholder="e-mail" />
      <input type="password" name="password" placeholder="hasło" />
      <input type="submit" value="Zaloguj" name="btn" />
   </form>
   <p><?php echo $alert; ?></p>
</body>

</html>