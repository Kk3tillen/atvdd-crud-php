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
        <form action="ws/salvar.php">
            <div class="form-grupe">
                <label for="txtNome">Nome</label>
                <input type="text" name="txtNome" id="txtNome" class="form-control">
            </div>
            <div class="form-grupe">
                <label for="txtCategoria">Categoria</label>
                <input type="text" name="txtCategoria" id="txtCategoria" class="form-control">
            </div>
            <div class="form-grupe">
                <label for="ano">Ano</label>
                <input type="number" name="ano" id="ano" class="form-control">
            </div>
            <div class="form-grupe">
                <label for="txtAvaliacao">Avaliação</label>
                <input type="text" name="txtAvaliacao" id="txtAvaliacao" class="form-control">
            </div>
            <input type="submit" value="Salvar" class="btn btn-primary">
        </form>
    </main>
</body>
</html>