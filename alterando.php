<?php
                    
                    
                        if(isset($_POST['alterando'])){

                        $conexao=mysqli_connect("localhost","root","","pi") or die ("erro conexão com servidor");
                            
                            
                            $nomeproduto=$_POST['nomeproduto'];
                            $precopro=$_POST['precopro'];
                            $descpro=$_POST['descpro'];
                            $codigo=$_POST['codigo'];
                            
                            if ($codigo=$_POST['codigo']){
                            $sql1 = "UPDATE NOloja SET nomeproduto = nomeproduto, precopro = precopro, descpro = descpro WHERE codigo ='$codigo'";
                            $resultadot = mysqli_query($conexao,$sql1);
                            if($resultado){
                            $gravando=" INSERT INTO loja (nomeproduto,precopro,descpro,codigo) value ('$nomeproduto','$precopro','$descpro','$codigo')";


                           // Executa o comando SQL
                          $resultado = mysqli_query($conexao,$sql1);
                          // Verifica se o comando foi executado com sucesso
                          if(!$resultado){
                            die("<script> alert('PRODUTO NÃO FOI ALTERADO'); </script>" . mysql_error());
                          }else{
                            echo "<script> alert('PRODUTO ALTERADO COM SUCESSO'); </script>";
                    }}
                        ?> 