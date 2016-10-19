<?php


    function buscaUsuario($conn, $login, $senha){
        $query = "select * from usuario where login = '{$login}' and senha = '{$senha}'";
        
        //$resultado = mysqli_query($conn, $query); //MySQLi
        $resultado = sqlsrv_query($conn, $query); //SQL Server
        
        //$usuario mysqli_fetch_assoc($resultado); //MySQL
       // sqlsrv_prepare($query);
       // sqlsrv_execute(sqlsrv_prepare($query));
        
        return $resultado;
    }

