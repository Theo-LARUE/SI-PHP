<?php
try {
    $conn = new PDO('mysql:dbname=si-13-02-18;host=127.0.0.1', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
