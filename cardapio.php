<!DOCTYPE html>
<!--CONFIGURAÇÃO PARA ABRIR A PÁGINA-->
<html lang="pt-BR">
<!--CONFIGURAÇÃO DA LÍNGUA-->

<head>
    <!--ABRINDO A CABEÇA DA PÁGINA -->
    <title>ArtMadeira LBM</title>
    <!--CONFIGURAÇÃO PARA O TÍTULO-->
    <meta charset="utf-8">
    <!--CONFIGURAÇÃO PARA DEIXAR AS PALAVRAS ASSETUADAS-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CONFIGURAÇÃO PARA O TAMANHO DA PÁGINA-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--LINK DO BOOTSTRAP-->
    <link rel="stylesheet" href="stylesabores.css">
    <!--ESTILO DA PÁGINA-->
    <link rel="icon" href="../imagens/favicon.png" type="image/x-icon" ?v=2 />
    <!--CONFIGURAÇÃO PARA COLOCAR O LOGOTIPO NA ABA-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--LINKS PARA A CONFIGURAÇÃO DA PÁGINA-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--LINKS PARA A CONFIGURAÇÃO DA PÁGINA-->
    <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
    <!--LINKS PARA A CONFIGURAÇÃO DA PÁGINA-->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.4.0.min.js"></script>
    <!--LINKS PARA A CONFIGURAÇÃO DA PÁGINA-->
    <script src="..\js\topo.js"></script>
    <!--CONFIGURAÇÃO DO PARA O BOTÃO DE SUBIR AO TOPO-->
    <script src="../js/preloader1.js"></script>
    <!--CONFIGURAÇÃO DO PRELOADER DA PÁGINA-->
    <link href="https://fonts.googleapis.com/css?family=Emilys+Candy&display=swap" rel="stylesheet">

</head>
<!--FIM DO CABEÇALHO-->

<body>
    <div class="carregando" id="carregando"></div>
    <div class="corpo" id="corpo">

        <input type="checkbox" id="chec">
        <!--CONFIGURANDO O MENU-->

        <label for="chec"><img id="imagem" src="../img/menuimg3.png"></label>
        <nav>
            <ul>
                <li>
                    <a id="x" href="index.php">
                        <p id="letra"><img id="imagem3" src="../img/logouni.png"></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="sabores.php">
                        <p id="letra"><b>CARDÁPIO</b></p>
                    </a>
                </li>
                <li>
                    <a id="x" href="../html/cadastro.php">
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

            <p id="titulo">UNIVERSITÁRIO´S PIZZA</p>
            <!--TITULO DA PÁGINA-->
            <!--FINALIZANDO O MENU-->
 <?php /*CONFIGURANDO O HTML NO PHP*/
$conexao=mysqli_connect("localhost","root","","pi")or die ("erro na conexão do servidor");/*ABRINDO CONEXAO*/
        /*MOSTRANDO O HTML NA TELA POR PHP*/
echo"<div id=\"iniciol\" class=\"col-sm-12 col-md-12 col-lg-12\">
<center>
<a class=\"navbar-brand-fixed-top\" href=\"index1.html\"><img class=\"logo\" src=\"..\imagens\logotipolbmvermelho.png\"></a>
</center>

