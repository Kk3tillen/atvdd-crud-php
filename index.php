<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes que amo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
  <nav>
    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
                <a href="forms.php">Criar</a>
            </li>
    </ul> 
</nav> 

<main class="container">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Ano</th>
                <th>Avaliação</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            </thead>
            <tbody>
                <?php
                
                //Connection
        $conn = new PDO("sqlite:filmes.sqlite");
        $conn->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_OBJ);

        $query = $conn->query("SELECT * FROM filmes;");
        $filmes = $query->fetchAll();

        foreach($filmes as $f):
        ?>
        
        <tr>
            <td><?= $f->id?></td>
            <td><?= $f->nome?></td>
            <td><?= $f->categoria?></td>
            <td><?= $f->ano?></td>
            <td><?= $f->avaliacao?></td>
            <td>
                            <a href="forms.php?id=<?= $f->id ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="ws/delete.php?id=<?= $f->id ?>" class="btn btn-danger">
                                Excluir
                            </a>
                        </td>
        </tr>
        <?php endforeach ?>
            </tbody>
        </table>
</main>
</body>
</html>