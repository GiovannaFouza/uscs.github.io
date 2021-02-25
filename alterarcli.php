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
            <div id="divisao">
                <div class="col-md-9 col-lg-9">
                    <p id="titulo">UNIVERSITÁRIO´S PIZZA</p>
                </div>
                <div class="col-md-3 col-lg-3">
                    <img class="imagem3" src="logouni.png" width="100px" height="100px">
                </div>
            </div>

            <div id="conteudotres" class="col-sm-12 col-md-5 col-lg-5">

                <p class="pro"><b>Consultar cliente</b></p>


                <form class="form-inline" action="" method="POST" name="alterarpro1">

                    <p class="estilo"> <b>Nome do Cliente</b> </p>
                    <input id="botoes" type="text" class="form-control" name="nome">
                    &nbsp;
                    <button id="botoes1" type="submit" name="alterar" class="btn btn-dark btn-lg">
                        Consultar
                    </button>
                </form>
                <!--ABRINDO COMANDOS PHP-->
                <?php
                    
                    
                if(isset($_POST['alterar'])){
                         $conexao=mysqli_connect("localhost","root","","pi")or die ("erro na conexão do servidor");

                        $nome=$_POST['nome'];

                       $sql=" select * from cadastro where nome = '$nome'";
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
                       
                       else{ echo"Registro não localizado";
                       }
                    }
                ?>
                <!--FECHANDO CONFIGURAÇÕES PHP-->
            </div>
            <center><!--ABRINDO TAG DE CENTRALIZAÇÃO-->
                <div id="conteudodois" class="col-sm-12 col-md-6 col-lg-6"><!--ABRINDO QUEBRA/DIVISÃO DE PÁGINA-->

                    <p class="pro"><b>Alterar Cliente</b></p><!--ABRINDO E FECHANDO PARAGRAFO-->

                    <!--CONFIGURAÇÕES DO FORMULÁRIO-->
                    <form class="form-inline" action="" method="POST" name="alterarpro">

                        <!--
                        <p class="estilo"> <b>Nome cliente</b> </p>
                        <input id="botoes" type="text" class="form-control" name="nome">
                        &nbsp;
-->
                       <!--ABRINDO COMANDO PHP-->
                        <br <?php
                    
                    
                        if(isset($_POST['alterando'])){

                        $conexao=@mysqli_connect("localhost","root","","pi") or die ("erro conexão com servidor");
                            
                            
                                $nome=$_POST['nome'];
                               $cpf=$_POST['cpf'];
                               $whats=$_POST['whats'];
                               $email=$_POST['email'];
                               $endereco=$_POST['endereco'];
                               $bairro=$_POST['bairro'];
                               $cidade=$_POST['cidade'];
                               $cep=$_POST['cep'];
                               $complemento=$_POST['complemento'];

                            
//                            if ($codigo=$_POST['codigo']){
                            $sql1 = "UPDATE cadstro SET nome='$nome',cpf='$cpf',whats='$whats',email='$email',endereco='$endereco',bairro='$bairro',cidade='$cidade',cep='$cep',complemento='$complemento'";
                            $result = mysqli_query($conexao,$sql1);
                            if($result){
                            $gravando=" INSERT INTO cadastro (nome,cpf,whats,email,endereco,bairro,cidade,cep,complemento) value ('$nome','$cpf','$whats','$email','$endereco','$bairro','$cidade','$cep','$complemento')";


                            $resultado = mysqli_query($conexao,$gravando);
                            
                            echo "<script> alert('PRODUTO ALTERADO'); </script>";
                            }
                                    
                            else { echo "<script> alert('PRODUTO NÃO ALTERADO'); </script>";}
                           }
                        ?> </div> <p class="estilo"> <b>Alterar nome do cliente </b> </p>

                        <input id="botoes" type="text" class="form-control" name="nome">

                        &nbsp;


                        <p class="estilo"> <b>Alterar CPF do cliente </b> </p>

                        <input id="botoes" type="text" class="form-control" name=cpf>

                        &nbsp;

                        <p class="estilo"> <b>Alterar telefone </b> </p>

                        <input id="botoes" type="text" class="form-control" name="whats">

                        &nbsp;


                        <br>
                        <p class="estilo"> <b>Alterar email </b> </p>

                        <input id="botoes" type="text" class="form-control" name="email">

                        &nbsp;


                        <br>
                        <p class="estilo"> <b>Alterar endereço </b> </p>

                        <input id="botoes" type="text" class="form-control" name="endereco">

                        &nbsp;


                        <br>
                        <p class="estilo"> <b>Alterar bairro </b> </p>

                        <input id="botoes" type="text" class="form-control" name="bairro">

                        &nbsp;


                        <br>
                        <p class="estilo"> <b>Alterar cidade </b> </p>

                        <input id="botoes" type="text" class="form-control" name="cidade">

                        &nbsp;


                        <br>
                        <p class="estilo"> <b>Alterar cep </b> </p>

                        <input id="botoes" type="text" class="form-control" name="cep">

                        &nbsp;


                        <br>
                        <p class="estilo"> <b>Alterar complemento </b> </p>

                        <input id="botoes" type="text" class="form-control" name="complemento">

                        &nbsp;


                        <br><br>
                        <button id="botoes" class="btn btn-success btn-lg" type="submit" name="alterando">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            Alterar dados
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        </button>

                    </form>

<!--FECHANDO FORMULARIO-->

                        <!--CONFIGURANDO LINKS-->
                    <a href="excluirpro.php">
                        <p id="tv">Excluir produtos</p>
                    </a><br>
                    <a href="cadastro.php">
                        <p id="tv">Incluir produto</p>
                    </a>
                </div>
            </center>



            <!--<div class="footer">
  <p>Desenvolvedores:André Felipe Poltronieri Vieira<br>Carlos António Longas<br>Giovanna Ferracini Souza</p>
</div> -->
            <div class="col-sm-12 col-md-12 col-lg-12" aling="center">
                <hr />
                <!-- DIVISORIA DO FOOTER (LINHA)-->
                <p id="roda"><b>Desenvolvedores: André Felipe Poltronieri Vieira<br>Carlos António Longas<br>Giovanna Ferracini Souza<br>Copyright ©2020 All rights reserved | Universitário's Pizza</b></p>
                <!--ABRINDO PARAGRAFO COM A TAG <p> DEIXANDO EM NEGRITO COM A TAG <b> E CONFIGURANDO O PARAGRAFO COM O ID (roda)-->
            </div>
            <div id="branco" class="col-sm-12 col-md-3 col-lg-3"></div>
            <!-- DIVSÃO EM BRANCO PARA CENTRALIZAR O TEXTO-->

        </div>
        
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
<!--FIM DAS CONFIGURAÇÕES DO PRELOADER-->
    </div>
</body>
<!--FECHANDO O CORPO DA PÁGINA-->

</html>
<!-- FECHANDO A TAG HTML-->