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
        "Game of Thrones",
        "Atomic Habits",
        "White Tiger",
        "Harry Potter"
    ];
    ?>

    <ul>
        <?php
        foreach ($books as $book) {
            echo "<li>{$book}&#8482</li>";
        }
        ?>

        <br>

        <?php
        foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php
        endforeach;
        ?>
    </ul>
</body>

</html>