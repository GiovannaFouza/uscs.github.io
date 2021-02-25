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
        <nav><!-- ABRINDO A TAG DO MENU-->
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
                    <p id="titulo">Alterar</p>
                </div>
                <div class="col-md-3 col-lg-3">
                    <img class="imagem3" src="logouni.png" width="100px" height="100px">
                </div>
            </div>
            <br>

            <div id="conteudo" class="col-sm-12 col-md-12 col-lg-12 container-fluid">
<!--                <h1> Produtos </h1>-->
            </div>

            <div id="branco" class="col-sm-1 col-md-1 col-lg-1"></div>
            <div id="conteudotres" class="col-sm-12 col-md-5 col-lg-5">

                <p class="incl"><b>Consultar cliente</b></p>

                <!--CONFIGURANDO O FORMULARIO-->
                <form class="form-inline" action="" method="POST" name="alterarpro1">
                    <!-- ABRINDO E FECHANDO A TAG PARAGRAFO-->
                    <p class=""> <b>Codigo do cliente</b> </p>
                    <input id="botoes" type="number" class="form-control" name="codigo">
                    &nbsp;
                    <button id="botoes1" type="submit" name="alterar" class="btn btn-dark btn-lg">
                        Consultar
                    </button>
                </form>
                <!-- FECHANDO AS CONFIGURAÇÕES DO FORMULARIO-->
                <!-- ABRINDO OS COMANDOS PHP-->
                <?php
                    
                    
                if(isset($_POST['alterar'])){
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
                       
                       else{ echo"Registro não localizado";
                       }
                    }
                ?>
                <!-- FECHANDO COMANDO PHP-->
            </div>
            <center>
                <div id="conteudodois" class="col-sm-12 col-md-6 col-lg-6">

                    <p class="incl"><b>Alterar dados</b></p>


                    <form class="form-inline" action="" method="POST" name="alterarcliente">

                        <p class=""> <b>Código do cliente</b> </p>
                        <input id="botoes" type="number" class="form-control" name="codigo">
                        &nbsp;

                        <br>



                        <?php
                    
                    
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
                            
                            if ($codigo=$_POST['codigo']){
                            $sql1 = "UPDATE cadastro SET nome='$nome',cpf='$cpf',whats='$whats',email='$email',endereco='$endereco',bairro='$bairro',cidade='$cidade',cep='$cep',complemento='$complemento' WHERE codigo ='$codigo'";
                            $result = mysqli_query($conexao,$sql1);
                            if($result){
                            $gravando=" INSERT INTO cadastro (nome,cpf,whats,email,endereco,bairro,cidade,cep,complemento) value ('$nome','$cpf','$whats','$email',,'$endereco','$bairro','$cidade','$cep''$complemento')";


                            $resultado = mysqli_query($conexao,$gravando);
                            
                            echo "<script> alert('PRODUTO ALTERADO'); </script>";
                            }
                                    
                            else { echo "<script> alert('PRODUTO NÃO ALTERADO'); </script>";}
                            }}
                        ?>



                        <p class=""> <b>Alterar nome </b> </p>

                        <input id="botoes" type="text" class="form-control" name="nome">

                        &nbsp;


                        <p class=""> <b>Alterar cpf </b> </p>

                        <input id="botoes" type="text" class="form-control" name="cpf">

                        <p class=""> <b>Alterar Telefone </b> </p>

                        <input id="botoes" type="text" class="form-control" name="whats">

                        <p class=""> <b>Alterar E-mail </b> </p>

                        <input id="botoes" type="text" class="form-control" name="email">

                        <p class=""> <b>Alterar Endereço </b> </p>

                        <input id="botoes" type="text" class="form-control" name="endereco">

                        <p class=""> <b>Alterar Bairro </b> </p>

                        <input id="botoes" type="text" class="form-control" name="bairro">

                        <p class=""> <b>Alterar Cidade </b> </p>

                        <input id="botoes" type="text" class="form-control" name="cidade">

                        <p class=""> <b>Alterar CEP </b> </p>

                        <input id="botoes" type="text" class="form-control" name="cep">

                        <p class=""> <b>Alterar Complemento </b> </p>

                        <input id="botoes" type="text" class="form-control" name="complemento">


                        &nbsp;
                        <br><br>
                        <button id="botoes" class="btn btn-success btn-lg" type="submit" name="alterando">
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            Alterar dados
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        </button>

                    </form>


                    <!-- CONFIGURANDO LINKS-->
                    <a href="excluircli.php"><p class="textodois">Excluir cliente</p></a><br><br>
                    <a href="cadastro.php"><p class="textodois">Incluir cliente</p></a>
                </div>
            </center>
            <!-- CONFIGURAÇÕES DO PRELOADER-->
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
            <!-- FIM DAS CONFIGURAÇÕES DO PRELOADER-->
        </div><!-- FECHANDO DIVISÃO DE PAGINA-->
    </div>

</body><!-- FECHANDO CORPO DA PAGINA-->

</html> <!-- FECHANDO O COMANDO HTML-->