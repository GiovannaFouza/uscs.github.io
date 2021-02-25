<!DOCTYPE html>
<!--ABRINDO COMANDOS HTML -->
<html lang="pt-BR">
<!-- CONFIGURANDO A LINGUAGEM A SER MOSTRADA -->

<head>
    <!--ABRINDO CABEÇALHO-->
    <title>Universitário's Pizza</title>
    <!--TITULO QUE APARECE NA ABA -->
    <meta charset="utf-8">
    <!--CONFIGURANDO ACENTUAÇÃO-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CONFIGURANDO A ESCALA DA PÁGINA-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--LINK PARA ACESSAR ESTILIZAÇÃO BOOTSTRAP-->
    <link rel="stylesheet" href="stylecadastro.css">
    <!--LINK PARA O ARQUIVO CSS-->
    <link rel="icon" href="unviversitariologo.png" type="image/x-icon" ?v=2 />
    <!--COMANDO DE LOGOTIPO NA ABA DA PÁGINA-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--CONFIGURAÇÃO DE ESTILO DA PÁGINA
-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--LINK PARA ACESSAR ESTILIZAÇÃO BOOTSTRAP-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--CONFIGURAÇÃO DE ESTILO DA PÁGINA-->
    

</head>
<!--FIM DO CABEÇAHO-->

<body>
    <div class="carregando" id="carregando"></div><!--CONFIGURAÇÕES PRELOADER-->
    <div class="corpo" id="corpo"><!--CONFIGURAÇÕES PRELOADER-->

        <input type="checkbox" id="chec">
        <!--CONFIGURANDO O MENU-->

        <label for="chec"><img id="imagem" src="menuimg3.png"></label><!--CONFIGURANDO A IMAGEM DO MENU HAMBURGUER-->
        <nav><!--ABRINDO A TAG PARA FAZER O MENU-->
            <ul>
                <li>
                    <a id="x" href="index.php">
                        <p id="letra"><img id="imagem3" src="logouni.png"></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="dadoscliente.php">
                        <p id="letra"><b>CADASTRO</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="sabores.php">
                        <p id="letra"><b>PRODUTOS</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="grafico6.php">
                        <p id="letra"><b>ESTATÍSTICA</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="logout.php">
                        <p id="letra"><b>LOGOUT</b></p>
                    </a>
                </li>
            </ul>
        </nav>

        <!--FIM DO MENU-->

        <div id="branco" class="col-md-3 col-lg-3"></div>
        <!--CONFIRAÇÃO QUE DETERMINA AS COLUNAS ( NO CASO DEIXEI 3 COLUNAS EM BRACO PARA CENTRALIZAR O TEXTO NO MEIO)-->

        <div id="inicio" class="col-md-6 col-lg-6">
            <!--CONFIGURANDO AS INFORMAÇÕES DA PAGINA NO CENTRO-->
            <div id="divisao"><!--ABRINDO QUEBRA/DIVISÃO DE PÁGINA E DETERMINANDO COLUNAS-->
                <div class="col-md-9 col-lg-9"><!--ABRINDO QUEBRA/DIVISÃO DE PÁGINA E DETERMINANDO COLUNAS-->
                    <p id="titulo">Alterar</p><!--ABRINDO PARAGRAFO-->
                </div><!--FECHANDO QUEBRA/DIVISÃO DE PÁGINA-->
                <div class="col-md-3 col-lg-3">
                    <img class="imagem3" src="logouni.png" width="100px" height="100px"><!--CONFIGURAÇÕES DE IMAGEM-->
                </div>
            </div>
            <br><!--PULANDO LINHA-->

            <div id="conteudo" class="col-sm-12 col-md-12 col-lg-12 container-fluid">
