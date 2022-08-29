<?php 
  session_start();
  // validação dos campos, confirmando se estes estão ou não vazios 
  if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) )
  {
      include_once('config.php');
      // conexao com banco de dados
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      // cbusca no banco de dados os dados para validação do login 
      $sql = "SELECT * FROM clientes WHERE email = '$email' and senha = '$senha'";

      // executa a query SQL validando os dados
      $result = $conexao->query($sql);


      // valida se as informações estao ou não corretas no primeiro laço caso esteja errado o usuario é redirecionado ao login/senha caso contrario o usuario 
      // é direcionado a pagina system 

      if(mysqli_num_rows($result) < 1)
      {
        // caso nao existe deleta essas variaveis na sessao 

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
      } else {

        // cria duas variaveis para a sessão
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: system.php');
      }
  }
  else {
    // caso de erro em alguma das informações acima, redirecionado a pagina de login. 
    header('Location: login.php');
  }

?>