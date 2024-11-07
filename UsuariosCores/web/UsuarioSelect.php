<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista Usuários</font></b>
      </br> </br>

     <table border = "1">
      <tr>
      <td><b>ID</b></td>
      <td><b>Nome</b></td>
      <td><b>Email</b></td>
      <td><b>Editar?</b></td>
      <td><b>Excluir?</b></td>
     </tr>

       <?php
            // criar conexão
            include_once("../_conection.php");
            $conexao = conectaBD();

            $sql = "SELECT * FROM users order by id";
            $resultado = mysqli_query($conexao, $sql);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['id'];?></td>
                <td><?php echo $i['name'];?></td>
                <td><?php echo $i['email'];?></td>

                <td><a href="<?php echo"UsuarioFormEditar.php?var_pk=". $i['id']."&var_nome=". $i['name']."&var_email=".$i['email']?>">Alterar</a></td>
                <td><a href="<?php echo"../_delete.php?var_pk=". $i['id']."&tabela=users"?>">Excluir</a></td>

             </tr>
            <?php
               }
               desconectaBD($conexao);
            ?>
     </table>

     <h3><a href="UsuarioFormInsert.html">Cadastrar novo USUÁRIO</a></h3>

</BODY>
</HTML>
