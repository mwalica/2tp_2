<?php
$count = 0;
$login = "";
$password = "";
$msg = "";

$conn = mysqli_connect("localhost", "root", "", "portal");

$sql1 = "SELECT COUNT(*) FROM dane";

$result = mysqli_query($conn, $sql1);

$count = mysqli_fetch_assoc($result);

if (isset($_POST['btn'])) {
    if (!empty(trim($_POST['login'])) && !empty(trim($_POST['password']))) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $sql2 = "SELECT haslo FROM uzytkownicy WHERE login='$login'";
        $result2 = mysqli_query($conn, $sql2);
        $pass = mysqli_fetch_assoc($result2);
        if ($pass) {
            if (sha1($password) == $pass['haslo']) {
                $sql3 = "SELECT uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie FROM uzytkownicy JOIN dane ON uzytkownicy.id=dane.id WHERE uzytkownicy.login='$login'";
                $result3 = mysqli_query($conn, $sql3);
                $person = mysqli_fetch_assoc($result3);
            } else {
                $msg = "hasło nieprawidłowe";
            }
        } else {
            $msg = "login nie istnieje";
        }
    }
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl5.css">
    <title>Portal społecznościowy</title>
</head>

<body>
    <section class="baner-left">
        <h2>Nasze osiedle</h2>
    </section>
    <section class="baner-right">
        <!-- skrypt 1 -->
        <h5>Liczba uzytkowników portalu: <?php echo $count['COUNT(*)']; ?></h5>
    </section>
    <section class="main-left">
        <h3>Logowanie</h3>
        <form action="" method="POST">
            login
            <br />
            <input type="text" name="login" />
            <br />
            hasło
            <br />
            <input type="password" name="password" />
            <br />
            <input type="submit" value="Zaloguj" name="btn">
        </form>
        <?php
        if (!empty($msg)) {
            echo $msg;
        }
        ?>
    </section>
    <section class="main-right">
        <h3>Wizytówka</h3>
        <?php if (isset($person)) : ?>
            <div class="wizytowka">
                <img src="<?php echo $person['zdjecie']; ?>" alt="osoba" />
                <h4><?php echo $person['login']; ?> (<?php echo date("Y") - $person['rok_urodz'] ?>)</h4>
                <p>hobby: <?php echo $person['hobby']; ?></p>
                <h1><img src="icon-on.png" /><?php echo $person['przyjaciol']; ?></h1>
                <a href="dane.html">Więcej informacji</a>

            </div>
        <?php endif; ?>
    </section>
    <footer>
        Stronę wykonal: 00000
    </footer>
</body>

</html>