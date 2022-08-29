<?php 

  $dbHost = 'Localhost';
  $dbUsername = 'root';
  $dbPassword = '';
  $dbName = 'form_kabum';


  $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName );


  // teste de conexao com DB
  // if($conexao->connect_errno)
  // { echo "Erro";
  // } else {
  //   echo "Ok";

  // }

?>  