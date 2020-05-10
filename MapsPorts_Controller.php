<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_GET)){
        
    $servername = "host";
    $username = "root";
    $password = "password";
    $dbname = "database";
    $port = 3306;

    $connection = new mysqli($servername, $username, $password, $dbname, $port); 
    
    $sql = 'SELECT SIGLAESTACAO, NOMEESTACAO, PORTAS_INSTALADAS, PORTAS_OCUPADAS, '
            . ' PORTAS_RESERVADAS, PORTAS_DISPONIVEIS, SIGLALOCALIDADE, NOMELOCALIDADE, '
            . ' MUNICIPIO, DATAPROCESSAMENTO, SITUACAO_ADSL '
            . ' FROM base_portas_municipios_estacao WHERE NOMELOCALIDADE LIKE ? AND UF = ? AND SITUACAO_ADSL = ?  ORDER  BY DATAPROCESSAMENTO DESC ';
    $stmt = $connection->prepare($sql);
    $nomelocalidade = $_GET['nomelocalidade'];
    $nomelocalidade_like = "%" .$nomelocalidade. "%";
    $uf=$_GET['uf'];
    $situacaoADSL=$_GET['situacaoADSL'];

    $stmt->bind_param('sss', $nomelocalidade_like,$uf, $situacaoADSL);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $arr = array();
    while($row = $resultado->fetch_assoc()){
        $arr[] = $row;
    }
    $arr['data'] = $arr;
    $strData = json_encode($arr, JSON_PRETTY_PRINT);
    echo($strData);
    
}
else{
    echo '{"data":[]}';
}