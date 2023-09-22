<!DOCTYPE html>
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
        <?php
        $a = 3;
        $b = 2;
        $c = 3;
        var_dump($a != $b);
        echo "<br>";
        var_dump($a != $c);
        echo "<br>";
        var_dump($a !== $b);
        echo "<br>";
        var_dump($a !== $c);
        echo "<br>";
        echo "a + b = " . $a + $b . "<br>";
        echo "a - b = " . $a - $b . "<br>";
        echo "a x b = " . $a * $b . "<br>";
        echo "a : b = " . $a / $b . "<br>";
        echo "a<sup>b</sup> = " . $a**$b . "<br>";
        echo "a<sup>10</sup> = " . pow($a, 10) . "<br>";
        echo "pierwiastek z a + b = " . sqrt($a + $b) . "<br>";
        echo "pierwiastek 3 stopnia z a + b = " . pow($a + $b, 1/3) . "<br>"; 
        echo "reszta z dzielenia a / b = " . $a % $b . "<br>";

        //inkrementacja i dekrementacja
        //pre
        // echo "a = " . $a . "<br>";
        // echo "b = " . $b . "<br>";
        // echo "++a = " . ++$a . "<br>";
        // echo "--b = " . --$b . "<br>";

        //inkrementacja i dekrementacja
        //post
        echo "a = " . $a . "<br>";
        echo "b = " . $b . "<br>";
        echo "a++ = " . $a++ . "<br>";
        echo "b++ = " . $b-- . "<br>";
        echo "a = " . $a . "<br>";
        echo "b = " . $b . "<br>";

        //skrócony zapis
        // echo $a = $a + 10 . "<br>";
        $a += 10;
        echo $a . "<br>";
        $str = "Warszawa";
        $str .= " jest pięknym miastem.<br>";
        echo $str;

        //losowanie liczb
        echo rand(10, 20) . "<br>";
        echo mt_rand(10, 20) . "<br>";
        //zokraglenie
        echo round(2.355443) . "<br>";
        echo round(2.355943, 3) . "<br>";
        echo floor(2.355943) . "<br>";
        echo ceil(2.355943) . "<br>";

        //inne
        echo abs(-10) . "<br>";//wartość bezwzględna
        echo max(3, 6, -1, 7) . "<br>";
        echo min(3, 6, -1, 7) ."<br>";

        
        ?>
    </div>

</body>

</html>