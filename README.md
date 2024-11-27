# FC-Sistema-CRUD
Projeto de um sistema CRUD (Create, Read, Update, Delete) desenvolvido em PHP com integração ao MySQL. Este sistema é um exemplo funcional de como gerenciar dados em uma aplicação web, incluindo criação, visualização, edição e exclusão de registros.

# Detalhes Técnicos
* Linguagem: PHP
* Banco de Dados: MySQL
* Ferramentas: XAMPP (PHPMyAdmin para gerenciamento de banco de dados)
* Funcionalidades:
  - Criação de registros
  - Exibição de dados em tabela
  - Atualização de informações
  - Exclusão de registros

 A seguir, confira algumas intruções sobre uso e possiveis resoluções de problemas, baseados nas dificuldades que eu encontrei com essa nova linguagem.
## 1. Configurar o Ambiente
Antes de tudo, certifique-se de que:

Você tem o XAMPP instalado e configurado.
O servidor Apache e o MySQL estão ativos no painel do XAMPP.
Seus arquivos PHP estão salvos na pasta htdocs dentro da pasta do XAMPP (exemplo: C:\xampp\htdocs\CRUD).

## 2. Navegar até a Pasta do Projeto
Abra o terminal no Visual Studio Code ou use o Prompt de Comando. Navegue até a pasta onde seu projeto está salvo:

cd C:\xampp\htdocs\CRUD

## 3. Iniciar o Servidor no XAMPP
Certifique-se de que o XAMPP está executando o Apache:

Abra o Painel de Controle do XAMPP.
Clique no botão Start ao lado de Apache.
Certifique-se de que o MySQL também está ativado, se for necessário.

## 4. Acessar Seus Arquivos pelo Navegador
Com o Apache rodando, você pode acessar seu projeto no navegador usando:

http://localhost/NomeDaPasta

Por exemplo:
http://localhost/CRUD

## 5. Rodar um Arquivo Específico
Para rodar um arquivo PHP específico dentro da pasta, insira o nome do arquivo no final do URL:

http://localhost/CRUD/index.php

# Comandos Úteis no Terminal
## Checar se o PHP Funciona
Certifique-se de que o PHP está configurado no terminal. Para verificar a versão do PHP:
C:\xampp\php\php.exe -v

## Executar um Arquivo PHP no Terminal
Você também pode rodar um arquivo PHP diretamente no terminal, se não precisar de um servidor web:
C:\xampp\php\php.exe conexao.php

# Resolvendo Problemas Comuns
## Erro: "Arquivo não encontrado no navegador"
Certifique-se de que o caminho da URL no navegador está correto.
Verifique se o arquivo está salvo na pasta correta dentro de htdocs.

## Erro: "mysqli_connect() undefined"
Verifique se o módulo mysqli está habilitado no arquivo php.ini.
Certifique-se de que o XAMPP está configurado para usar a versão correta do PHP.

