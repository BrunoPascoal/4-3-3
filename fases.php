<?php
	if($_POST['fase'] == 'add')
	{
		$numFase = $_POST['numFase'];
		$id_jogador = $_POST['id_jogador'];
		$id_posicao = $_POST['id_posicao'];
		$bola = $_POST['bola'];
		
		include_once('DataAccess.php');
		$da = new DataAccess();
		
		$da->inserirFases($numFase, $id_jogador, $id_posicao, $bola);
	} else {
		$id = $_POST['id'];
		
		include_once('DataAccess.php');
		$da = new DataAccess();
		
		$res = $da->getFasesID($id);
		$qntFases = $da->getSituacaoID($id);
		
		$rowFases = mysqli_fetch_object($qntFases);
		
		echo "<script type='text/javascript'>
			var i = 0;
			var x = 0;
			var b = 0;		
			var players = new Array($rowFases->qntFases);
			var posicoes = new Array($rowFases->qntFases);
			var bola = new Array ($rowFases->qntFases);
			var splitPlayers = [];";
			
			while($row = mysqli_fetch_object($res))
			{
				echo "	
					players[$row->numFase] = players[$row->numFase] + ',' + $row->id_jogador;
					
					if($row->bola == 0)
						posicoes[$row->numFase] = posicoes[$row->numFase] + ',' + '$row->id_posicaoTabela';
					else
						bola[$row->numFase] = '$row->id_posicaoTabela';
					";
			}
			
			echo "</script>";
		}
?>