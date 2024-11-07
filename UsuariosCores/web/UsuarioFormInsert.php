<!DOCTYPE HTML>
<HTML>
<meta charset="utf-8"/>
<BODY>
   <b><font color="#0000FF">FORMULÁRIO PARA INSERIR USUARIO </font></b>
      </br> </br>

    <form action="../_insert.php" method="post">

    <input type=hidden name=tabela value="user">

     <b> Nome:</b> <input type="text" name="input_nome" size="8">
       </br></br>

     <b> status:</b> <input type="text" name="input_email" size="10">
       </br></br>
       <b> Atleta </b>
       <select name="input_fk_atleta">
         <option>Selecione</option>

         <?php
             include_once("../_conexao.php");

             $conn = conectaBD();

             $select = "SELECT * FROM atleta order by nome";
             $resultado = mysqli_query($conn, $select);

             while($i = mysqli_fetch_assoc($resultado)){
             ?>
                   <option value="<?php echo $i['numero'];?>">
                                  <?php echo $i['nome'];?>
                   </option>
         <?php
            }
         ?>
           </select>
        </br></br>

        <b> Trajeto </b>
       <select name="input_fk_trajeto">
         <option>Selecione</option>

         <?php
             include_once("../_conexao.php");

             $conn = conectaBD();

             $select = "SELECT * FROM trajeto order by descricao";
             $resultado = mysqli_query($conn, $select);

             while($i = mysqli_fetch_assoc($resultado)){
             ?>
                   <option value="<?php echo $i['id'];?>">
                                  <?php echo $i['descricao'];?>
                   </option>
         <?php
            }
         ?>
           </select>
        </br></br>

      <b> Tempo Final:</b> <input type="text" name="input_tempo_final" size="30">
    </br></br>

       </br></br>
    <input type="reset" value="Reset">   <input type="submit" value="Cadastrar">

   </form>

</BODY>
</HTML>
