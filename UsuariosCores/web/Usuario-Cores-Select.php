<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista Usuários</font></b>
      </br> </br>

     <table border = "1">
      <tr>
      <td><b>Usuário</b></td>
      <td><b>Cor</b></td>
      <td><b>Alterar</b></td>
      <td><b>Excluir</b></td>
     </tr>

       <?php
            // criar conexão
            include_once("../_conection.php");
            $conexao = conectaBD();

            $sql = "SELECT users.name, colors.name AS color FROM users  left JOIN colors ON users.name = colors.name";
            $resultado = mysqli_query($conexao, $sql);

            while($i = mysqli_fetch_assoc($resultado)){
                
        ?>
             <tr>
                <td><?php echo $i['name'];?></td>
                
                <td><?php echo $i['color']??"nenhuma";?></td>

                <td><a href="<?php echo"Usuario-Cores-FormEditar.php?var_pk=". $i['name']."&var_nome=". $i['name']?>">Alterar</a></td>
                <td><a href="<?php echo"../_delete.php?var_pk=". $i['name']."&tabela=user"?>">Excluir</a></td>

             </tr>
            <?php
               }
               desconectaBD($conexao);
            ?>
     </table>

</BODY>
</HTML>
