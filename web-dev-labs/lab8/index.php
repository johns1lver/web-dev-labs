<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна 8</title>
    <style>

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
        }


        a {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
echo "<h1 align='center'>Лабораторна робота №2</h1>"; 


echo "<ul>";
for ($i = 1; $i <= 5; $i++) {
    printf("<li>Квадрат числа %s дорівнює %s</li>", $i, $i * $i);
}
echo "</ul>";

// Виведення посилання
echo "<h2 align='center'>Демонстрація роботи з посиланнями</h2>";
echo "<a href='mailto:zave@pisem.net'>Mail to Alex</a>";
?>

</body>
</html>
