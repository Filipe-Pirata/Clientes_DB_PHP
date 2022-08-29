<?php 

  if(!empty($_GET['id']))
  {
 
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM clientes WHERE id=$id ";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
      while($user_data = mysqli_fetch_assoc($result))
      {
        $nome = $user_data['nome'];
        $email = $user_data['email'];
        $senha = $user_data['senha'];
        $rg = $user_data['rg'];
        $cpf = $user_data['cpf'];
        $cidade = $user_data['cidade'];
        $estado = $user_data['estado'];
        $endereco = $user_data['endereco'];
        $telefone = $user_data['telefone'];
        $sexo = $user_data['sexo'];
        $data_nasc = $user_data['data_nasc'];

      }
    }else {
      header('Location: system.php');
    } 
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

      <a href="system.php" >Voltar</a>

       <div class="box">
      <form action="saveEdit.php" method="POST">
        <fieldset>
          <legend><b>Formulário de Cadastro</b></legend>
          <div class="inputBox">
            <input type="text" name="nome" id="nome" required class="inputUser" value="<?php echo $nome ?>"/>
            <label for="nome" class="labelinput">Nome</label>
          </div>
          <div class="inputBox">
            <input type="email"  name="email" id="email"  required class="inputUser" value="<?php echo $email ?>" />
            <label for="email" class="labelinput">Email</label>
          </div>
          <div class="inputBox">
            <input type="text" name="senha" id="senha" required class="inputUser" value="<?php echo $senha ?>"/>
            <label for="nome" class="labelinput">Senha</label>
          </div>
          <div class="inputBox">
            <input type="text" name="RG" required class="inputUser" value="<?php echo $rg ?>"/>
            <label for="RG" class="labelinput">RG</label>
          </div>
          <div class="inputBox">
            <input type="text" name="CPF" required class="inputUser" value="<?php echo $cpf ?>"/>
            <label for="CPF" class="labelinput">CPF</label>
          </div>
          <div class="inputBox">
            <input type="text" name="cidade" required class="inputUser" value="<?php echo $cidade ?>" />
            <label for="cidade" class="labelinput">Cidade</label>
          </div>
          <div class="inputBox">
            <input type="text" name="estado" required class="inputUser" value="<?php echo $estado ?>" />
            <label for="estado" class="labelinput">Estado</label>
          </div>
          <div class="inputBox">
            <input type="text" name="address" required class="inputUser" value="<?php echo $endereco ?>" />
            <label for="address" class="labelinput">Endereço</label>
          </div>

          <div class="inputBox">
            <input type="tel" name="telephone" required class="inputUser" value="<?php echo $telefone ?>"/>
            <label for="telephone" class="labelinput">Telefone</label>
          </div>
          <div class="genero">
            <p><strong>Sexo:</strong></p>
            <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : ''?>/>
            <label for="feminino">Feminino</label>
            <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?>/>
            <label for="masculino">Masculino</label>
            <input type="radio" id="outros" name="genero" value="outros" <?php echo ($sexo == 'outros') ? 'checked' : ''?> />
            <label for="outros">Outros</label>
          </div>

          <div class="inputBox">
            <label for="data_nascimento"
              ><strong class="data_nascimento">Data de Nascimento:</strong>
            </label>
            <input type="date" name="data_nascimento" required class="inputUser" id="data_nascimento" value="<?php echo $data_nasc ?>" />
          </div>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <a href="./index.html"><input type="submit" name="update" id="update" class="submit"/></a>
           
        </fieldset>
      </form>
    </div>
  </body>
</html>
