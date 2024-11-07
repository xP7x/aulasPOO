<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">Lista Cores</font></b>
      </br> </br>

     <table border = "1">
      <tr>
      <td><b>Numero</b></td>
      <td><b>Descrição</b></td>
      <td><b>Editar?</b></td>
      <td><b>Excluir?</b></td>
     </tr>

       <?php
            // criar conexão
            include_once("../_conection.php");
            $conexao = conectaBD();

            $sql = "SELECT * FROM colors order by id";
            $resultado = mysqli_query($conexao, $sql);

            while($i = mysqli_fetch_assoc($resultado)){
        ?>
             <tr>
                <td><?php echo $i['id'];?></td>
                <td><?php echo $i['name'];?></td>

                <td><a href="<?php echo"CoresFormEditar.php?var_pk=". $i['id']."&var_nome=". $i['name']?>">Alterar</a></td>
                <td><a href="<?php echo"../_delete.php?var_pk=". $i['id']."&tabela=atleta"?>">Excluir</a></td>

             </tr>
            <?php
               }
               desconectaBD($conexao);
            ?>
     </table>

     <h3><a href="CoresFormInsert.php">Cadastrar nova COR</a></h3>

</BODY>
</HTML>
