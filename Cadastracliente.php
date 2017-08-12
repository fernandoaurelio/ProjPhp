
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
        
        <!-- Formulario de Cadastro-->
                    
                     <div class="form-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cadastrar Empresa <span class="glyphicon glyphicon-tower"></span>
                </div>
                <div class="panel-body ">
                    <!-- Inicio do Formulario -->
                    
                    <form method="post" action="_php/Cadastra.php">
                    <div class="form-group row">
                        
                        <div class="col-xs-6">
                            <label>Razao Social</label>
                            <input type="text" class="form-control" name="razaosocial" required="" >
                        </div>
                        <div class="col-xs-6">
                            <label>Nome Fantasia</label>
                            <input type="text" class="form-control" name="nomefantasia" required="">
                        </div>
                        <div class="col-xs-6">
                            <label>CNPJ</label>
                            <input type="text" class="form-control" onkeyup="formatar('##.###.###/####-##',this)" name="cnpj" maxlength="18px" required="">
                        </div>
                        <div class="col-xs-2">
                            <label>DDD</label>
                            <input type="tel" class="form-control" name="ddd" required="">
                        </div>
                        <div class="col-xs-4">
                            <label>Telefone</label>
                            <input type="tel" class="form-control" onkeyup="formatar('####.####', this)" name="telefone" maxlength="10" required="">
                        </div>
                    </div> 
                        <div class="input-group">
                            <span class="input-group-addon">Site</span>
                            <input id="site" type="text" class="form-control" name="site" placeholder="Informação nao Obrigatória">
                        </div><br>
                        
                        <button class="btn btn-success btn-sm" name="cadastrar" id="cadastrar" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Cadastrar</button>
                        
                        
                        
                        
                    </form><!-- Fim do Formulario -->
        
    </body>
</html>
