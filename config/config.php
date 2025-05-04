<?php 

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'cadastro_devs';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

}catch(PDOException $e){
    echo "Erro ao conectar: " . $e->getMessage();
};




?>