<div class=\"col-sm-12 col-md-11 col-lg-11\" id=\"meuperfil\">
<ul class=\"nav navbar-nav navbar-right\">
<center>
<li class=\"dropdown\">"; 

                                      if(isset ($_COOKIE['variavel'])==true){
                                      echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>";
echo "<font color='black'>";
                                      echo "<img class='foto' src='../imagens/pessoa.png'>";
                                      echo "<label>Meu perfil, Olá&nbsp</label>";
echo "</font>";
                                      echo "<font color='black'>";
echo "<label>".$variavel."</label>";
                                      echo "</font>";
echo "<b class='caret'></b>";
echo "</a>";
                                      echo "<ul class='dropdown-menu' name='menu2'>";
                                      echo "<li><a href='../html/carrinho.php'>";
                                      echo "<center>Minhas compras</center>";
                                      echo "</a></li>";
                                      echo "<li><a href=\"../php/logout.php\">";
                                      echo "<center>Sair</center>";
                                      echo "</a></li>";
                                      echo "</ul>";

                                    }else{
                                     /*CONFIGURANDO O MENU QUANDO AP ESSOA NÃO ESTIVER LOGADA*/
$_COOKIE['variavel'] = "";
                                     echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>";
echo "<font color='black'>";
                                     echo "<img class='foto' src='../imagens/pessoa.png'>";
                                     echo "<label>Meu perfil</label>";
                                     echo "</font>";
                                     echo "<b class='caret'></b>";
                                     echo "</a>";
echo "<ul class='dropdown-menu' name='menu1'>";
echo "<li><a href='loginloja.php'>";
                                     echo "<center>Fazer login</center>";
                                     echo "</a></li>";
                                     echo "<li><a href='registropf.html'>";
                                     echo "<center>Cadastrar-se</center>";
                                     echo "</a></li>";
                                     echo "</ul>";
                                    }



                               
                            echo"</li>";
                            echo"</center>";
                            echo"</ul>";
                            echo"</div>";
                            echo"<div id=\"divisor\" class=\"col-xs-12 col-12 col-sm-12 col-md-12 col-lg-12 container-fluid\">";
                            echo"<br>";
                            echo"<center>";
                            echo"<p class=\"mais\">Loja - Categoria Plaquinhas</p>";


                       $categ="plaquinhas" ;


                       $sql=" select * from loja where categ = '$categ'";
$resultado = @mysqli_query($conexao, $sql);
                       $registro = @mysqli_num_rows($resultado);

if($registro !== 0){

while($usuario = @mysqli_fetch_array($resultado)){

$_COOKIE['codigo']=$usuario["codigo"]; 
                       $image=$usuario["enderecom"];
$codigo=$usuario["codigo"];



                       echo"<ul class=\"gallery row\">
<br><br>
<li class=\"col-sm-2 col-md-2 col-lg-2\">
<figure>
<div class=\"thumbnail\">
<br>
<a href=\"produto.php?codi=".$codigo."&idcliente=".$idcliente."&teste=0\">

<img src=../imagens/fotosdosdecorativos/imagenstamanhomedio/".$image."></a>"; 
                                    echo"<div class=\"caption\">
<h2><b>".$usuario["nomeproduto"]."</b></h2>";
                                   echo"<p class=\"preco\"><b> Valor:R$ &nbsp&nbsp".$usuario["precopro"]."</b></p>
</div>
</div>
</figure>
</li>
</ul>";


                       }
                       }

                       else{ echo"Registro não localizado";
                       }





            /*CONFIGURANDO MOSTRAR OS NÚMEROS DA PÁGINA E O RADAPÉ E UM JS PARA MOSTRAR O MENU AO CLICAR NO BOTÃO HAMBURGUER*/
echo"</div>
<div id=\"paginacao\" class=\"col-sm-12 col-12 col-md-12 col-lg-12 \">
<center>
<div aria-label=\"Page navigation\">
<ul class=\"pagination\">
<li>
<a id=\"pag\" href=\"#\" aria-label=\"Previous\">
<span aria-hidden=\"true\">&laquo;</span>
</a>
</li>
<li><a id=\"pag\" href=\"loja1.php\">1</a></li>
<li><a id=\"pag\" href=\"loja1.php\">2</a></li>
<li><a id=\"pag\" href=\"loja1.php\">3</a></li>
<li>
<a id=\"pag\" href=\"#\" aria-label=\"Next\">
<span aria-hidden=\"true\">&raquo;</span>
</a>
</li>
</ul>
</div>
</center>

</div>
</div>


<script src=\"..\js\mostrar-nav.js\"></script>

<footer class=\"col-sm-12 col-12 col-md-12 col-lg-12 container-fluid\">
<div class=\"textoesq col-sm-12 col-12 col-md-4 col-lg-4\">
<b>Contato@gmail.com<br>
(11) 94760-7016 (Maurício) e (11)94760-7015 (Huguete)<br>
                    Loja parceira - Ceasa</b><br><br>
</div>
<div class=\"textoc col-sm-12 col-12 col-md-5 col-lg-5\">
<b>Copyright ©2019 All rights reserved | ArtMadeira LBM</b><br><br>
</div>
<div class=\"textodireit col-sm-12 col-12 col-md-3 col-lg-3\">
<b>Desenvolvedores -
                    Giovanna Ferracicni Souza /Gustavo Guelfi Binati /
Nathan Alves Proença</b>


</div>
</footer>

</div>
</div>
</div>
</body>

</html>";
?>
           