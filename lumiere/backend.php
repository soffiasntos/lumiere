<?php 

include('db.php');

?>

<?php

$nome =$_POST['nome'];
$email =$_POST['email'];
$senha =$_POST['senha'];
$telefone =$_POST['telefone'];
$endereco =$_POST['endereco'];
$logo =$_POST['logo'];
$icone =$_POST['icone'];
$instagram =$_POST['instagram'];
$twitter = $_POST['twitter'];  
$linkedin = $_POST['linkedin'];  
$facebook = $_POST['facebook'];  
$youtube = $_POST['youtube'];  
$cor = $_POST['cor'];  
$titulos_servicos = $_POST['titulos_servicos'];  
$subtitulo_servico = $_POST['subtitulo_servico'];  
$titulo_trabalhos = $_POST['titulo_trabalhos'];  
$subtitulo_trabalhos = $_POST['subtitulo_trabalhos'];  
$titulo_equipe = $_POST['titulo_equipe'];  
$subtitulo_equipe = $_POST['subtitulo_equipe'];  
$titulo_contato = $_POST['titulo_contato'];  
$subtitulo_contato = $_POST['subtitulo_contato'];  
$texto_rodape = $_POST['texto_rodape'];  




$query = "INSERT INTO $tabela VALUES ('NULL',
'$nome',
'$email',
'$senha',
'$telefone',
'$endereco',
'$logo',
'$icone',
'$instagram',
'$twitter',
'$linkedin',
'$facebook',
'$youtube',
'$cor',
'$titulos_servicos',  
'$subtitulo_servico',  
'$titulo_trabalhos',  
'$subtitulo_trabalhos',  
'$titulo_equipe',  
'$subtitulo_equipe',  
'$titulo_contato',  
'$subtitulo_contato',  
'$texto_rodape')";

$mysqli = new mysqli($host, $login, $password, $bd);

if ($mysqli->connect_error) {
  die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}

$resultado = $mysqli->query($query);

if ($resultado) {
  echo "Enviado!<br>";
} else {
  echo "Erro na consulta: " . $mysqli->error;
}

$mysqli->close(); 

?>

