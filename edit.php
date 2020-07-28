<?php
// Conexão
include_once 'actions/conn.php';

if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM locais WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
 <!DOCTYPE html>
 <html lang="pt-br">
     <head>
         <title></title>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <form method="POST" action="actions/update.php" >
        <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
        <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" value="<?php echo $dados['nome'];?>" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" name="cep" id="cep" value="<?php echo $dados['cep'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="logradouro">Rua</label>
                                <input type="text" class="form-control" name="logradouro" id="logradouro" value="<?php echo $dados['logradouro'];?>">
                            </div>
                            <div class="form-group">
                                <label for="complemento">Complemento</label>
                                <input type="text" class="form-control" name="complemento" id="complemento" value="<?php echo $dados['complemento'];?>">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="numero">Numero</label>
                                    <input type="text" class="form-control" name="numero" id="numero" value="<?php echo $dados['numero'];?>">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control" name="bairro" id="bairro" value="<?php echo $dados['bairro'];?>">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="uf">UF</label>
                                    <input type="text" class="form-control" name="uf" id="uf" value="<?php echo $dados['uf'];?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="localidade">Cidade</label>
                                    <input type="text" class="form-control" name="cidade" id="localidade" value="<?php echo $dados['cidade'];?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="data">Data</label>
                                    <input type="date" class="form-control" name="data" value="<?php echo $dados['data'];?>">
                                </div>
                            </div>
                            <button type="submit" name="edit" class="btn btn-primary">Atualizar</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/script.js"></script>
     </body>
 </html>
