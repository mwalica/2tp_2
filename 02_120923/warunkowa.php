<?php
$ranNum1 = rand(-3, 3);
$str = "Brak informacji";

$color = $ranNum1 > 0 ? "red" : "blue";

if ($ranNum1 > 0) {
    $str = "Wylosowan liczba jest dodatnia";
} else if ($ranNum1 < 0) {
    $str = "Wylosowan liczba jest ujemna";
} else {
    $str = "Wylosowan liczba jest zerem";
}
?>

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
        <style>
            .block {
                display: flex;
            }

            .red {
                background-color: red;
                height: 100px;
                width: 100px;
            }

            .blue {
                background-color: blue;
                height: 100px;
                width: 100px;
            }
        </style>
    </header>

    <div class="container">
        <p>Wylosowana liczba: <strong style="color: <?php echo $color; ?>;"><?php echo $ranNum1; ?></strong></p>
        <p><?php echo $str; ?></p>
        <div class="block">
            <?php
            if ($ranNum1 > 0) {
                echo '<div class="red"></div>';
            } else if ($ranNum1 < 0) {
                echo '<div class="blue"></div>';
            } else {
                echo '<div class="red"></div>';
                echo '<div class="blue"></div>';
            }
            ?>


        </div>
        <div class="block">
            <?php if ($ranNum1 > 0) : ?>
                <div class="red"></div>
            <?php elseif ($ranNum1 < 0) : ?>
                <div class="blue"></div>
            <?php else : ?>
                <div class="red"></div>
                <div class="blue"></div>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>