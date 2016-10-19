<?php

$serverName = "DESKTOP-3ITI8SF\SQLEXPRESS";

$connectionInfo = array("Database"=>"medx");

$conn = sqlsrv_connect($serverName, $connectionInfo);

if($conn){
    echo "Banco de dados ok";
}else{
    echo "Falha na conexão";
    die( print_r(sqlsrv_erros(), true));
}
echo "<br />";