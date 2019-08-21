<?php

$servidor="mysql:dbname=ayto_ciudadania;host=192.168.254.54";
$usuario="puga";
$password="XLISysProg2019";

try{

    $pdo= new PDO($servidor,$usuario,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    echo "Conectado..";

}catch(PDOException $e){

echo "Conexión mala: ( ".$e->getMessage();

}
?>
