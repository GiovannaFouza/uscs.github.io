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
    <link rel="stylesheet" href="stylesabores.css">
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
    <div class="carregando" id="carregando"></div>
    <div class="corpo" id="corpo">

        <input type="checkbox" id="chec">
        <!--CONFIGURANDO O MENU-->

        <label for="chec"><img id="imagem" src="menuimg3.png"></label>
        <nav>
            <ul>
                <li>
                    <a id="x" href="index.php">
                        <p id="letra"><img id="imagem3" src="logouni.png"></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="sabores2.php">
                        <p id="letra"><b>PIZZAS SALGADAS</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="sabores.php">
                        <p id="letra"><b>PIZZAS DOCES</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="quemsomos.php">
                        <p id="letra"><b>A PIZZARIA</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="contato.php">
                        <p id="letra"><b>CONTATO</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="logadm.php">
                        <p id="letra"><b>ADMINISTRAÇÃO</b></p>
                    </a>
                </li>
            </ul>
        </nav>
        <!--FIM DO MENU-->

        <div id="branco" class="col-md-3 col-lg-3"></div>
        <!--CONFIRAÇÃO QUE DETERMINA AS COLUNAS ( NO CASO DEIXEI 3 COLUNAS EM BRACO PARA CENTRALIZAR O TEXTO NO MEIO)-->

        <div id="inicio" class="col-md-6 col-lg-6">
            <!--CONFIGURANDO AS INFORMAÇÕES DA PAGINA NO CENTRO-->
            <div id="divisao">
                <div class="col-md-9 col-lg-9">
                    <p id="titulo">PIZZAS</p>
                </div>
                <div class="col-md-3 col-lg-3">
                    <img class="imagem3" src="logouni.png" width="100px" height="100px">
                </div>
            </div>
            <?php /*CONFIGURANDO O HTML NO PHP*/
                    $conexao=mysqli_connect("localhost","root","","pi")or die ("erro na conexão do servidor");/*ABRINDO CONEXAO*/
            
                        $categ="salgado" ;
                        

                       $sql=" select * from loja where categ = '$categ'";
                       $resultado = @mysqli_query($conexao, $sql);
                       $registro = @mysqli_num_rows($resultado);

                       if($registro !== 0){
                           
                       while($usuario = @mysqli_fetch_array($resultado)){
                        $_COOKIE['codigo']=$usuario["codigo"];
                        $image=$usuario["enderecoimg"];
                        $codigo=$usuario["codigo"];



                        echo"<div class=\"box\">
                            <div class=\"thumbnail\">
                                <br>";
                                 echo"<img src=".$image.">";
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
                        
            ?>
<!--
            <p id="inscrever"> Se quiser receber ofertas e promoções pelo e-mail ou Whatsapp faça seu cadastro</p>
            <div align="center">
                <a class="centro" href="../html/cadastrarse.php">
                    <button type="button" class="btn btn-danger">Clique aqui</button>
                </a>
            </div>
-->


            <div id="final">
                <hr />
                <!-- DIVISORIA DO FOOTER (LINHA)-->
                                <p id="roda"><b>Desenvolvedores: André Felipe Poltronieri Vieira Matricula: 7157340<br>Carlos António Longas Matricula:7147614<br>Giovanna Ferracini Souza Matricula:7157282<br>Copyright ©2020 All rights reserved | Universitário's Pizza</b></p>

                <!--ABRINDO PARAGRAFO COM A TAG <p> DEIXANDO EM NEGRITO COM A TAG <b> E CONFIGURANDO O PARAGRAFO COM O ID (roda)-->
            </div>
        </div>
    </div>

    <div class="col-md-3 col-lg-3"></div>

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

</body>
<!--FECHANDO O CORPO DA PÁGINA-->

</html>
<!-- FECHANDO A TAG HTML-->