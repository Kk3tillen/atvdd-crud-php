 <?php
 echo "<pre>";
 print_r($_GET);
 echo "</pre>";
 //Connection
$conn = new PDO("sqlite:../filmes.sqlite");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$nome = $_GET["txtNome"];
$categoria = $_GET["txtCategoria"];
$ano = $_GET["ano"];
$avaliacao = $_GET["txtAvaliacao"];

$p = $conn->prepare(
    "INSERT INTO filmes
    (nome, categoria, ano, avaliacao)
    VALUES(:nome, :categoria, :ano, :avaliacao);");

$p->bindParam(":nome", $nome);
$p->bindParam(":categoria", $categoria);
$p->bindParam(":ano", $ano);
$p->bindParam(":avaliacao", $avaliacao);

$p->execute();

header("Location:../index.php");