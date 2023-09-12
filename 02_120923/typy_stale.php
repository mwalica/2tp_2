<?php


?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>PHP - programowanie aplikacji mobilnych</title>
</head>

<body>
    <header>
        <h1>PHP - programowanie aplikacji internetowych</h1>
    </header>
    <div class="container">

        <?php
        $str1 = "Warszawa"; //typ string
        $str2 = 'Warszawa'; //typ string
        var_dump($str1);
        echo "<br>";
        //gettype zwraca ciąg znaków opisująy typ danych
        echo '$str jest typu: ' . gettype($str1);
        echo "<br>";
        $num1 = 23;//typ integer
        $num2 = -23;//typ integer
        echo "<br>";
        echo '$num1 jest typu: ' . gettype($num1) . "<br>";
        var_dump($num1);
        echo "<br>";
        //liczby innych stystemów liczbowych
        $num2 = 0b10101;//system binarny
        echo '$num2 = ' . $num2 . "<br>"; 
        $num3 = 037;//system ósemkowy
        echo '$num3 = ' . $num3 . "<br>"; 
        $num4 = 0xaaFF17;//system szesnastkowy
        echo '$num4 = ' . $num4 . "<br>"; 
        echo "<br>";
        //typ float
        $num5 = 1.456;
        $num6 = 1.45e3;
        echo '$num5 jest typu: ' . gettype($num5) . "<br>";
        var_dump($num5);
        echo "<br>";
        echo '$num6 jest typu: ' . gettype($num6) . "<br>";
        var_dump($num6);
        echo "<br>";
        //typ boolean
        $bool1 = true;
        $bool2 = false;
        echo '$bool1 jest typu: ' . gettype($bool1) . "<br>";
        var_dump($bool1);
        echo "<br>";
        echo '$bool2 jest typu: ' . gettype($bool2) . "<br>";
        var_dump($bool2);
        echo "<br>";

        $car = null;
        echo '$car jest typu: ' . gettype($car) . "<br>";
        var_dump($car);
        echo "<br>";

        //sprawdzanie typu
        $myVar = "Kraków";
        $myVar = 24;
        $myVar = false;
        if(is_string($myVar)) {
            echo '<p>$myVar jest typu tekstowego</p>';
        }

        if(is_int($myVar)) {
            echo '<p>$myVar jest typu liczba całkowita</p>';
        }

        if(is_bool($myVar)) {
            echo '<p>$myVar jest typu wartość logiczna</p>';
        }

        //zamiana na inny typ
        $name = "rerwe24cm";
        var_dump($name);
        echo "<br>";
        $liczba = intval($name);
        var_dump(intval($liczba));
        echo "<br>";
        var_dump(boolval($name));
        echo "<br>";

        //isset - sprawdza czy zmienna ma ustawioną wartość

        // $carBig100;
        $carBig100 = "Ford";
        if(isset($carBig100)) {
            echo '<p>zmienna $carBig100 istnieje</p>';
        } else {
            echo '<p>zmienna $carBig100 nie istnieje</p>'; 
        }

        //stałe w php
        define("NUMBER_PI", 3.14);
        const CAR_KEY = "1.543878HM";
        echo "Liczba pi = " . NUMBER_PI . "<br>";
        echo "Klucz auta = " . CAR_KEY . "<br>";

        //stałe magiczne
        echo "Wersja PHP: " . PHP_VERSION . "<br>";
        echo "System operacyjny: " . PHP_OS_FAMILY . "<br>";
        echo "System operacyjny: " . PHP_OS . "<br>";
        ?>

    </div>

</body>

</html>