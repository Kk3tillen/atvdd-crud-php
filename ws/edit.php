<?php
$conn = new PDO("sqlite:../filmes.sqlite");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$nome = $_GET["txtNome"];
$categoria = $_GET["txtCategoria"];
$ano = $_GET["ano"];
$avaliacao = $_GET["txtAvaliacao"];

$q = $db->prepare("UPDATE filmes SET nome=:txtNome, categoria=:txtCategoria, ano=:ano, avaliacao=:txtAvaliacao WHERE id=:id;");

$p->bindParam(":nome", $nome);
$p->bindParam(":categoria", $categoria);
$p->bindParam(":ano", $ano);
$p->bindParam(":avaliacao", $avaliacao);

$q->execute();

header("Location:../");