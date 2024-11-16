<?php

$host = 'localhost';      
$user = 'seoot';    
$password = '';  
$database = 'cadastro';


$conn = new mysqli($host, $user, $password, $database);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

echo "Conexão bem-sucedida ao banco de dados!";


$conn->close();
?>
