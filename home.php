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
  <br>
	<center>
	<img src="logo.png" width="150px" height="150px"> <h1> 4-3-3 </h1><hr>
	<div class="container">
		
		<center>
		
		<p>Este projeto consiste na simulação de situações táticas num jogo de futebol em que o utilizador terá de escolher uma equipa, e desenvolver uma tática. </p>
						   
		<p>Na aba <b>"editor"</b> será onde o utilizador poderá escolher a equipa da primeira divisão portuguesa que deseja, e começar a planear uma situação.
		Na criação de uma situação, o utilizador apenas tem de posicionar os jogadores em campo conforme a sua vontade. Quando terminado, pressiona o botão 
		<b>"Terminar Situação"</b> e a situação será salva na conta.</p>
				
		<p>Na aba <b>"player"</b> será onde o utilizador poderá visualizar as situações já criadas por si.</p>
		<br><br>
	<h1 align="center"> Autores </h1>
	<hr>
		<div class="row">
			<div class="col-sm-6" >
				<center><h1>João Pascoal</h1>
				<img src="joao.jpg" style="width:250px;">
					<br>
					<br>
						<h4> Idade: 18 
								<br>
							Localidade: Barreiro 
							<h4>

			</div>
			<div class="col-sm-6">
				<center><h1>Bruno Santos</h1>
				<img src="bruno.jpg" style="width:270px;">
					<br>
					<br>
						<h4> Idade: 19 
							<br>
							Localidade: Quinta Do Conde
						<h4>
			</div>
		</div>
	</div>
	
  </body>
</html>