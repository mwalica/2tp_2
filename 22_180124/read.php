<?php

include('connection.php');

$conn = connect();

//kodowanie znaków
mysqli_set_charset($conn, 'utf8');

//zapytanie sql
$sql = "SELECT * FROM phones ORDER BY created_at";

//wysyłanie zapytania
$result = mysqli_query($conn, $sql);

//zwraca klasyczną tablicę z elementami (klasyczna tablica)
// $phones = mysqli_fetch_all($result);

//zwraca kalsyczna tablicę z elementami (tabloca asocjacyjna)
$phones = mysqli_fetch_all($result, MYSQLI_ASSOC);

// echo "<pre>";
// var_dump($phones[0]['title']);
// echo "</pre>";

//zamknięcie połączenia z bazą danych
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
        <a href="add.php">Dodaj telefon</a>
    </p>
        <table>
            <thead>
                <tr>
                    <th>nazwa</th>
                    <th>data</th>
                    <th>akcja</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($phones as $phone) : ?>
                    <tr>
                        <td><?php echo $phone['title']; ?></td>
                        <td><?php echo  date('Y/m/d', strtotime($phone['created_at'])); ?></td>
                        <td>
                            <a class="btn" href="detail.php?id=<?php echo $phone['id']; ?>">Szczegóły</a>
                            <a class="btn" href="delete.php?id=<?php echo $phone['id']; ?>">Usuń</a>
                            <a class="btn" href="edit.php?id=<?php echo $phone['id']; ?>">Edycja</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>