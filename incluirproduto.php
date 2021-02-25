<?php

$conexao=mysqli_connect("localhost","root","","pi")or die ("erro na conexão do servidor");

 $nomeproduto=$_POST['nomeproduto'];
 $descpro=$_POST['descpro'];
 $precopro=$_POST['precopro'];
 $enderecoimg=$_POST['enderecoimg'];
 $categ=$_POST['categ'];




$gravando = "INSERT INTO loja (nomeproduto,descpro,precopro,enderecoimg,categ) VALUES ('$nomeproduto','$descpro','$precopro','$enderecoimg','$categ')";

   $resultado = mysqli_query($conexao,$gravando);

   if (!$resultado)
   {
       echo "erro na gravação do registro <br>";
       echo mysqli_error();
           
   }else {
    echo ("<script>
        window.alert('CADASTRADO COM SUCESSO')
        window.location.href='cadastro.php';
    </script>");
}

   ?>