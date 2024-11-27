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
            <div class="col"> 
               <br>
               <br>
                <h1>Cadastro</h1>
                <form action="cadastro_script.php" method="POST"> 
                     <div class="form-group">
                        <label for="nome"> Nome completo </label>
                        <input type="text" class="form-control" name="nome" placeholder="Digite seu nome completo" required>
                     </div>
                     <div class="form-group">
                        <label for="endereco"> Endereço </label>
                        <input type="text" class="form-control" name="endereco">
                     </div>
                     <div class="form-group">
                        <label for="telefone"> Telefone </label>
                        <input type="text" class="form-control" name="telefone" placeholder="(11) 23456-7891">
                     </div>
                     <div class="form-group">
                        <label for="email"> E-mail </label>
                        <input type="email" class="form-control" name="email" placeholder="Digite seu email">
                     </div>
                     <div class="form-group">
                        <label for="dt_nascimento"> Data de Nascimento </label>
                        <input type="date" class="form-control" name="dt_nascimento">
                     </div>
                     <div class="form-group">
                        <br>
                        <button type="submit" class="btn btn-success">Enviar</button>
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