<?php
	if(isset($_POST['jogadores']))
	{
		$id = $_POST['id'];
		
		include_once('DataAccess.php');
		$da = new DataAccess();
		
		$res = $da->getPlayers($id);
			
		while($row = mysqli_fetch_object($res))
		{
			if($row->ultimoNome != '')
				$name = substr($row->primeiroNome, 0, 1) . ". " . $row->ultimoNome;
			else
				$name = $row->primeiroNome;
			
			if("$row->posicao_id" == 14)
			{
				echo '<script type="text/javascript">';
				echo "$('#defesas').append(\"<span class='players'><a id='$row->id'><h6 style='text-align: center'>$name</h6><img width='50px' height='50px' src='player.png'></a></span>&nbsp;&nbsp;&nbsp;&nbsp;\");";
				echo '</script>';
			} else {
				if("$row->posicao_id" == 15)
				{
					echo '<script type="text/javascript">';
					echo "$('#medios').append(\"<span class='players'><a id='$row->id'><h6 style='text-align: center'>$name</h6><img width='50px' height='50px' src='player.png'></a></span>&nbsp;&nbsp;&nbsp;&nbsp;\");";
					echo '</script>';
				} else {
					if("$row->posicao_id" == 16)
					{
						echo '<script type="text/javascript">';
						echo "$('#avancados').append(\"<span class='players'><a id='$row->id'><h6 style='text-align: center'>$name</h6><img width='50px' height='50px' src='player.png'></a></span>&nbsp;&nbsp;&nbsp;&nbsp;\");";
						echo '</script>';
					} else {
						if("$row->posicao_id" == 1)
						{
							echo '<script type="text/javascript">';
							echo "$('#gr').append(\"<span class='players'><a id='$row->id'><h6 style='text-align: center'>$name</h6><img width='50px' height='50px' src='gr.png'></a></span>&nbsp;&nbsp;&nbsp;&nbsp;\");";
							echo '</script>';
						}
					}
				}
			}
		}
	
		echo '<script type="text/javascript">';
		echo "$('#bolaJogadas').append(\"<span style='display:inline-block;'><a id='bola'><img width='30px' height='30px' src='ball.png'></a></span>\");";
		echo '</script>';
	} else {
		if($_POST['nomes'] == 'jogador')
		{
			$id_posicaoTabela = $_POST['idPos'];
			$id_situacao = $_POST['id'];
			$numFase = $_POST['pos'];
			
			include_once('DataAccess.php');
			$da = new DataAccess();
			
			$res1 = $da->getIdJogadorFases($id_situacao, $id_posicaoTabela, $numFase);
			$row = mysqli_fetch_object($res1);
			
			$res = $da->getNomeJogador($row->id_jogador);
			$row = mysqli_fetch_object($res);
			
			if($row->ultimoNome != '')
				$name = substr($row->primeiroNome, 0, 1) . ". " . $row->ultimoNome;
			else
				$name = $row->primeiroNome;
				
			echo "<h6 style='text-align: center'><font color='white'>$name</font></h6><img width='50px' height='50px' src='player.png'>";
		}
	}
	
?>