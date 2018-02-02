<?php session_start();
if(isset($_SESSION['id']))
{
	
} else {
	header("Location: login.php");
}
?>

<!doctype html>
<html lang="pt">
  <head>
  <?php include_once("head.php") ?>
  </head>
  <body>
	<div class="border">
		<div class="container">
			<div class="row">
				<div class="col-md-5" style="padding:10px">
					<div class="card text-center">
						<div class="card">
						  <div class="card-header">
							Player
						  </div>
							<div class="card-body">
								<h4 class="card-title">Situação:</h4>
								<hr />
									<div class="dropdown">
									  <button class="btn btn-info btn-block dropdown-toggle" type="button" id="situacoesCriadas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Situações Criadas
									  </button>
									  <div class="dropdown-menu dropdown-menu-center" aria-labelledby="dropdownMenuButton" id="situacoes">
										  <?php 
											include_once('DataAccess.php');
											$da = new DataAccess();
											
											$res = $da->getSituacoes($_SESSION['id']);
											while($row = mysqli_fetch_object($res))
											{
												echo "<a class='dropdown-item' id='$row->id' href='#'>$row->nome ($row->qntFases)</a>";
											}
										  ?>
									  </div>
									</div>
							</div>
						</div>
					</div>
					<br>
					<div id="informacoes">
						
					</div>
				</div>
				<br>
				<div class="col-md-7" style="padding:10px">
					<table id="tableJogadores" width="720px" height="510px" class="tableBckImg">
						<tr> <!-- a -->
							<th>&nbsp;&nbsp;</th>
							<th class="arremeso canto" id="a1"></th>
							<th class="arremeso" id="a2"></th> 
							<th class="arremeso" id="a3"></th>
							<th class="arremeso" id="a4"></th>
							<th class="arremeso" id="a5"></th> 
							<th class="arremeso" id="a6"></th>
							<th class="arremeso" id="a7"></th>
							<th class="arremeso" id="a8"></th> 
							<th class="arremeso" id="a9"></th>
							<th class="canto" id="a10"></th>
						</tr>
						<tr> <!-- b -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa" id="b1"></th>
							<th class="defesa livre" id="b2"></th> 
							<th class="defesa livre" id="b3"></th>
							<th class="medio livre" id="b4"></th>
							<th class="medio livre" id="b5"></th> 
							<th class="medio livre" id="b6"></th>
							<th class="medio livre" id="b7"></th>
							<th class="avancado livre" id="b8"></th> 
							<th class="avancado livre" id="b9"></th>
							<th class="avancado" id="b10"></th>
						</tr>
						<tr> <!-- c -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa" id="c1"></th>
							<th class="defesa livre" id="c2"></th> 
							<th class="defesa livre" id="c3"></th>
							<th class="medio livre" id="c4"></th>
							<th class="medio livre" id="c5"></th> 
							<th class="medio livre" id="c6"></th>
							<th class="medio livre" id="c7"></th>
							<th class="avancado livre" id="c8"></th> 
							<th class="avancado livre" id="c9"></th>
							<th class="avancado" id="c10"></th>
						</tr>
						<tr> <!-- d -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa" id="d1"></th>
							<th class="defesa livre" id="d2"></th> 
							<th class="defesa livre" id="d3"></th>
							<th class="medio livre" id="d4"></th>
							<th class="medio livre" id="d5"></th> 
							<th class="medio livre" id="d6"></th>
							<th class="medio livre" id="d7"></th>
							<th class="avancado livre" id="d8"></th> 
							<th class="avancado livre" id="d9"></th>
							<th class="avancado" id="d10"></th>
						</tr>
						<tr> <!-- e -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa pontapeBaliza" id="e1"></th>
							<th class="defesa livre penalty" id="e2"></th> 
							<th class="defesa livre" id="e3"></th>
							<th class="medio livre" id="e4"></th>
							<th class="medio livre" id="e5"></th> 
							<th class="medio livre" id="e6"></th>
							<th class="medio livre" id="e7"></th>
							<th class="avancado livre" id="e8"></th> 
							<th class="avancado livre penalty" id="e9"></th>
							<th class="avancado pontapeBaliza" id="e10"></th>
						</tr>
						<tr> <!-- f -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa" id="f1"></th>
							<th class="defesa livre" id="f2"></th> 
							<th class="defesa livre" id="f3"></th>
							<th class="medio livre" id="f4"></th>
							<th class="medio livre" id="f5"></th> 
							<th class="medio livre" id="f6"></th>
							<th class="medio livre" id="f7"></th>
							<th class="avancado livre" id="f8"></th> 
							<th class="avancado livre" id="f9"></th>
							<th class="avancado" id="f10"></th>
						</tr>
						<tr> <!-- g -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa" id="g1"></th>
							<th class="defesa livre" id="g2"></th> 
							<th class="defesa livre" id="g3"></th>
							<th class="medio livre" id="g4"></th>
							<th class="medio livre" id="g5"></th> 
							<th class="medio livre" id="g6"></th>
							<th class="medio livre" id="g7"></th>
							<th class="avancado livre" id="g8"></th> 
							<th class="avancado livre" id="g9"></th>
							<th class="avancado" id="g10"></th>
						</tr>
						<tr> <!-- h -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa" id="h1"></th>
							<th class="defesa livre" id="h2"></th> 
							<th class="defesa livre" id="h3"></th>
							<th class="medio livre" id="h4"></th>
							<th class="medio livre" id="h5"></th> 
							<th class="medio livre" id="h6"></th>
							<th class="medio livre" id="h7"></th>
							<th class="avancado livre" id="h8"></th> 
							<th class="avancado livre" id="h9"></th>
							<th class="avancado" id="h10"></th>
						</tr>
						<tr> <!-- i -->
							<th>&nbsp;&nbsp;</th>
							<th class="arremeso canto" id="i1"></th>
							<th class="arremeso" id="i2"></th> 
							<th class="arremeso" id="i3"></th>
							<th class="arremeso" id="i4"></th>
							<th class="arremeso" id="i5"></th> 
							<th class="arremeso" id="i6"></th>
							<th class="arremeso" id="i7"></th>
							<th class="arremeso" id="i8"></th> 
							<th class="arremeso" id="i9"></th>
							<th class="canto" id="i10"></th>
						</tr>
					</table>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div style="padding:10px">
								
									<div class="btn-toolbar justify-content-between">
									  <div class="btn-group" role="group" aria-label="First group">
										<button id="prev" type="button" class="btn btn-dark">&laquo; Previous</button>
									  </div>
									  <div class="input-group">
										<button id="next" type="button" class="btn btn-dark">Next &raquo;</button>
									  </div>
									</div>
									
									<div id="infoFases">
										<center><h3>Fases de Jogo:</h3>
										<hr>
											<div class="btn-toolbar justify-content-between" id="fases">
											  
											</div>
										<hr>
										</center>
									</div>
									
									<br>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="scripts"> </div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<script>
	$(document).ready(function(){
		$('#navbarTogglerDemo02').find('*').removeClass('active');
		$('#player').addClass('active');
		$('#infoFases').hide();
	});
	var idClick;
		$(document).on("click", "#situacoes a", function(e){
			$('#infoFases').show();
			$("#tableJogadores tr th").empty();
			
			idClick = $(this).attr('id');
			
			var thisText = $(this).text();
			
			$('#situacoesCriadas').text(thisText);
			$('#fases').empty();
			
			$.ajax({
				type: "POST",
				url: "situacoes.php",
				data: {
					'id' : idClick,
					'action' : 'get'
				},
				success: function (data) {
					$("#scripts").append(data);
				}
			});
			
			$.ajax({
				type: "POST",
				url: "fases.php",
				data: {
					'id' : idClick,
					'fase' : 'get'
				},
				success: function (data) {
					$("#scripts").append(data);
				}
			});
		});
	</script>
	
	<script>
	$(document).on("click", "#prev", function(){					// Quando clicado no botão Previous
		var p = prev();												// Guarda na variavel p os valores retornados pela função prev()
		posicoes[i] = p[0][i];										// Guarda no array posicoes a posição anterior retornada pela função prev()
		bola[b] = p[1][b];											// Guarda no array bola a posição anterior retornada pela função prev()
		
		splitPosicoes = stringArray(posicoes[i]); 				// Retira a ',' dos dados inseridos no array dos posicoes[] e guarda no array splitPosicoes[]
		 
		$('#tableJogadores tr th').empty();
			
		$('#tableJogadores tr th').each(function(){	// Precorre este ciclo dependendo de quantas <th> existirem na tabela com id = tableJogadores
			for (var x = 0; x < splitPosicoes.length; x++)
			{
				if($(this).attr("id") == splitPosicoes[x]) {	// Se o ID de uma <th> existir no array splitPosicoes(Guarda a posição dos jogadores)...
					$.ajax({
						type: "POST",
						url: "up.php",
						data: {
							'idPos' : splitPosicoes[x],
							'id' : idClick,
							'pos' : i,
							'nomes' : 'jogador'
						},
						context: this,
						success: function (data) {	
							$(this).prepend(data);
						}
					});
				}
			}
			
			if($(this).attr("id") == bola[i] && bola[i] != undefined)
			{
				$(this).append("<img width='30px' height='30px' src='ball.png'>");
			}
		});
			
			$("#fases .btn").removeClass("active");			// Remove a class "active" dos botões de alteração de fase
			$("#fases .btn").eq([i]).addClass('active');	// Adiciona a class "active" ao botão de fase anterior
	});
		
	
	$(document).on("click", "#next", function(){					// Quando clicado no botão Next
	
		var n = next();												// Guarda na variavel n os valores retornados pela função next()
		posicoes[i] = n[0][i];										// Guarda no array posicoes a posição seguinte retornada pela função next()
		bola[b] = n[1][b];											// Guarda no array bola a posição seguinte retornada pela função next()
		
		splitPosicoes = stringArray(posicoes[i]); 				// Retira a ',' dos dados inseridos no array dos posicoes[] e guarda no array splitPosicoes[]
		 
		$('#tableJogadores tr th').empty();
			
		$('#tableJogadores tr th').each(function(){	// Precorre este ciclo dependendo de quantas <th> existirem na tabela com id = tableJogadores
			for (var x = 0; x < splitPosicoes.length; x++)
			{
				if($(this).attr("id") == splitPosicoes[x]) {	// Se o ID de uma <th> existir no array splitPosicoes(Guarda a posição dos jogadores)...
					$.ajax({
						type: "POST",
						url: "up.php",
						data: {
							'idPos' : splitPosicoes[x],
							'id' : idClick,
							'pos' : i,
							'nomes' : 'jogador'
						},
						context: this,
						success: function (data) {	
							$(this).prepend(data);
						}
					});
				}
			}
			
			if($(this).attr("id") == bola[i] && bola[i] != undefined)
			{
				$(this).append("<img width='30px' height='30px' src='ball.png'>");
			}
		});
		
		$("#fases .btn").removeClass("active");			// Remove a class "active" dos botões de alteração de fase
		$("#fases .btn").eq([i]).addClass('active');	// Adiciona a class "active" ao botão de fase anterior
		
	});
	
	// Função Botão NEXT
	function next(){
		// Next Jogadores
		i = i + 1; 
		i = i % posicoes.length; 
		
		// Next Bola
		b = b + 1; 
		b = b % bola.length; 
		
		return  [
		 posicoes,
		 bola
		];
	}
	
	// Função Botão PREVIOUS
	function prev(){
		// Next Jogadores
		if (i == 0) { 
			i = posicoes.length; 
		}
		i = i - 1; 
		
		// Next Bola
		if (b == 0) { 
			b = bola.length; 
		}
		b = b - 1;
		
		return  [
		 posicoes,
		 bola
		];
	}
	
	function arrayString(arr){
		return arr.toString();
	}
	
	function stringArray(str){
		return str.split(",");
	}
	
		$(document).on('click', '#fases button', function(){ 		// Clicar nos botões das fases da jogada
			$(".btn").removeClass("active"); 						// Remove a class "active"
			$(this).addClass("active"); 							// Adiciona a class "active" ao botão clicado
			i = $(this).find("input").attr("id"); 					// i = id do input escondido dentro do botão da fase clicada
			b = i;
			splitPosicoes = stringArray(posicoes[i]); 				// Retira a ',' dos dados inseridos no array dos players[] e guarda no array splitPosicoes[]
			 
			$('#tableJogadores tr th').empty();
				
			$('#tableJogadores tr th').each(function(){	// Precorre este ciclo dependendo de quantas <th> existirem na tabela com id = tableJogadores
				for (var x = 0; x < splitPosicoes.length; x++)
				{
					if($(this).attr("id") == splitPosicoes[x]) {	// Se o ID de uma <th> existir no array splitPosicoes(Guarda a posição dos jogadores)...
					$('#scripts').append(splitPosicoes[x]);
						$.ajax({
							type: "POST",
							url: "up.php",
							data: {
								'idPos' : splitPosicoes[x],
								'id' : idClick,
								'pos' : i,
								'nomes' : 'jogador'
							},
							context: this,
							success: function (data) {	
								$(this).prepend(data);
							}
						});
					}
				}
				
				if($(this).attr("id") == bola[i] && bola[i] != undefined)
				{
					$(this).append("<img width='30px' height='30px' src='ball.png'>");
				}
			});
				
		});
	</script>
  </body>
</html>