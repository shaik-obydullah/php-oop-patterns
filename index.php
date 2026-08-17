<?php

$topics = [
    "Abstraction" => [
        "Abstract Method" => "Abstraction/abstract_method.php",
        "Concrete Method" => "Abstraction/concrete_method.php",
        "Abstract Class" => "Abstraction/abstract_class.php",
    ],
    "Encapsulation" => [
        "Bank Account" => "Encapsulation/bank_account.php",
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Patterns</title>
    <style>
        body { font-family: monospace; max-width: 600px; margin: 50px auto; }
        h1 { color: #333; }
        h2 { color: #666; margin-top: 30px; }
        a { display: block; padding: 8px 0; color: #0066cc; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>PHP OOP Patterns</h1>

    <?php foreach ($topics as $topic => $files): ?>
        <h2><?= $topic ?></h2>
        <?php foreach ($files as $name => $path): ?>
            <a href="<?= $path ?>"><?= $name ?></a>
        <?php endforeach; ?>
    <?php endforeach; ?>
</body>
</html>
