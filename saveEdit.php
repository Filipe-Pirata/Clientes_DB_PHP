<?php
  include_once('config.php');

  if(isset($_POST['update']))
  {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $rg = $_POST['RG'];
    $cpf = $_POST['CPF'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['address'];
    $telefone = $_POST['telephone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];

    $sqlUpdate = "UPDATE clientes SET nome='$nome', email='$email', senha='$senha', rg='$rg', cpf='$cpf', cidade='$cidade', estado='$estado', endereco='$endereco', telefone='$telefone', sexo='$sexo', data_nasc='$data_nasc' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
    
  }
  header('Location: system.php')

?>
