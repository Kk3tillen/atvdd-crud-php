<?php

//Connection
$conn = new PDO("sqlite:../filmes.sqlite");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$nome = "The Smurfs";
$categoria = "Animação";
$ano = 2011;
$avaliacao = 3.8;

$p = $conn->prepare(
    "INSERT INTO filmes
    (nome, categoria, ano, avaliacao)
    VALUES(:nome, :n, :ano, :avaliacao);");

$p->bindParam(":nome", $nome);
$p->bindParam(":n", $categoria);
$p->bindParam(":ano", $ano);
$p->bindParam(":avaliacao", $avaliacao);

//$p->execute();

$id = 5;

$p = $conn->prepare(
    "DELETE FROM filmes WHERE id=:numero;");

$p->bindParam(":numero", $id);

$p->execute();


$query = $conn->query("SELECT * FROM filmes;");
$filmes = $query->fetchAll();

echo "<pre>";
print_r($filmes);
echo "</pre>";

?>