<!--                <h1> Produtos </h1>-->
            </div>

            <div id="branco" class="col-sm-1 col-md-1 col-lg-1"></div>
            <div id="conteudotres" class="col-sm-12 col-md-5 col-lg-5">

                <p class="incl"><b>Consultar produto</b></p>

                <!--ABRINDO CONFIGURAÇÕES DO FORMULARIO-->
                <form class="form-inline" action="" method="POST" name="alterarpro1"><!--CONFIURAÇÕES DO FORMULARIO-->

                    <p class=""> <b>Codigo do produto</b> </p>
                    <input id="botoes" type="number" class="form-control" name="codigo">
                    &nbsp;
                    <button id="botoes1" type="submit" name="alterar" class="btn btn-dark btn-lg">
                        Consultar
                    </button>
                </form>
                <!--FIM DO FORMULARIO-->
                <!--ABRINDO COMANDO PHP-->
                <?php
                    
                    
                if(isset($_POST['alterar'])){
                         $conexao=mysqli_connect("localhost","root","","pi")or die ("erro na conexão do servidor");

                        $codigo=$_POST['codigo'];

                        //INSERINDO COMANDO DE SELEÇÃO
                       $sql=" select * from loja where codigo = '$codigo'";
                       $resultado = @mysqli_query($conexao, $sql);
                       $registro = @mysqli_num_rows($resultado);

                       if($registro !== 0){

                       while($usuario = @mysqli_fetch_array($resultado)){
                       echo"<div class=\"box\">
                            <div class=\"thumbnail\">
                                <br>";
                                 echo"<img src=".$usuario["enderecoimg"].">
                                 <input type='hidden' name='codigo' value=''>";
                                echo"<div class=\"caption\">
                                <p class=\"morango\"><b>".$usuario["nomeproduto"]."</b></h2>
                                    <p class=\"chocolate\"><b>".$usuario["descpro"]."</b></p>
                                    <p class=\"chocolate\"><b> Valor:R$ &nbsp&nbsp".$usuario["precopro"]."</b></p>
                            </div>
                        </div>

                        </div>
                        ";

                       }
                       }
                       
                       else{ echo"Registro não localizado";
                       }
                    }
                ?>
                <!--FINALIZANDO COMANDO PHP-->
            </div>
            <center> <!--FECHANDO A TAG DE CENTRALIZAÇÃO-->
                <div id="conteudodois" class="col-sm-12 col-md-6 col-lg-6">

                    <p class="incl"><b>Alterar produtos</b></p>

                    <!-- ABRINDO CONFIGURAÇÕES DE FORMULARIO-->
                    <form class="form-inline" action="" method="POST" name="alterarcliente">
                        <!-- ABRINDO PARAGRAFO-->    
                        <p class=""> <b>Código do produto</b> </p>
                        <input id="botoes" type="number" class="form-control" name="codigo">
                        &nbsp;

                        <br><!-- PULANDO LINHA-->


                        <!-- ABRINDO COMANDOS PHP-->
                        <?php
                    
                    
                        if(isset($_POST['alterando'])){

                        $conexao=@mysqli_connect("localhost","root","","pi") or die ("erro conexão com servidor"); //ABRINDO CONEXAO
                            
                               $nomeproduto=$_POST['nomeproduto'];//CRIANDO VARIAVEIS
                               $descpro=$_POST['descpro'];
                               $precopro=$_POST['precopro'];
                               $enderecoimg=$_POST['enderecoimg'];
                               $categ=$_POST['categ'];
                               
                            //COMANDO DE ATUALIZAR
                            if ($codigo=$_POST['codigo']){
                            $sql1 = "UPDATE loja SET nomeproduto='$nomeproduto',descpro='$descpro',precopro='$precopro',enderecoimg='$enderecoimg',categ='$categ' WHERE codigo ='$codigo'";
                            $result = mysqli_query($conexao,$sql1);
                            if($result){
//                            $gravando=" INSERT INTO loja (nomeproduto,descpro,precopro,enderecoimg,categ) value ('$nomeproduto','$descpro','$precopro','$enderecoimg','$categ')";


//                            $result = mysqli_query($conexao,$gravando);
                            
                            echo "<script> alert('PRODUTO ALTERADO'); </script>";
                            }
                                    
                            else { echo "<script> alert('PRODUTO NÃO ALTERADO'); </script>";}
                            }}
                        ?>
                        <!-- FFECHANDO COMANDOS PHP-->


                        <p class=""> <b>Alterar nome do produto </b> </p>

                        <input id="botoes" type="text" class="form-control" name="nomeproduto">

                        &nbsp;


                        <p class=""> <b>Alterar descrição do produto </b> </p>

                        <input id="botoes" type="text" class="form-control" name="descpro">

                        <p class=""> <b>Alterar preço do produto </b> </p>

                        <input id="botoes" type="text" class="form-control" name="precopro">

                        <p class=""> <b>Alterar imagem </b> </p>

                        <input id="botoes" type="file" class="form-control" name="enderecoimg">

                        <p class=""> <b>Alterar categoria </b> </p>

                        <input id="botoes" type="text" class="form-control" name="categ">


                        &nbsp;
                        <br><br>
                        <button id="botoes" class="btn btn-success btn-lg" type="submit" name="alterando">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            Alterar dados
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        </button>

                    </form>



                    <!--COMANDO QUE GERA LINK PARA OUTRAS PAGINAS-->
                    <a href="excluirpro.php"><p class="textodois">Excluir produto</p></a><br><br>
                    <a href="cadastro.php"><p class="textodois">Incluir produto</p></a>
                </div>
            </center>
            
            <!--CONFIGURAÇÕES DO PRELOADER-->
            <script type="text/javascript">
                // $(window).on('load', function () {

                // document.getElementById("carregando").style.display = "none";
                // document.getElementById("corpo").style.display = "block";

                //});


                var intervalo = setInterval(function() {

                    clearInterval(intervalo);

                    document.getElementById("carregando").style.display = "none";
                    document.getElementById("corpo").style.display = "block";
                }, 4000);
            </script>
            <!--FIM DAS CONFIGURAÇÕES DO PRE LOADER-->
        </div><!--FECHANDO QUEBRA/DIVISÃO DE PÁGINA-->
    </div>

</body><!--FECHANDO O CORPO DA PÁGINA-->

</html><!--FECHANDO OS COMANDOS HTML-->