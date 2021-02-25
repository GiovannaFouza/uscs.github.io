<?php

$conexao=@mysqli_connect("localhost","root","","pi") or die ("erro na conexão do servidor");

   $nome=$_POST['nome'];
   $cpf=$_POST['cpf'];
   $whats=$_POST['whats'];
   $email=$_POST['email'];
   $endereco=$_POST['endereco'];
   $bairro=$_POST['bairro'];
   $cidade=$_POST['cidade'];
   $cep=$_POST['cep'];
   $complemento=$_POST['complemento'];

    
    
    
   $gravando = "INSERT INTO cadastro (nome,cpf,whats,email,endereco,bairro,cidade,cep,complemento) VALUES ('$nome','$cpf','$whats','$email','$endereco','$bairro','$cidade','$cep','$complemento')";

   $resultado = mysqli_query($conexao,$gravando);

   if (!$resultado)
   {
       echo "erro na gravação do registro <br>";
       echo mysqli_error();
           
   }
else {
    echo ("<script>
        window.alert('CADASTRADO COM SUCESSO')
        window.location.href='../html/dadoscliente.php';
    </script>");
}
?>