<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>

  <body>
    <div class="container"> 
        <div class="row"> 
            <?php 
                include "conexao.php";

                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $dt_nascimento = $_POST['dt_nascimento'];

                $sql = "INSERT INTO `pessoas` (`nome`, `endereco`, `telefone`, `email`, `dt_nascimento`) 
                VALUES ('$nome','$endereco','$telefone','$email','$dt_nascimento')";

                if (mysqli_query($conn, $sql)){
                   mensagem("Usuário $nome cadastrado com sucesso!", 'success');
                } else {
                    mensagem("Não foi possivel cadastrar o usuário $nome", 'light');
                } 
            ?>
            
            <a href="index.php" class="btn btn-primary"> Voltar ao inicio </a>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"> </script>
  </body>

</html>