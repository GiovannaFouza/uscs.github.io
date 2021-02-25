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
    <link rel="stylesheet" href="styleadm.css">
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

<body><!-- ABRINDO O CORPO DA PAGINA-->
    <div class="carregando" id="carregando"></div><!--CONFIGURAÇÕES PRELOADER-->
    <div class="corpo" id="corpo"><!--CONFIGURAÇÕES PRELOADER-->

        <input type="checkbox" id="chec"><!--CONFIGURANDO O MENU HAMBURGUER-->
        <!--CONFIGURANDO O MENU-->

        <label for="chec"><img id="imagem" src="menuimg3.png"></label><!--CONFIGURANDO O A IMAGEM DO MENU HAMBURGUER-->
        <nav><!--ABRINDO A TAG FO MENU-->
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
                    <a id="x" href="cadastro.php">
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
        </nav><!--FINALIANDO O MENU-->
        
        <!--CONFIRAÇÃO QUE DETERMINA AS COLUNAS ( NO CASO DEIXEI 3 COLUNAS EM BRACO PARA CENTRALIZAR O TEXTO NO MEIO)-->

        <br><!--PULANDO LINHA-->
        <br><!--PULANDO LINHA-->
        <!--CONFIGURANDO AS INFORMAÇÕES DA PAGINA NO CENTRO-->
        
        <!--ALGUNS CODIGOS QUE DEIXEI QUE PODERIAM SER UTILIZADOS-->
<!--
        <div id="divisao">
            <div class="col-md-9 col-lg-9">
                <p id="titulo">ADMINISTRAÇÃO</p>
            </div>
            <div class="col-md-3 col-lg-3">
                <img class="imagem3" src="../img/logouni.png" width="100px" height="100px">
            </div>
        </div>

        <div id="conteudodois" class="col-sm-12 col-md-3 col-lg-3 container-fluid">
            <center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a href="../html/dadoscliente.php"><b class="pro">DADOS DO CLIENTE</b></a>
            </center>
        </div>
        <div id="conteudodois" class="col-sm-12 col-md-3 col-lg-3 container-fluid">
            <center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a href="../html/cadastro.php"><b class="pro">INCLUIR</b></a>
            </center>
        </div>

        <div id="conteudodois" class="col-sm-12 col-md-3 col-lg-3 container-fluid">
            <center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <a href="../html/excluirpro.php"><b class="pro">EXCLUIR</b></a>
            </center>
        </div>

        <div align="center" id="conteudodois" class="col-sm-12 col-md-3 col-lg-3 container-fluid">
            <center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <a href="../html/alterar.php"><b class="pro">ALTERAR</b></a>
            </center>
        </div>


        <div class="col-sm-12 col-md-12 col-lg-12 container-fluid">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
-->
           
           <!-- FIM DOS COMETARIOS DE CÓDIGOS QUE PODERIAM SER USADOS-->
            
            <br><!--PULANDO LINHA-->
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br><!--PULANDO LINHA-->

            <hr />
            <!-- DIVISORIA DO FOOTER (LINHA)-->
                            <p id="roda"><b>Desenvolvedores: André Felipe Poltronieri Vieira Matricula: 7157340<br>Carlos António Longas Matricula:7147614<br>Giovanna Ferracini Souza Matricula:7157282<br>Copyright ©2020 All rights reserved | Universitário's Pizza</b></p>

            <!--ABRINDO PARAGRAFO COM A TAG <p> DEIXANDO EM NEGRITO COM A TAG <b> E CONFIGURANDO O PARAGRAFO COM O ID (roda)-->

        </div> <!--FECHANDO QUBRA DE PAGINA-->
    </div><!--FECHANDO QUEBRA DE PÁGINA-->
<!--CONFIGURAÇÕES PRELOADER-->
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
    <!-- FIM DAS CONFIGURAÇÕES PRELOADER-->
</body>
<!--FECHANDO O CORPO DA PÁGINA-->

</html>
<!-- FECHANDO A TAG HTML-->