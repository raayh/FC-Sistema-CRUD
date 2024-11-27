<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisa</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<?php
$pesquisa = $_POST['busca'] ?? '';

include "conexao.php";

$sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

$dados = mysqli_query($conn, $sql);
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <br> <br>
                <h1>Pesquisar Dados</h1> <br>
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <form class="d-flex" role="search" action="pesquisa.php" method="POST">
                            <input class="form-control me-2" type="search" placeholder="Insira um nome" aria-label="Search" name="busca" autofocus>
                            <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $cod_pessoa = $linha['cod_pessoa'];
                            $nome = $linha['nome'];
                            $endereco = $linha['endereco'];
                            $telefone = $linha['telefone'];
                            $email = $linha['email'];
                            $dt_nascimento = $linha['dt_nascimento'];
                            $dt_nascimento = mostra_data($dt_nascimento);

                            echo "<tr>
                                    <td>$cod_pessoa</td>
                                    <td>$nome</td>
                                    <td>$endereco</td>
                                    <td>$telefone</td>
                                    <td>$email</td>
                                    <td>$dt_nascimento</td>
                                    <td>
                                        <a href='cadastro_edit.php?id=$cod_pessoa 'class='btn btn-primary' btn-sm style='--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;'> Editar </a>
                                        <a href='#'class='btn btn-danger' btn-sm data-bs-toggle='modal' data-bs-target='#confirma'style='--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;'
                                        onclick=" .'"' ."pegar_dados($cod_pessoa, '$nome')".'"' ."> Excluir </a>
                                    </td>
                                </tr>";
                        }

                        ?>
                    </tbody>
                </table>
                <div class="form-group">
                    <br>
                    <a href="index.php" class="btn btn-success">Voltar ao inicio</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirme</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="excluir_script.php" method="POST">
                        <p>Deseja realmente excluir o cadastro de <b id="nome_pessoa">Nome da pessoa</b> ?</p>
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <input type="hidden" name="nome" id="nome_pessoa_1" value=""> 
                        <input type="hidden" name="id" id="cod_pessoa" value=""> 
                        <input type="submit" class="btn btn-primary" value="Sim">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript"> 
        function pegar_dados(id, nome) {
            document.getElementById('nome_pessoa').innerHTML = nome;
            document.getElementById('nome_pessoa_1').value = nome;
            document.getElementById('cod_pessoa').value = id;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"> </script>
</body>

</html>