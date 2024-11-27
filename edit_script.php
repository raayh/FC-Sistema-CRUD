<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>

  <body>
    <div class="container"> 
        <div class="row"> 
            <?php 
                include "conexao.php";
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $dt_nascimento = $_POST['dt_nascimento'];

                $sql = "UPDATE `pessoas` set `nome`='$nome', `endereco`='$endereco', `telefone`='$telefone', `email`='$email', `dt_nascimento`='$dt_nascimento' WHERE cod_pessoa = $id";

                if (mysqli_query($conn, $sql)){
                   mensagem("Usuário $nome alterado com sucesso!", 'success');
                } else {
                    mensagem("Não foi possivel alterar o usuário $nome", 'light');
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