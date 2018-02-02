<?php

class DataAccess{
    private $connection;	
    
    function connect(){
        $bd= "sportin5_tpsib17p1";
        $user = "sportin5_tpsib1";
        $pwd = "&ef&MIqh.DU^";
        $server = "localhost";
		
        $this->connection = mysqli_connect($server, $user, $pwd, $bd);
        
        //verificar se a conexใo estแ bem aberta        
        if( mysqli_select_db($this->connection, $bd) == false){
            //erro
            die("nใo conseguiu ligar-se เ base de dados".mysqli_error($this->connection));            
			
        }else{
			
            mysqli_query($this->connection, "set names 'utf8'");
            mysqli_query($this->connection, "set character_set_connection=utf8");
            mysqli_query($this->connection, "set character_set_client=utf8");
            mysqli_query($this->connection, "set character_set_results=utf8");
        }        
    }
    
    function execute($query){
        $res = mysqli_query($this->connection, $query);
        if(!$res){
            die("Comando invรกlido".mysqli_error($this->connection));
        }else
            return $res;
    }
    
    function disconnect(){
		mysqli_close($this->connection);
    }

	
	function getPlayers($id){
		$query = "select * from jogadores where clube_id = $id";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	
	function getGuardaRedes($id){
		$query = "select * from jogadores where clube_id = $id && posicao_id = 1";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	
	function registar($nome, $email, $password)
	{
		$query = "SELECT * FROM utilizadores WHERE email = '$email'";
		$this->connect();
		$res = $this->execute($query);
		$row = mysqli_fetch_object($res);
		
		if ($email != isset($row->email)){
			$query = "INSERT INTO utilizadores (nome, email, password) VALUES ('$nome', '$email', '$password')";
			$this->connect();
			$this->execute($query);
			return 1;
		} else {
			return 0;
		}
		
		$this->disconnect();
	}
	
	function login($email, $password)
	{
		$query = "SELECT * FROM utilizadores WHERE email = '$email' && password = '$password'";
		$this->connect();
		$res = $this->execute($query);
		$row = mysqli_fetch_object($res);
		
		if (!empty($row)){
			return 1;
		} else {
			return 0;
		}
		
		$this->disconnect();
	}
	
	function getUserId($email){
		$query = "select * from utilizadores where email = '$email'";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	
	function inserirFases($numFase, $id_jogador, $id_posicao, $bola)
	{
		$query = "INSERT INTO fases (numFase, id_jogador, id_posicaoTabela, id_situacao, bola) VALUES ($numFase, '$id_jogador', '$id_posicao', (SELECT MAX(id) FROM situacoes), $bola)";
		$this->connect();
        $this->execute($query);
		$this->disconnect();
	}
	
	function inserirSituacoes($nome, $qntFases, $situacao, $id_clube, $id_utilizador)
	{
		$query = "INSERT INTO situacoes (nome, qntFases, situacao, id_clube, id_utilizador) VALUES ('$nome', $qntFases, '$situacao', $id_clube, $id_utilizador)";
		$this->connect();
        $this->execute($query);
		$this->disconnect();
	}
	
	function getSituacoes($id)
	{
		$query = "select * from situacoes where id_utilizador = $id";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	
	function getSituacaoID($id)
	{
		$query = "select * from situacoes where id = $id";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	
	
	function getFasesID($id)
	{
		$query = "select * from fases where id_situacao = $id";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	
	function getJogadores()
	{
		$query = "select * from jogadores";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	
	function getNomeJogador($id)
	{
		$query = "select * from jogadores where id = $id";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	
	function getIdJogadorFases($id_situacao, $id_posicaoTabela, $numFase)
	{
		$query = "select * from fases where id_situacao = $id_situacao and id_posicaoTabela = '$id_posicaoTabela' and numFase = $numFase and bola = 0";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	
	function getClubeID($id)
	{
		$query = "select * from clubes where id = $id";
		$this->connect();
        $res = $this->execute($query);
		$this->disconnect();
		return $res;
	}
	
	}
?>