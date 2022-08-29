<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./src/style.css" />
        <title>Tela Login</title>
    </head>
    <body>
        <div class="container">
            <h1>Login</h1>
        <form action="loginTest.php" method="POST"> 
            <input class="logpass" type="email" name="email" placeholder="Digite seu E-mail" />
            <br><br>
            <input class="logpass" type="password" name="senha" placeholder="Digite sua senha" />
            <br><br>
            <input  class="botaoEnviar" type="submit" name="submit" value="Enviar">
        </form>
        </div>
           
 
    </body>
</html>
