<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior

// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.

// Dados do banco
$dbhost   = "DESKTOP-3ITI8SF\SQLEXPRESS";   #Nome do host
$db       = "medx";   #Nome do banco de dados
$user     = "sa"; #Nome do usuário
$password = "r10m3d";   #Senha do usuário

//$con = sqlsrv_connect("DESKTOP-3ITI8SF\SQLEXPRESS", "sa", "r10med") or die ("Sem conexão com o servidor");
//$select = mysql_select_db("medx") or die("Sem acesso ao DB, Entre em contato com o Administrador, fabricio.damasceno@ywin.com.br");

// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
// Dados da tabela
$tabela = "usuario";    #Nome da tabela
$nome = $_POST['nome'];  #Nome do campo da tabela
$login = $_POST['login'];
$senha = $_POST['senha'];

$instrucaoSQL = "SELECT $nome, $login FROM $tabela where 'nome' = '$login' and 'senha' = $senha";

//$result = mysql_query("SELECT * FROM `USUARIO` WHERE `NOME` = '$login' AND `SENHA`= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:site.php');
}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location:index.php');
	
	}

?>