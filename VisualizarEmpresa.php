
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
        
        <?php 
                        require_once './_php/Edita.php';
                        ?>
                        
                    
                    
        <div class="form-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cliente ID.: <?php echo $id; ?> <span class="glyphicon glyphicon-tower"></span>
                </div>
                <div class="panel-body ">
                    <!-- Inicio do Formulario -->
                    <label class="badge">Razao Social</label><?php echo $razaosocial;?><hr>
                    <label class="badge">Nome Fantasia</label><?php echo $nomefantasia;?><hr>
                    <label class="badge">CNPJ</label><?php echo $cnpj;?><hr>
                    <label class="badge">Telefone</label><?php echo "(".$ddd.")".$telefone; ?><hr>
                    <label class="badge">Site</label><?php echo $site; ?><hr>
                        
            </div>
        </div>
        </div>
        
    </body>
</html>
