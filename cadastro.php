<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
        
</head>

<body>
<?php include 'nav.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Locais</h5>
                    <div class="card-body">
                        <form method="POST" action="actions/create.php" name="form" onsubmit="return enviar()">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" name="cep" id="cep"  onblur="enviar()" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="logradouro">Rua</label>
                                <input type="text" class="form-control" name="logradouro" id="logradouro" required>
                            </div>
                            <div class="form-group">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" name="complemento" id="complemento">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="numero">Numero</label>
                                    <input type="text" class="form-control" name="numero" id="numero" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control" name="bairro" id="bairro" required>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="uf">UF</label>
                                    <input type="text" class="form-control" name="uf" id="uf" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="localidade">Cidade</label>
                                    <input type="text" class="form-control" name="cidade" id="localidade" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="data">Data</label>
                                    <input type="date" class="form-control" name="data" required>
                                </div>
                            </div>
                            <button type="submit" name="cadastrar" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/validar.js"></script>
</body>

</html>