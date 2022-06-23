<?php
$dbname='SOCIAL_NETWORK';
$host = 'localhost';
$user='root';
$pass='root';

try{
    $conexao=new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){
    echo 'Unable to connect to database. '.$ex->getMessage();
}
return $conexao;