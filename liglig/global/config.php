<?php
$host = 'localhost';
$user = '';
$pass = '';
$db = 'liglig_db';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>