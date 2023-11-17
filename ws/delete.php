<?php
$conn = new PDO("sqlite:../filmes.sqlite");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

$id = $_GET["id"];

$q = $conn->prepare("DELETE FROM filmes WHERE id=:id");

$q->bindParam(":id", $id);

$q->execute();

header("Location:../");