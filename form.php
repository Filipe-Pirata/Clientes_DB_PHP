<?php 

  if(isset($_POST['submit']))
  {
 
    include_once('config.php');
    // $id = $_POST['id'];
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

    $result = mysqli_query($conexao, " INSERT INTO clientes(nome,email,senha,rg,cpf,cidade,estado,endereco,telefone,sexo,data_nasc) 
    VALUES ('$nome','$email','$senha','$rg','$cpf','$cidade','$estado','$endereco','$telefone','$sexo','$data_nasc')");

    // header('Location: login.php');
  }
  
   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./src/style_form.css" />
    <title>Area de Cadastro</title>
  </head>
  <body>

      <a href="index.php" >Voltar</a>

       <div class="box">
      <form action="form.php" method="POST">
        <fieldset>
          <legend><b>Formulário de Cadastro</b></legend>
          <div class="inputBox">
            <input type="text" name="nome" id="nome" required class="inputUser"/>
            <label for="nome" class="labelinput">Nome</label>
          </div>
          <div class="inputBox">
            <input type="email" name="email" id="email" required class="inputUser"/>
            <label for="email" class="labelinput">Email</label>
          </div>
          <div class="inputBox">
            <input type="password" name="senha" id="senha" required class="inputUser"/>
            <label for="nome" class="labelinput">Senha</label>
          </div>
          <div class="inputBox">
            <input type="text" name="RG" required class="inputUser" />
            <label for="RG" class="labelinput">RG</label>
          </div>
          <div class="inputBox">
            <input type="text" name="CPF" required class="inputUser" />
            <label for="CPF" class="labelinput">CPF</label>
          </div>
          <div class="inputBox">
            <input type="text" name="cidade" required class="inputUser" />
            <label for="cidade" class="labelinput">Cidade</label>
          </div>
          <div class="inputBox">
            <input type="text" name="estado" required class="inputUser" />
            <label for="estado" class="labelinput">Estado</label>
          </div>
          <div class="inputBox">
            <input type="text" name="address" required class="inputUser" />
            <label for="address" class="labelinput">Endereço</label>
          </div>

          <div class="inputBox">
            <input type="tel" name="telephone" required class="inputUser" />
            <label for="telephone" class="labelinput">Telefone</label>
          </div>
          <div class="genero">
            <p><strong>Sexo:</strong></p>
            <input type="radio" id="feminino" name="genero" value="feminino" />
            <label for="feminino">Feminino</label>
            <input
              type="radio"
              id="masculino"
              name="genero"
              value="masculino"
            />
            <label for="masculino">Masculino</label>
            <input type="radio" id="outros" name="genero" value="outros" />
            <label for="outros">Outros</label>
          </div>

          <div class="inputBox">
            <label for="data_nascimento"
              ><strong class="data_nascimento">Data de Nascimento:</strong>
            </label>
            <input
              type="date"
              name="data_nascimento"
              required
              class="inputUser"
              id="data_nascimento"
            />
          </div>
         
          <a href="./index.html"><input type="submit" name="submit" id="submit" class="submit"/></a>
           
        </fieldset>
      </form>
    </div>
  </body>
</html>
