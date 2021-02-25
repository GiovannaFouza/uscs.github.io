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
        </nav>

        <!--FIM DO MENU-->

        <div id="branco" class="col-md-3 col-lg-3"></div>
        <!--CONFIRAÇÃO QUE DETERMINA AS COLUNAS ( NO CASO DEIXEI 3 COLUNAS EM BRACO PARA CENTRALIZAR O TEXTO NO MEIO)-->

        <div id="inicio" class="col-md-6 col-lg-6">
            <!--CONFIGURANDO AS INFORMAÇÕES DA PAGINA NO CENTRO-->
            <div id="divisao">
                <div class="col-md-9 col-lg-9">
                    <p id="titulo">CONSULTAR</p>
                </div>
                <div class="col-md-3 col-lg-3">
                    <img class="imagem3" src="logouni.png" width="100px" height="100px">
                </div>
            </div>


            <form class="form-inline" action="" method="POST" name="formulario">
                <center>
                <p class="pro"> <b>Telefone do cliente</b> </p>
                <center>
                    <input id="botoes" type="text" class="form-control" name="whats">
                    &nbsp;
                    <button id="botoes1" type="submit" name="procurar" class="btn btn-dark btn-lg">
                        Procurar
                    </button>
                </center>
            </form>
            <?php /*CONFIGURANDO O HTML NO PHP*/

            
                         if(isset($_POST['procurar'])){
                         $conexao=mysqli_connect("localhost","root","","pi")or die ("erro na conexão do servidor");
                    
                        $whats=$_POST['whats'];

                      $sql=" select * from cadastro where whats = '$whats'";
                       $resultado = @mysqli_query($conexao, $sql);
                       $registro = @mysqli_num_rows($resultado);

                       if($registro !== 0){

                       while($usuario = @mysqli_fetch_array($resultado)){
                        echo"<div id=\"conteudo\" class=\"col-sm-12 col-md-6 col-lg-6\">
                            <p id=\"nome\"> CÓDIGO DO CLIENTE:<p id=\"valor\">&nbsp".$usuario["codigo"]."</p></p><br>
                            <p id=\"nome\"> NOME DO CLIENTE:<p id=\"valor\">&nbsp".$usuario["nome"]."</p></p><br>
                            <p id=\"nome\"> CPF DO CLIENTE:<p id=\"valor\">&nbsp".$usuario["cpf"]."</p></p><br>
                            <p id=\"nome\"> WHATSAPP DO CLIENTE:<p id=\"valor\">&nbsp".$usuario["whats"]."</p></p><br>
                            <p id=\"nome\"> EMAIL DO CLIENTE:<p id=\"valor\">&nbsp".$usuario["email"]."</p></p><br>
                            <p id=\"nome\"> ENDEREÇO DO CLIENTE:<p id=\"valor\">&nbsp".$usuario["endereco"]."&nbsp&nbsp".$usuario["bairro"]."&nbsp&nbsp".$usuario["cidade"]."&nbsp&nbsp".$usuario["cep"]."&nbsp&nbsp".$usuario["complemento"]."</p></p><br>

<hr />
                        </div>";
                           echo "<div class=\"col-sm-12 col-md-6 col-lg-6\">


                               <form class=\"form-inline\" action=\"\" method=\"POST\" name=\"cadastro\">

                                   <p id=\"estilo\"><b>Quantidade</b></p>
                                   <br>
                                   <input type=\"number\" class=\"form-control\" name=\"quantidade\" maxlength=40 placeholder=\"Digite a quantidade\">
                                   <br>
                                   <p class=\"estilo\"> <b>Sabor</b> </p>

                                   <input id=\"botoes\" type=\"text\" class=\"form-control\" name=\"nomeproduto\" placeholder=\"Digite o sabor\">
                                   &nbsp;
                                   <br>
                                   <br>
                                   <button id=\"botoes1\" type=\"submit\" class=\"btn btn-dark btn-lg\" onclick=\"alert('PEDIDO ENVIADO PARA COZINHA')\">
                                       FINALIZAR PEDIDO
                                   </button>

                               </form>


                           </div>
                           ";
                       
                       }}
                       
                       else{ echo"<center><p id=\"valor\">Registro não localizado</p></center>";
                             mysqli_close($conexao);
                       }}
            
                                      
            ?>
            <!--
            <div class="col-sm-12 col-md-6 col-lg-6">
                
            
            <form class="form-inline" action="" method="POST" name="dadoscliente">
                
                <p id="estilo"><b>Quantidade</b></p>
                    <br>
                    <input type="number" class="form-control" name="quantidade" maxlength=40 placeholder="Digite a quantidade">
                    <br>
                <p class="estilo"> <b>Sabor</b> </p>
                
                    <input id="botoes" type="text" class="form-control" name="nomeproduto" placeholder="Digite o sabor">
                    &nbsp;
                    <br>
                    <br>
                    <button id="botoes1" type="submit" class="btn btn-dark btn-lg">
                        FINALIZAR PEDIDO
                    </button>
                
            </form>
            
            
            </div>
-->
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
            <a href="cadastrarse.php">
                <p id="tv">Incluir cliente</p>
            </a>

            <a href="excluircli.php">
                <p id="tv">Excluir cliente</p>
            </a>

            <a href="alterarcliente.php">
                <p id="tv">Alterar cliente </p>
            </a>
            <div class="col-md-12 col-lg-12">
                <br>
                <br>
                <br>
                <br>
                <br>
                <hr />
                <!-- DIVISORIA DO FOOTER (LINHA)-->
                <p id="roda"><b>Desenvolvedores: André Felipe Poltronieri Vieira<br>Carlos António Longas<br>Giovanna Ferracini Souza<br>Copyright ©2020 All rights reserved | Universitário's Pizza</b></p>
                <!--ABRINDO PARAGRAFO COM A TAG <p> DEIXANDO EM NEGRITO COM A TAG <b> E CONFIGURANDO O PARAGRAFO COM O ID (roda)-->
            </div>
        </div>
        <div id="branco" class="col-sm-12 col-md-3 col-lg-3"></div>
        <!-- DIVSÃO EM BRANCO PARA CENTRALIZAR O TEXTO-->

    </div>
    <script type="text/javascript">
        var intervalo = setInterval(function() {

            clearInterval(intervalo);

            document.getElementById("carregando").style.display = "none";
            document.getElementById("corpo").style.display = "block";
        }, 4000);
    </script>
    <
</body>
<!--FECHANDO O CORPO DA PÁGINA-->

</html>
<!-- FECHANDO A TAG HTML-->