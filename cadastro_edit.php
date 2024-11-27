<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>

  <body>

   <?php 
      include "conexao.php";

      $id = $_GET['id'] ?? '';
      $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";
      $dados = mysqli_query($conn, $sql);
      $linha = mysqli_fetch_assoc($dados);

   
   ?>

    <div class="container"> 
        <div class="row"> 
            <div class="col"> 
               <br>
               <br>
                <h1>Edição de Dados</h1>
                <form action="edit_script.php" method="POST"> 
                     <div class="form-group">
                        <label for="nome"> Nome completo </label>
                        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome completo" required value="<?php echo $linha['nome']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="endereco"> Endereço </label>
                        <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="telefone"> Telefone </label>
                        <input type="text" class="form-control" name="telefone" placeholder="(11) 23456-7891" value="<?php echo $linha['telefone']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="email"> E-mail </label>
                        <input type="email" class="form-control" name="email" placeholder="Digite seu email" value="<?php echo $linha['email']; ?>">
                     </div>
                     <div class="form-group">
                        <label for="dt_nascimento"> Data de Nascimento </label>
                        <input type="date" class="form-control" name="dt_nascimento" value="<?php echo $linha['dt_nascimento']; ?>">
                     </div>
                     <div class="form-group">
                        <br>
                        <button type="submit" class="btn btn-success">Salvar Alterações</button>
                        <input type = "hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>">
                        <a href="index.php" class="btn btn-success">Voltar ao inicio</a>
                     </div>
                </form>
                
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"> </script>
  </body>

</html>