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
        <script type="text/javascript">
            function formatar (mascara,documento){
                var campo = documento.value.length;
                var saida = mascara.substring(0,1);
                var texto = mascara.substring(campo);
                if(texto.substring(0,1)!== saida){
                    documento.value += texto.substring(0,1);
                }
            }
            function Aviso(){
                window.confirm("Deseja mesmo excluir essa Empresa?");
                
            }
        </script>
        <!-- TOOLTIP -->
        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
        });
        </script>
        
        <title></title>
    </head>
    <body>
        
        <nav class="nav navbar-default"><!-- INICIO DA NAV-->
            <div class="container">
            <div class="navbar-brand"><!-- Inicio Logo da NAV-->
                <h3 id="Logo">Projeta - Listagens</h3>
            </div><!-- Fim Logo da NAV-->
            <div class="nav navbar-nav"><!-- Botoes da NAV-->
                <ul class="nav navbar-nav">
                    <li><a href="Cadastracliente.php" target="janela"><span class="glyphicon glyphicon-floppy-open"></span> Cadastrar</a></li>
                    
                </ul>
            </div>
            <!-- Fim dos Botoes da NAV-->
            
            
            
        </nav><!-- FIM DA NAV-->
        
        <!-- Corpo da Pagina -->
        <div class="container">
            <!-- Indicação de que existem colunas na pagina-->
            <div class="row">
                <!-- Coluna da Esquerda -->
                <div class="col-lg-4">
                   
                    <div class="panel panel-default" id="Painel">
                        <div class="panel-heading">
                            Listagem de Clientes Cadastrados
                            <a href="#" >Excluir</a>
                        </div>
                        <div class="panel-body">
                           <?php 
                           require_once './_php/MostraTodos.php';
                           if(mysqli_fetch_array($query)){
                               while($empresa = mysqli_fetch_assoc($query)){
                                   echo "<a href='VisualizarEmpresa.php?id=".$empresa['id']."' target = 'janela' data-toggle='tooltip' data-placement='auto' title='Clique para visualizar a empresa'>".$empresa['nomefantasia']."</a>";
                                   echo "<a href='EditarCliente.php?id=".$empresa['id']."' class='btn btn-primary btn-sm pull-right' target='janela'>Editar</a>";
                                   echo "<a href='_php/Exclui.php?id=".$empresa['id']."' class='btn btn-danger btn-sm pull-right' target='janela'>Excluir</a>";
                                   echo "<hr>";
                               }
                           }
                           ?>
                            
                        </div>
                    </div>
                </div>
                <!-- Fim da Coluna da Esquerda-->
                
                <!-- Coluna da Direita-->
                
                <div class="col-lg-8">
                    <iframe name="janela" id="JanelaFrame" src="Cadastracliente.php" scrolling='no'></iframe>
            </div>
        </div>
        </div>
                </div>
                <!-- Fim da Coluna da Direita -->
            </div>
        </div>
    </body>
</html>
