<?php
	if($_POST['action'] == 'add')
	{
		$nome = $_POST['nome'];
		$qntFases = $_POST['qntFases'];
		$situacao = $_POST['situacao'];
		$id_clube = $_POST['id_clube'];
		$id_utilizador = $_POST['id_utilizador'];
		
		include_once('DataAccess.php');
		$da = new DataAccess();
		
		$da->inserirSituacoes($nome, $qntFases, $situacao, $id_clube, $id_utilizador);
	} else {
		$id = $_POST['id'];
		
		include_once('DataAccess.php');
		$da = new DataAccess();
		
		$res = $da->getSituacaoID($id);
		
		$row = mysqli_fetch_object($res);
		$clube = $da->getClubeID($row->id_clube);
		
		$infoClube = mysqli_fetch_object($clube);
		
		echo "<script type='text/javascript'>;	
			for (var i = 0; i < $row->qntFases; i++) {
				$('#fases').append('<button type=\"button\" id=\"fase' + i + '\" class=\"btn btn-outline-primary btn-lg\">' + (i+1) + '<input type=\"hidden\" id=\"' + i + '\"></button>')
			}
			
			$('#informacoes').empty();
			$('#informacoes').append(\"<div class='card text-center'><div class='card'><div class='card-body'><h4 class='card-title'>Informações:</h4><hr><div align='left'><b>Clube:</b> $infoClube->nome <img src='$infoClube->imgUrl' style='width:25px;'><br><b>Nome Situação:</b> $row->nome<br><b>Fases:</b> $row->qntFases<br><b>Tipo Situação:</b> $row->situacao</div></div></div></div>\");
		</script>";
		
	}
?>