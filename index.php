<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Listagem de Pessoas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Listagem de Pessoas</h1>
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" style="float:right;" onclick="window.location.href='register.php'">Cadastrar</button>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Data de Nascimento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $arquivo = file_get_contents('inc/persons.json');

                        $pessoas = json_decode($arquivo);

                        foreach ($pessoas as $pessoa) {
                            echo '<tr>';
                            echo '<td>' . $pessoa->id . '</td>';
                            echo '<td>' . $pessoa->nome . '</td>';
                            echo '<td>' . $pessoa->dt_nascimento . '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>