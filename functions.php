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
            'genre' => 'Fantacy',
            'release year' => '2001'
        ],
        [
            'name' => 'Atomic Habits',
            'author' => 'James Clear',
            'genre' => 'Self Help',
            'release year' => '2015'
        ],
        [
            'name' => 'Little Women',
            'author' => 'Loisa May Alcot',
            'genre' => 'Classic',
            'release year' => '1960'
        ]
    ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>

            <?php if ($book['author'] === 'James Clear'): ?>

                <li>
                    <a href="<?= $book['name']; ?>"> By -
                        <?= $book['author']; ?>
                    </a>
                </li>

            <?php endif; ?>

        <?php endforeach; ?>
    </ul>
</body>

</html>