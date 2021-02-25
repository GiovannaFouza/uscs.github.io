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
    <link rel="stylesheet" href="stylecadastrarse.css">
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

    <!--
    <script>
            function validarcpf(form)
            {
	           cpf = document.cadastro.cpf.value
	           
	       
                if (cpf = cpf)
                {
                    alert("CPF JÁ CADASTRADO");
                    form.cpf.focus();
                    return true;
                }
	               else
                {
                    window.location.href='../php/cadstro1.php';
                }
        
            }
        </script>
-->


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
                    <p id="titulo">CADASTRO</p>
                </div>
                <div class="col-md-3 col-lg-3">
                    <img class="imagem3" src="logouni.png" width="100px" height="100px">
                </div>
            </div>
            <!--            <div align="center"><img src="https://media.giphy.com/media/JmUeeMrgOYTHikbZTM/giphy.gif" </div>-->

            <div id="conteudo" align="center">
                <!--ABRINDO FORMULARIO-->
                <form name="cadastro" method="POST" action="cadastro1.php">
                    <p id="estilo" for="nome"><b>Nome</b></p><!--ABRINDO PARAGRAFO-->
                    <br>
                    <input type="text" class="form-control" required min="3" title="Nome Completo. Exemplo: Ana Da Silva" placeholder="Ex: Ana da Silva" name="nome" pattern="([A-ZÀ-Ú]{1})([a-zà-ú]{2,})(([\s]{1}[A-ZÀ-Ú]{1})([a-zà-ú]{1,}))+" size="40">
                    <br>
                    <p id="estilo"><b>CPF</b></p>
                    <br>
                    <input type="text" class="form-control" name="cpf" size=40 maxlength=40 placeholder="Digite seu cpf" placeholder="digite seu cpf" required>
                    <br>
                    <p id="estilo" for="whatsapp">Whatsapp</p>
                    <input type="text" class="form-control" name="whats" id="Telefone" required placeholder="Ex: (99) 99999-9999" title="Digite seu número de Whatsapp (99) 99999-9999" size="40">
                    <br>
                    <p id="estilo"><b>E-mail:</b></p>
                    <br>
                    <input type="text" class="form-control" name="email" size=40 maxlength=40 placeholder="Digite seu endereço de e-mail">
                    <br>
                    <p id="estilo"><b>Endereço</b></p>
                    <br>
                    <input type="text" class="form-control" name="endereco" size=40 maxlength=40 placeholder="Digite seu endereço">
                    <br>
                    <p id="estilo"><b>Bairro</b></p>
                    <br>
                    <input type="text" class="form-control" name="bairro" size=40 maxlength=40 placeholder="Digite seu bairro">
                    <br>
                    <p id="estilo"><b>Cidade</b></p>
                    <br>
                    <input type="text" class="form-control" name="cidade" size=40 maxlength=40 placeholder="Digite sua cidade">
                    <br>
                    <p id="estilo"><b>CEP</b></p>
                    <br>
                    <input type="text" class="form-control" name="cep" size=40 maxlength=40 placeholder="Digite seu cep">
                    <!--INSERINDO UMA CAIXA DE TEXTO-->
                    <br>
                    <p id="estilo"><b>Complemento</b></p>
                    <br>
                    <input type="text" class="form-control" name="complemento" size=40 maxlength=40 placeholder="Ex.: apt 9">
                    <br>
                    <br>
                    <center>
                        <input type="submit" class="btn btn-success btn-lg" name="salva" value="Enviar">
                    </center>
                </form>


                <!--<center>
                            <p>Você deseja receber ofertas e promoções pelo e-mail ou whatapp?</p>
                            <input type="radio" name="mensagem" value="Sim" onclick="Email_Whats()">Sim &nbsp;&nbsp;

                            <input type="radio" name="menssagem" value="Nao" onclick="Email_Whats_Inv()" checked>Não

                            <p><span id="A_B" style="visibility: hidden">Por qual meio você deseja receber as informações ?</span></p>



                            <input id="What" type="checkbox" name="Whatsapp" value="Sim" style="visibility: hidden"> &nbsp;<span id="S_W" style="visibility: hidden"> WhatsApp</span>&nbsp;&nbsp;


                            <input id="E_mail" type="checkbox" name="Comunicado" value="Sim" style="visibility: hidden">&nbsp;<span id="S_E" style="visibility: hidden"> E-mail</span>

                            <br>
                            <br>
                            <br>
                            <input type="submit" name="salva" value="Enviar">
                        </center>
                    </form>
                    <script>
                        $(document).ready(function () {
                            $('#Whats').mask('(99) 99999-9999');
                        });


                        function Email_Whats() {
                            document.getElementById("What").style.visibility = "visible";
                            document.getElementById("S_W").style.visibility = "visible";
                            document.getElementById("E_mail").style.visibility = "visible";
                            document.getElementById("S_E").style.visibility = "visible";
                            document.getElementById("A_B").style.visibility = "visible";
                        }

                        function Email_Whats_Inv() {
                            document.getElementById("What").style.visibility = "hidden";
                            document.getElementById("S_W").style.visibility = "hidden";
                            document.getElementById("E_mail").style.visibility = "hidden";
                            document.getElementById("S_E").style.visibility = "hidden";
                            document.getElementById("A_B").style.visibility = "hidden";
                        }
                    </script>-->

            </div>

            <a href="excluircli.php">
                <p class="textoum">Excluir clientes</p>
            </a><br><br>
            <a href="alterarcliente.php">
                <p class="textoum">Alterar clientes</p>
            </a>

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