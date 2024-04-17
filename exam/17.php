<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $book = array('harrypotter' => 'j.k rowling', 'lordoftherings' => 'j.r.r tolkien');

    echo "<table border=1>";
    echo "<tr><th>Book</th><th>Author</th></tr>";

    foreach ($book as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }

    echo "</table>";
    ?>
</body>
</html>