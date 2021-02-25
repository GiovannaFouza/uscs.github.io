<?php
                        $conexao=mysqli_connect("localhost","root","","pi")or die ("erro na conexão do servidor");


                        $usuario=$_POST['usuario'];
                        $senha=$_POST['senha'];

                        $sql="SELECT * FROM login WHERE usuario= '$usuario'";

                        $resultado=mysqli_query($conexao,$sql);
                        $registro =mysqli_num_rows($resultado);



                        if ($registro>0)
                        {
                        while ($usuario =mysqli_fetch_array($resultado))
                        {
                        if ($usuario ['senha']) {


                        mysqli_close($conexao);
                        echo ( "<script>
                            window.location.href = \"html/adm.php\"; 
                        </script>");



                        }


                        else echo"Registro não localizado";
                        }
                        }
                        

                        ?>