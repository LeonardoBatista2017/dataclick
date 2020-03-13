
<?php


     include ("database.php");

     $nome = utf8_decode($_POST['nome']);

     $querycreate = "INSERT INTO tarefas (name) VALUES ('".$nome."')";
				
     $cadastrar = mysqli_query($conexao_db,$querycreate);

	  if($cadastrar){

	   mysqli_close($conexao_db);

	   header("location: tarefa.php?enviado=ok");

	 }else{
	    mysqli_close($conexao_db);

        header("location: tarefa.php?enviado=nok");

	}

?>