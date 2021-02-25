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
                    <p id="titulo">EXCLUIR CLIENTE</p>
                </div>
                <div class="col-md-3 col-lg-3">
                    <img class="imagem3" src="logouni.png" width="100px" height="100px">
                </div>
            </div>


            <div id="conteudotres" class="col-sm-12 col-md-12 col-lg-12">


                <center>

                    
                    <p class="pro"><b>Consultar </b></p>


                    <form class="form-inline" action="" method="POST" name="excluir">

                        <p class="pro"> <b>Código do cliente</b> </p>
                        <input id="botoes" type="number" class="form-control" name="codigo">
                        &nbsp;
                        <button id="botoes1" type="submit" name="consultar" class="btn btn-dark btn-lg">
                            Consultar
                        </button>



                        <?php
                         
                if(isset($_POST['consultar'])){
                         $conexao=mysqli_connect("localhost","root","","pi")or die ("erro na conexão do servidor");

                        $codigo=$_POST['codigo'];

                       $sql=" select * from cadastro where codigo = '$codigo'";
                       $resultado = @mysqli_query($conexao, $sql);
                       $registro = @mysqli_num_rows($resultado);

                       if($registro !== 0){

                       while($usuario = @mysqli_fetch_array($resultado)){
                       echo"<div id=\"conteudo\" class=\"col-sm-12 col-md-12 col-lg-12\">
                            <p id=\"nome\"> NOME DO CLIENTE:<p id=\"valor\">&nbsp".$usuario["nome"]."</p></p><br>
                            <p id=\"nome\"> CPF DO CLIENTE:<p id=\"valor\">&nbsp".$usuario["cpf"]."</p></p><br>
                            <p id=\"nome\"> WHATSAPP DO CLIENTE:<p id=\"valor\">&nbsp".$usuario["whats"]."</p></p><br>
                            <p id=\"nome\"> EMAIL DO CLIENTE:<p id=\"valor\">&nbsp".$usuario["email"]."</p></p><br>
                            <p id=\"nome\"> ENDEREÇO DO CLIENTE:<p id=\"valor\">&nbsp".$usuario["endereco"]."&nbsp&nbsp".$usuario["bairro"]."&nbsp&nbsp".$usuario["cidade"]."&nbsp&nbsp".$usuario["cep"]."&nbsp&nbsp".$usuario["complemento"]."</p></p><br>

                         </div>";
 }
                       }
                       
                       else{ echo "Registro não localizado";
                             mysqli_close($conexao);
                       }}
                        ?>
                    </form>
                       
                    
                       
                       <form class="form-inline" action="" method="POST" name="excluir">

                        <p class="pro"> <b>Código do cliente</b> </p>
                        <input id="botoes" type="number" class="form-control" name="codigo">
                        &nbsp;
                        <br><br>
                        <button id="botoes" type="submit" class="btn btn-danger btn-lg" name="excluir">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            Deletar cliente
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        </button>
                        
                        <?php
                        
                         if(isset($_POST['excluir'])){
                        $conexao=mysqli_connect("localhost","root","","pi")or die ("erro na conexão do servidor");
                             
                             
                        
                         $codigo=$_POST['codigo'];


                         $sql1 = "DELETE FROM cadastro WHERE codigo='$codigo'";

                        // Executa o comando SQL
                        $resultado1 = mysqli_query($conexao,$sql1);
                        // Verifica se o comando foi executado com sucesso
                        if(!$resultado1){

                        die("<script>
                        alert('PRODUTO NÃO EXCLUIDO');
                        </script>" . mysql_error());
                        }else{

                        echo "<script>
                            alert('PRODUTO EXCLUIDO');
                            window.location.href = \"excluircli.php
                        </script>";
                        }}
         
 
                        

                        ?>


                    
                    </form>


                    <br>


                    <a href="cadastrarse.php"><p id="estilo">Incluir clientes</p></a><br><br>
                    <a href="alterarcliente.php"><p id="estilo">Alterar clientes</p></a>
                </center>




                <!--<div class="footer">
  <p>Desenvolvedores:André Felipe Poltronieri Vieira<br>Carlos António Longas<br>Giovanna Ferracini Souza</p>
</div> -->

                <hr />
                <!-- DIVISORIA DO FOOTER (LINHA)-->
                <p id="roda"><b>Desenvolvedores: André Felipe Poltronieri Vieira<br>Carlos António Longas<br>Giovanna Ferracini Souza<br>Copyright ©2020 All rights reserved | Universitário's Pizza</b></p>
                <!--ABRINDO PARAGRAFO COM A TAG <p> DEIXANDO EM NEGRITO COM A TAG <b> E CONFIGURANDO O PARAGRAFO COM O ID (roda)-->
            </div>
            <div id="branco" class="col-sm-12 col-md-3 col-lg-3"></div>
            <!-- DIVSÃO EM BRANCO PARA CENTRALIZAR O TEXTO-->

        </div>
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
    </div>
</body>
<!--FECHANDO O CORPO DA PÁGINA-->

</html>
<!-- FECHANDO A TAG HTML-->