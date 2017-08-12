
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/Auxililiar.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
        
        <!-- FORMATA O DADOS CNPJ/TELEFONE -->
        <script type="text/javascript">
            function formatar (mascara,documento){
                var campo = documento.value.length;
                var saida = mascara.substring(0,1);
                var texto = mascara.substring(campo);
                if(texto.substring(0,1)!== saida){
                    documento.value += texto.substring(0,1);
                }
            }
            
        </script>
    </head>
    <body>
        
        <div class="form-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cadastrar Empresa <span class="glyphicon glyphicon-tower"></span>
                </div>
                <div class="panel-body ">
                    <!-- Inicio do Formulario -->
                    <?php 
                        require_once './_php/Edita.php';
                    ?>
                    <form method="post" action="_php/Altera.php">
                        <input type="hidden" name="id" value="<?php  echo $idEdicao;?>">
                    <div class="form-group row">
                        <div class="col-xs-6">
                            <label>Razao Social</label>
                            <input type="text" class="form-control" name="razaosocial" value="<?php echo $razaosocial; ?>" >
                        </div>
                        <div class="col-xs-6">
                            <label>Nome Fantasia</label>
                            <input type="text" class="form-control" name="nomefantasia" value="<?php echo $nomefantasia;?>">
                        </div>
                        <div class="col-xs-6">
                            <label>CNPJ</label>
                            <input type="text" class="form-control" onkeyup="formatar('##.###.###/####-##',this)" name="cnpj" value="<?php echo $cnpj; ?>" >
                        </div>
                        <div class="col-xs-2">
                            <label>DDD</label>
                            <input type="tel" class="form-control" name="ddd" value="<?php echo $ddd;?>">
                        </div>
                        <div class="col-xs-4">
                            <label>Telefone</label>
                            <input type="tel" class="form-control" onkeyup="formatar('####.####', this)" name="telefone" value="<?php echo $telefone; ?>">
                        </div>
                    </div> 
                        <div class="input-group">
                            <span class="input-group-addon">Site</span>
                            <input id="site" type="text" class="form-control" name="site" placeholder="Informação nao Obrigatória" value="<?php echo $site; ?>">
                        </div><br>
                        <button class="btn btn-success btn-sm" name="cadastrar" id="cadastrar" type="submit"><span class="glyphicon glyphicon-edit"></span> Alterar</button>
                    </form><!-- Fim do Formulario -->
            </div>
        </div>
        </div>
        
    </body>
</html>
