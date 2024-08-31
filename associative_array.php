<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>

<body>
    <h1>Recommended Books</h1>

    <?php
    $books = [
        [
            'name' => 'Harry Potter',
            'author' => 'J.K.Rowling',
            'genre' => 'Fantacy'
        ],
        [
            'name' => 'Atomic Habits',
            'author' => 'James Clear',
            'genre' => 'Self Help'
        ],
        [
            'name' => 'Little Women',
            'author' => 'Loisa May Alcot',
            'genre' => 'Classic'
        ]
    ];
    ?>

    <p>
        <?php

        foreach ($books as $book) {
            echo '<br>' . $book['author'];
        }


        foreach ($books as $book) : ?>
            <li><?= $book['name'] ?></li>
        <?php
        endforeach;
        ?>
    </p>
</body>

</html>