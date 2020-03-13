<?php 
	include 'database.php';
	
	$id = $_GET['id'];

	//DELETAR 
	$querydeletar = "SELECT * FROM tb_usuarios WHERE id='".$id."'";

	$deletar = mysqli_query($conexao_db, $querydeletar);

	if($deletar):
		foreach ($deletar as $del):
			extract($del);									
		endforeach;
	
		
		$queryDeletar = "DELETE FROM tarefas WHERE id='".$id."'";
		$deletar = mysqli_query($conexao_db, $queryDdeletar);
		
		mysqli_close($conexao_db);
		header("location: tarefa.php?deletado=ok");
	else:
		mysqli_close($conexao_db);
		header("location: tarefa.php?deletado=nok");
	endif;
	
?>