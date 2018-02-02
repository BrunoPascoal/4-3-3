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
					  <div class="card-header">
						<ul class="nav nav-tabs card-header-tabs" id="menu">
						  <li class="nav-item">
							<a class="nav-link active" href="#" id="editorMenu">Editor</a>
						  </li>
						  <li class="nav-item" style="display:none">
							<a class="nav-link" href="#bolaParada" id="bolaParadaMenu">Criar Situação</a>
						  </li>
						</ul>
					  </div>
					  
					  <div class="card-body" id="comeco">
						<h4 class="card-title">Informações</h4>
						<hr />
						<div class="row">
								<p class="card-text">
							<div class="col-md-12">
									<div class="dropdown">
									  <button class="btn btn-primary btn-lg btn-block dropdown-toggle teamsBT" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Clube
									  </button>
										  <div class="dropdown-menu dropdown-menu-center" aria-labelledby="dropdownMenuButton" id="teams">
											<a class="dropdown-item" href="#" id="t3">Benfica <img src="clubes/Benfica.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t8">Porto <img src="clubes/Porto.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t5">Sporting <img src="clubes/Sporting.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t5">Braga <img src="clubes/Braga.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t10">Marítimo <img src="clubes/Marítimo.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t14">Rio Ave <img src="clubes/Rio Ave.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t2">Belenenses <img src="clubes/Belenenses.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t18">Vitória SC <img src="clubes/Vitória SC.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t4">Boavista <img src="clubes/Boavista.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t16">Tondela <img src="clubes/Tondela.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t13">Portimonense <img src="clubes/Portimonense.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t12">P.Ferreira <img src="clubes/P.Ferreira.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t9">Feirense <img src="clubes/Feirense.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t6">Chaves <img src="clubes/Chaves.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t18">V.Setúbal <img src="clubes/V.Setúbal.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t1">D.Aves <img src="clubes/D.Aves.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t11">Moreirense <img src="clubes/Moreirense.png" style="width:25px;"></a>
											<a class="dropdown-item" href="#" id="t7">Estoril <img src="clubes/Estoril.png" style="width:25px;"></a>
										  </div>
									</div>
								<div id="imagemEquipa"> </div>
							</div>
								</p>
						</div>
						<br>

					  </div>
					  
					  <div class="card-body" id="bolaParada">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
								<h4>Criar Situação:</h4>
									<select id="situacaoBolaParada">
										<option value="">Selecionar</option>
										<option disabled="disabled">───────────</option>
										<option id="situacaoLivre" value="Situação Livre">Situação Livre</option> 
										<option disabled="disabled">───────────</option>
										<option id="livre" value="Livre">Livre</option>
										<option id="arremeso" value="Arremeso">Arremeso Lateral</option>
										<option id="canto" value="Canto">Canto</option>
										<option id="penalty" value="Penalty">Penalty</option>
										<option id="pontapeBaliza" value="Pontapé de Baliza">Pontapé de Baliza</option> 
										
										<!-- 
											BUG DE ADICIONAR VÁRIOS INPUTS
										-->
										
									</select>
									<p id="selecionarSituacao"><font color="red"><b>Selecione uma situação</b></font></p>
									<br /><br />
									<input id="nomeBP" type="text" placeholder="nome" class="form-control form-control-sm">
								</div>
								<div class="col-md-1">
									<div style="border-left:1px solid #000;height:100%"></div>
								</div>
								<div class="col-md-5" id="fasesBolaParada">
									<a class="btn btn-primary btn-block default" id="fase1" href="#fase1">1</a>
									<a class="btn btn-warning btn-block add-fase default" href="#">+</a>
								</div>
							</div>
						</div>
						<br>
						<button class="btn btn-primary btn-lg btn-block" type="submit" id="terminar"><i class="fa fa-cogs"></i> Terminar Simulação</button>
					  </div>
					</div>
				</div>
				<div class="col-md-7" style="padding:10px;">
				
				  <table id="tableJogadores" width="720px" height="510px" class="tableBckImg">
						<tr> <!-- a -->
							<th>&nbsp;&nbsp;</th>
							<th class="arremeso" id="a1"></th>
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
							<th class="defesa campo" id="b1"></th>
							<th class="defesa livre campo" id="b2"></th> 
							<th class="defesa livre campo" id="b3"></th>
							<th class="medio livre campo" id="b4"></th>
							<th class="medio livre campo" id="b5"></th> 
							<th class="medio livre campo" id="b6"></th>
							<th class="medio livre campo" id="b7"></th>
							<th class="avancado livre campo" id="b8"></th> 
							<th class="avancado livre campo" id="b9"></th>
							<th class="avancado" id="b10"></th>
						</tr>
						<tr> <!-- c -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa campo campo" id="c1"></th>
							<th class="defesa livre campo" id="c2"></th> 
							<th class="defesa livre campo" id="c3"></th>
							<th class="medio livre campo" id="c4"></th>
							<th class="medio livre campo" id="c5"></th> 
							<th class="medio livre campo" id="c6"></th>
							<th class="medio livre campo" id="c7"></th>
							<th class="avancado livre campo" id="c8"></th> 
							<th class="avancado livre campo" id="c9"></th>
							<th class="avancado" id="c10"></th>
						</tr>
						<tr> <!-- d -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa campo" id="d1"></th>
							<th class="defesa livre campo" id="d2"></th> 
							<th class="defesa livre campo" id="d3"></th>
							<th class="medio livre campo" id="d4"></th>
							<th class="medio livre campo" id="d5"></th> 
							<th class="medio livre campo" id="d6"></th>
							<th class="medio livre campo" id="d7"></th>
							<th class="avancado livre campo" id="d8"></th> 
							<th class="avancado livre campo" id="d9"></th>
							<th class="avancado" id="d10"></th>
						</tr>
						<tr> <!-- e -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa pontapeBaliza campo" id="e1"></th>
							<th class="defesa livre campo" id="e2"></th> 
							<th class="defesa livre campo" id="e3"></th>
							<th class="medio livre campo" id="e4"></th>
							<th class="medio livre campo" id="e5"></th> 
							<th class="medio livre campo" id="e6"></th>
							<th class="medio livre campo" id="e7"></th>
							<th class="avancado livre campo campo" id="e8"></th> 
							<th class="avancado livre penalty campo" id="e9"></th>
							<th class="avancado" id="e10"></th>
						</tr>
						<tr> <!-- f -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa campo" id="f1"></th>
							<th class="defesa livre campo" id="f2"></th> 
							<th class="defesa livre campo" id="f3"></th>
							<th class="medio livre campo" id="f4"></th>
							<th class="medio livre campo" id="f5"></th> 
							<th class="medio livre campo" id="f6"></th>
							<th class="medio livre campo" id="f7"></th>
							<th class="avancado livre campo" id="f8"></th> 
							<th class="avancado livre campo" id="f9"></th>
							<th class="avancado" id="f10"></th>
						</tr>
						<tr> <!-- g -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa campo" id="g1"></th>
							<th class="defesa livre campo" id="g2"></th> 
							<th class="defesa livre campo" id="g3"></th>
							<th class="medio livre campo" id="g4"></th>
							<th class="medio livre campo" id="g5"></th> 
							<th class="medio livre campo" id="g6"></th>
							<th class="medio livre campo" id="g7"></th>
							<th class="avancado livre campo" id="g8"></th> 
							<th class="avancado livre campo" id="g9"></th>
							<th class="avancado" id="g10"></th>
						</tr>
						<tr> <!-- h -->
							<th>&nbsp;&nbsp;</th>
							<th class="defesa campo" id="h1"></th>
							<th class="defesa livre campo" id="h2"></th> 
							<th class="defesa livre campo" id="h3"></th>
							<th class="medio livre campo" id="h4"></th>
							<th class="medio livre campo" id="h5"></th> 
							<th class="medio livre campo" id="h6"></th>
							<th class="medio livre campo" id="h7"></th>
							<th class="avancado livre campo" id="h8"></th> 
							<th class="avancado livre campo" id="h9"></th>
							<th class="avancado" id="h10"></th>
						</tr>
						<tr> <!-- i -->
							<th>&nbsp;&nbsp;</th>
							<th class="arremeso" id="i1"></th>
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
					<br>
				  <div style="height: auto; max-height: 250px; width:100%; padding:10px; overflow-x: hidden; display:inline-block; border:2px solid #ECF0F1; margin:0;" id="infoEquipa">
				  <h3 style="display: inline-block; color: green">Clube:</h3> <div style="display: inline-block;" id="infosEquipa">  </div><br>
				  <hr>
				  <div id="jogadores" style="display:none">
				  <div class="container">
					  <div class="row">
							<div class="col">
								<div class="card">
									<h4 class="card-title">&nbsp;&nbsp;Bola </h4>
									<div class="card-body" id="bolaJogadas">
									</div>
								</div>
							</div>
							<div class="col">
								<div class="card">
									<h4 class="card-title">&nbsp;&nbsp;Guarda Redes </h4>
									<div class="card-body" id="gr">
									</div>
								</div>
							</div>
					  </div>
				  </div>
					<br>
					<div class="card">
						<h4 class="card-title">&nbsp;&nbsp;Avançados </h4>
						<div class="card-body" id="avancados">
						</div>
					</div>
					<br>
					<div class="card">
						<h4 class="card-title">&nbsp;&nbsp;Médios </h4>					
						<div class="card-body" id="medios">
						</div>
					</div>
					<br>
					<div class="card"> 
						<h4 class="card-title">&nbsp;&nbsp;Defesas </h4>
						<div class="card-body" id="defesas">
						</div>
					</div>
					<br>

				  </div>
				  </div>
					<br>
					<div id="avisos"></div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	<script> //ADIÇÕES
	$(document).ready(function(){
		$("#comeco").show();
		$("#bolaParada").hide();
		$("#jogo").hide();
		
		$("#editorMenu").click(function(){
			if(!$(this).hasClass("active")) {
				resetPos();
				$("#situacaoBolaParada").val('');
				$("#avisos").empty();
				$("#comeco").show();
				$('#jogadores').hide();
				$("#bolaParada").hide();
				$("#jogo").hide();
				$(this).addClass( "active" );
				$("#bolaParadaMenu").removeClass( "active" );
				
				posicoesBP = [];
				jogadoresBP = [];
				posicoesBolaBP = [];
				
				$('#fasesBolaParada').find('*').not('.default').remove();
			}
		});
		
		$("#bolaParadaMenu").click(function(){
			if(!$(this).hasClass("active")) {
				resetPos();
				$("#situacaoBolaParada").val('');
				$("#avisos").empty();
				$("#bolaParada").show();
				$('#jogadores').hide();
				$('#fasesBolaParada').hide();
				$("#nomeBP").hide();
				$("#comeco").hide();
				$("#jogo").hide();
				$(this).addClass( "active" );
				$("#editorMenu").removeClass( "active" );
			}
		});
		
		$('#situacaoBolaParada').change(function(){ 
			$("#tableJogadores tr th").removeClass("highlight");
			resetPos();
			$("#selecionarSituacao").hide();
			$("#avisos").empty();
			$("#nomeBP").show();
			$('#jogadores').show();
			if(!$(this).val())
			{
				$("#selecionarSituacao").show();
				$("#nomeBP").hide();
				$('#jogadores').hide();
				$('#fasesBolaParada').hide();
			} else {
				$('#fasesBolaParada').show();
				$('#fasesBolaParada #fase1')[0].click();
			}
			$("#tableJogadores tr th").empty();
			posicoesBP = [];
			jogadoresBP = [];
			posicoesBolaBP = [];
			$('#fasesBolaParada').find('*').not('.default').remove();
		});
		
	});
	</script>
	
	<script> //JOGADORES EM CAMPO
	<!-- <ADICIONAR SITUAÇÕES> -->
	
	var posicoesBP = [];		//Fases (Bola Parada)
	var jogadoresBP = [];		//idJogadores (Bola Parada)
	var posicoesBolaBP = [];	//Fases Bola (Bola Parada)
	
	var i = 0;		
	var x = 0; 	

	var id;
	var fase;
		
	$(document).ready(function(){
	$('#navbarTogglerDemo02').find('*').removeClass('active');
	$('#editor').addClass('active');
	
	$("#fasesBolaParada").on("click", "a", function () {
		if($(this).hasClass("add-fase") || $(this).hasClass("current")) {	
			//Do nothing
		} else {
			$("#fasesBolaParada a").removeClass("current");
			$(this).addClass("current");
			id = $(this).attr('href');
			fase = id.substr(id.length - 1);
			i = fase - 1;
			if(posicoesBP[i] != null)
			{
				var arrPlayers = stringArray(jogadoresBP[i]);
				var arrPosicoes = stringArray(posicoesBP[i]);
				var arrBola = posicoesBolaBP[i];
				
				resetPos();
				
				for(var j = 0; j < arrPlayers.length; j++)
				{
					if(arrPlayers[j] != "" && arrPosicoes[j] != "")
					{
						var inside = $("#jogadores #" + arrPlayers[j]).html();
						$("#" + arrPosicoes[j]).empty();
						$("#" + arrPosicoes[j]).append("<input type='hidden' value='" + arrPlayers[j] + "' /><a id='F" + arrPlayers[j] + "' class='idPlayer'>" + inside + "</a>"); //F no id para representar que se encontra em campo / field
						$("#tableJogadores tr th").removeClass("highlight");
						
						$("#jogadores #" + arrPlayers[j]).empty();
					}
				}
				
				if(arrBola != "")
				{
					var inside = $("#jogadores #bola").html();
					$("#" + arrBola).append("<input type='hidden' value='bola' /><a id='Fbola' class='idBola'>" + inside + "</a>"); //F no id para representar que se encontra em campo / field
					$("#tableJogadores tr th").removeClass("highlight");
					
					$("#jogadores #bola").empty();
				}
			}
		}
	})
	
	.on("click", "span", function () {
        var anchor = $(this).siblings('a');
        $(anchor.attr('href')).remove();
        $(this).parent().remove();
				
		id = $(this).parent('a').attr('href');
		fase = id.substr(id.length - 1);

		delete posicoesBP[(fase-1)];
		delete jogadoresBP[(fase-1)];
		delete posicoesBolaBP[(fase-1)];
		
		if($(this).parent('a').hasClass('current')) {
			$('#fasesBolaParada #fase' + (fase-1))[0].click();
		} else {
			$('#fasesBolaParada #fase1')[0].click();
		}
				
		return false;
    });
	
	$(document).on('click', '.add-fase', function (e) {
		e.preventDefault();
		if(posicoesBP[i] != null)
		{
			var id = $(this).prev().text();
			id = id.charAt(0);
			id++;
			if (id <= 10)
			{
				var tabId = 'fase' + id;
				$(this).closest('a').before('<a href="#' + tabId + '" id="'+ tabId + '" class="btn btn-primary btn-block">' + id + ' <span style="float:right"> X </span></a>');
				$('#fasesBolaParada a:nth-last-child(2)')[0].click();
				
				if(posicoesBP[i-1] != null)
				{
					posicoesBP[i] = posicoesBP[i-1];
					jogadoresBP[i] = jogadoresBP[i-1];
					posicoesBolaBP[i] = posicoesBolaBP[i-1];
					
					arrPlayers = stringArray(jogadoresBP[i]);
					arrPosicoes = stringArray(posicoesBP[i]);
					arrBola = posicoesBolaBP[i];
					
					resetPos();
					
					for(var j = 0; j < arrPlayers.length; j++)
					{
						if(arrPlayers[j] != "" && arrPosicoes[j] != "")
						{
							var inside = $("#jogadores #" + arrPlayers[j]).html();
							$("#" + arrPosicoes[j]).empty();
							$("#" + arrPosicoes[j]).append("<input type='hidden' value='" + arrPlayers[j] + "' /><a id=F" + arrPlayers[j] + " class='idPlayer'>" + inside + "</a>"); //F no id para representar que se encontra em campo / field
 							$("#tableJogadores tr th").removeClass("highlight");
							
							$("#jogadores #" + arrPlayers[j]).empty();
						}
					}
					
					if(arrBola != "")
					{
						var inside = $("#jogadores #bola").html();
						$("#" + arrBola).append("<input type='hidden' value='bola' /><a id='Fbola' class='idBola'>" + inside + "</a>"); //F no id para representar que se encontra em campo / field
						$("#tableJogadores tr th").removeClass("highlight");
						
						$("#jogadores #bola").empty();
					}
				}
			}
		} else {
			alert("Preencha primeiro a fase anterior!");
		}
	});
	});
	<!-- </ADICIONAR SITUAÇÕES> -->	
	var player = 0;
	var playerF = 0;
	$(document).ready(function(){
		$(document).on("click", "#jogadores #avancados a", function(){
			if($("#situacaoBolaParada").val() == "Pontapé de Baliza" && $('#tableJogadores').find('a').not('#Fbola').length == 0)
			{
				alert("Esta situação só pode ser feita utilizando um Guarda Redes");
			} else {
				player = $(this).attr("id");
				playerF = $(this).attr("id");
							
				if($("#bolaParada").is(":visible"))
				{
					if($("#tableJogadores th").find('img').length > 0 || $("#situacaoBolaParada").val() == "Situação Livre")
					{
						$("#tableJogadores tr th").removeClass("highlight");
						$(".campo").addClass('highlight');
					} else {
						highlightSituacao();
					}
				} else {
					$('.avancado').addClass('highlight');
				}
			}
		});
		
		$(document).on("click", "#jogadores #medios a", function(){
			if($("#situacaoBolaParada").val() == "Pontapé de Baliza" && $('#tableJogadores').find('a').not('#Fbola').length == 0)
			{
				alert("Esta situação só pode ser feita utilizando um Guarda Redes");
			} else {
				player = $(this).attr("id");
				playerF = $(this).attr("id");
				
				if($("#bolaParada").is(":visible"))
				{
					if($("#tableJogadores th").find('img').length > 0 || $("#situacaoBolaParada").val() == "Situação Livre")
					{
						$("#tableJogadores tr th").removeClass("highlight");
						$(".campo").addClass('highlight');
					} else {
						highlightSituacao();
					}
				} else {
					$('.medio').addClass('highlight');
				}
			}
		});
		
		$(document).on("click", "#jogadores #defesas a", function(){
			if($("#situacaoBolaParada").val() == "Pontapé de Baliza" && $('#tableJogadores').find('a').not('#Fbola').length == 0)
			{
				alert("Esta situação só pode ser feita utilizando um Guarda Redes");
			} else {
				player = $(this).attr("id");
				playerF = $(this).attr("id");
				
				if($("#bolaParada").is(":visible"))
				{
					if($("#tableJogadores th").find('img').length > 0 || $("#situacaoBolaParada").val() == "Situação Livre")
					{
						$("#tableJogadores tr th").removeClass("highlight");
						$(".campo").addClass('highlight');
					} else {
						highlightSituacao();
					}
				} else {
					$('.defesa').addClass('highlight');
				}
			}
		});
		
		$(document).on("click", "#jogadores #gr a", function(){
			player = $(this).attr("id");
			playerF = $(this).attr("id");
			
			if($("#bolaParada").is(":visible"))
			{
				if($("#tableJogadores th").find('img').length > 0 || $("#situacaoBolaParada").val() == "Situação Livre")
				{
					$("#tableJogadores tr th").removeClass("highlight");
					$(".campo").addClass('highlight');
				} else {
					highlightSituacao();
				}
			} else {
				$('.gr').addClass('highlight');
			}
		});
		
		$(document).on("click", "#jogadores #bolaJogadas a", function(){
			player = $(this).attr("id");
			playerF = $(this).attr("id");
			
			if($("#bolaParada").is(":visible"))
			{
				$("#tableJogadores tr th").removeClass("highlight");
				$(".campo").addClass('highlight');
			}
		});
		
		$(document).on("click", "#tableJogadores th", function(e){
			if(player == 0 && $(this).find('img').length > 0)
				{					
					playerF = $('#' + $(this).attr('id') + ' input[type=hidden]').val();
					if($(this).find('a').length == 2 || playerF == "bola")
					{
						if (confirm('Deseja tirar a bola de campo?')) {
							$("input[value=bola]").remove();
							$("#tableJogadores #Fbola").appendTo("#jogadores #bolaJogadas #bola");
							$("#jogadores #Fbola").contents().unwrap();
							$("#tableJogadores #Fbola").empty();
							if(i > -1)
							{
								var splitBall = stringArray(posicoesBolaBP[i]); 
								
								for(var h = splitBall.length - 1; h >= 0; h--) {
									if(splitBall[h] == $(this).attr('id')) {
										splitBall.splice(h, 1);
										posicoesBolaBP[i] = arrayString(splitBall);
									}
								}
							}
							playerF = 0;
							
						} else {
							player = 0;
							playerF = 0;
						}
					} else {
						if (confirm('Deseja tirar este jogador para o banco?')) {
							$("input[value=" + playerF + "]").remove();
							$("#jogadores #" + playerF).append($(this).html());
							$("#jogadores #F" + playerF).contents().unwrap();
							$(this).empty();
							if(i > -1)
							{
								var splitPlayers = stringArray(posicoesBP[i]); 
								for(var h = splitPlayers.length - 1; h >= 0; h--) {
									if(splitPlayers[h] == $(this).attr('id')) {
									   splitPlayers.splice(h, 1);
									   posicoesBP[i] = arrayString(splitPlayers);
									}
								}
								
								splitPlayers = stringArray(jogadoresBP[i]);
								for(h = splitPlayers.length - 1; h >= 0; h--) {
									if(splitPlayers[h] == playerF) {
										splitPlayers.splice(h, 1);
										jogadoresBP[i] = arrayString(splitPlayers);
									}
								}
							}
							playerF = 0;
							
						} else {
							player = 0;
							playerF = 0;
						}
					}
					
				} else {
					if($(this).find('img').length > 0 && $(this).hasClass('highlight') && $(this).find('a').attr('id') != "Fbola" && playerF != "bola")
					{
						alert("Já está inserido um jogador nesta posição");
					} else {
						if(player != 0 && $(this).hasClass('highlight'))
						{
							if($('#tableJogadores').find('a').not('#Fbola').length != 11 || player == 'bola')	
							{
								if($("#bolaParada").is(":visible"))
								{
									if(posicoesBP[i] == null)
										posicoesBP[i] = "";
									
									if(jogadoresBP[i] == null)
										jogadoresBP[i] = "";
									
									if(posicoesBolaBP[i] == null)
										posicoesBolaBP[i] = "";
									
									if(player != "bola")
									{
										posicoesBP[i] = posicoesBP[i] + "," + $(this).attr('id');
										jogadoresBP[i] = jogadoresBP[i] + "," + player;
									} else {
										posicoesBolaBP[i] = $(this).attr('id');
									}
								}
								
								var inside = $("#jogadores #" + player).html();
								
								if($(this).find('a').attr('id') == "Fbola")
									$(this).prepend("<input type='hidden' value='" + playerF + "' /><a id=F" + player + " class='idPlayer'>" + inside + "</a>"); //F no id para representar que se encontra em campo / field
								else
									$(this).append("<input type='hidden' value='" + playerF + "' /><a id=F" + player + " class='idPlayer'>" + inside + "</a>");	 //F no id para representar que se encontra em campo / field
								
								$("#tableJogadores tr th").removeClass("highlight");
								
								$("#jogadores #" + playerF).empty();
								player = 0;			
							} else {
								$("#tableJogadores tr th").removeClass("highlight");
								alert("Uma equipa só pode ter 11 jogadores");
								player = 0;
								playerF = 0;
							}
						}						
					}
				}
			});
	});
	</script>
	
	<script> //PÁGINA editor.php INSERIR IMAGEM EQUIPA
		$(document).on("click", "#teams a", function(e){
			var idClick = $(this).attr('id');
			idClick = idClick.replace('t',' ');
			
			var thisText = $(this).text();
			var thisClass = $(this).attr('class');
			var sliced = thisText.slice(0,-1)
			
			$('.teamsBT').text(thisText);
			$('#forms').prop("disabled", false);
			$('.nav-item').removeAttr( 'style' );
			var dataString = 'id=' + idClick + '&jogadores=' + '1';
			
			$.ajax({
				type: "POST",
				url: "up.php",
				data: dataString,
				success: function (data) {
					$('#avancados').empty();
					$('#defesas').empty();
					$('#medios').empty();
					$('#gr').empty();
					$('#infosEquipa').empty();
					$('#bolaJogadas').empty();
					$('#infoEquipa').append(data);
					$('#infosEquipa').append('&nbsp;&nbsp;<h4 style="display: inline-block;">' + sliced + '</h4>&nbsp;&nbsp;<img src="clubes/' + sliced + '.png" style="width:25px;">');
					$('#imagemEquipa').empty();
					$('#imagemEquipa').append('<br><br><input type="hidden" value="' + idClick + '"><img src="clubes/grandes/' + sliced + '.png" style="width:250px;">');
			}
		});
	});
		
		$(document).on("click", "#forms a", function(){
			var idClick = $(this).attr('id');
			var thisText = $(this).text();
			
			
			$('#forms').text(thisText);
		});
	</script>
  
	<script> //FUNÇÕES
	function arrayString(arr)
	{
		return arr.toString();
	}
	
	function stringArray(str)
	{
		return str.split(",");
	}
	
	function resetPos() //Resetar posição jogadores
	{
		$('#tableJogadores th').each(function() {
			if($(this).find('img').length > 0)
			{
				var players = $('#' + $(this).attr('id')).children('input[type=hidden]:first').val();
				
				if($(this).find('img').length == 2)
				{
					$("input[value=bola]").remove();
					$("#tableJogadores #Fbola").appendTo("#jogadores #bolaJogadas #bola");
					$("#jogadores #Fbola").contents().unwrap();
					$("#tableJogadores #Fbola").empty();
					
					$("input[value=" + players + "]").remove();
					$("#jogadores #" + players).append($(this).html());
					$("#infoEquipa #F" + players).contents().unwrap();
					
					$(this).empty();
					
					players = 0;
				} else {
					$("#jogadores #" + players).append($(this).html());
					$("#infoEquipa #F" + players).contents().unwrap();
					$(this).empty();
					players = 0;
				}
			}
		});
	}
	
	function highlightSituacao()
	{
		if($("#situacaoBolaParada").val() == "Livre")
		{
			$("#tableJogadores tr th").removeClass("highlight");
			$('.livre').addClass('highlight');
		}
		
		if($("#situacaoBolaParada").val() == "Arremeso")
		{
			$("#tableJogadores tr th").removeClass("highlight");
			$('.arremeso').addClass('highlight');
		} 
		
		if($("#situacaoBolaParada").val() == "Canto")
		{
			$("#tableJogadores tr th").removeClass("highlight");
			$('.canto').addClass('highlight');
		} 
		
		if($("#situacaoBolaParada").val() == "Penalty")
		{
			$("#tableJogadores tr th").removeClass("highlight");
			$('.penalty').addClass('highlight');
		} 
		
		if($("#situacaoBolaParada").val() == "Pontapé de Baliza")
		{
			$("#tableJogadores tr th").removeClass("highlight");
			$('.pontapeBaliza').addClass('highlight');
		} 
	}
	</script>
  
	<script> //AJAX - GUARDAR NA BD
		$(document).on("click", "#terminar", function(e){
			if($('#fasesBolaParada').find('*').not('.add-fase').length < 3)
			{
				alert("Tem de ter no minimo 3 fases criadas");
			} else {
				var session_id = '<?php echo $_SESSION['id'];?>';
						
				var situacao = $("#situacaoBolaParada").val();
				var nome = $("#nomeBP").val();
				
				if(nome == "")
					nome = "Sem Nome";
				
				$.ajax({
					type: "POST",
					url: "situacoes.php",
					data: {
						'nome' : nome,
						'qntFases' : $("#fasesBolaParada a").length - 1,
						'situacao' : situacao,
						'id_clube' : $('#imagemEquipa input[type=hidden]').val(),
						'id_utilizador' : session_id,
						'action' : 'add'
					},
					success: function (data) {
						
					}
				});
				
				var bola = 0;
				
				for(var i = 0; i < posicoesBP.length; i++)
				{
					var jog = stringArray(jogadoresBP[i]);
					var pos = stringArray(posicoesBP[i]);
					var bola = 0;
					
					for(var x = 1; x < jog.length; x++)
					{
						$.ajax({
							type: "POST",
							url: "fases.php",
							data: {
								'numFase' : i,
								'id_jogador' : jog[x],
								'id_posicao' : pos[x],
								'bola' : bola,
								'fase' : 'add'
							},
							success: function (data) {
								
							}
						});
					}
					
					if(posicoesBolaBP[i] != "")
					{
							bola = 1;
							
							$.ajax({
							type: "POST",
							url: "fases.php",
							data: {
								'numFase' : i,
								'id_jogador' : "516",
								'id_posicao' : posicoesBolaBP[i],
								'bola' : bola,
								'fase' : 'add'
							},
							success: function (data) {
								
							}
						});
					}
						
				}
				$("#avisos").append('<br><div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Sucesso!</strong> Simulação enviada com sucesso.</div>');
				$('#fasesBolaParada').find('*').not('.default').remove();
				resetPos();
				posicoesBP = [];
				jogadoresBP = [];
				posicoesBolaBP = [];
				$("#situacaoBolaParada").val('');
				$('#fasesBolaParada #fase1')[0].click();
				$("#nomeBP").val('');
			}
		});
	</script>
  </body>
</html>