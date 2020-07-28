<?php
include_once 'actions/conn.php';
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
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Local</th>
                <th scope="col">Data</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
				$sql = "SELECT * FROM locais";
				$resultado = mysqli_query($connect, $sql);
                
                if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                    
                    $uf = $dados['uf'];
                    if($uf == 'MG'){
                        $troca='class="cor-mg"';
                        
                    }
                   
				?>
            <tr class='".$troca."'>
            <?php
             
            
            ?>
                <td><?php echo $dados['nome']; ?></td>
                <td ><?php echo $dados['cidade']; ?></td>
                <td><?php echo date('d/m/Y', strtotime($dados['data'])); ?></td>
                <td ><?php echo $dados['uf']; ?></td>
                

                <td><a href="edit.php?id=<?php echo $dados['id']; ?>" <button type="button"
                        class="btn btn-outline-warning">Editar</button></td>

                <td><a data-toggle="modal" href="#modal<?php echo $dados['id']; ?>" <button type="button"
                         class="btn btn-outline-danger">Apagar</button></td>

                <div id="modal<?php echo $dados['id']; ?>" class="modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirmação de Exclusão</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Tem certeza que deseja excluir esse local?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="actions/delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                    <button type="submit" name="delet" class="btn btn-primary">Sim, quero
                                        deletar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                            </div>
                        </div>
                    </div>
                </div>


                </div>
                </div>


            </tr>
            <?php 
				endwhile;
				else: ?>

            

            <?php 
				endif;
			   ?>

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>