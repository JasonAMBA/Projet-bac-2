<?php
// Souvent on identifie cet objet par la variable $conn ou $db
$pdo = new PDO(
    'mysql:host=localhost;dbname=mangadb;charset=utf8',
    'root',
    ''
);


// Check connection
// if ($pdo) {
//     echo "Connected successfully";
// }
 