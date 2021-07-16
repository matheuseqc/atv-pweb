
<?php
	$servername = "localhost";
	$dbname = "atv2_pweb2";
	$username = "root";
	$password = "";

	


	$conexao = new mysqli($servername, $username, $password, $dbname);

	
	if($conexao->connect_error){
		die("Erro conexão".$conexao-connect_error);
	} else{
		echo "CONEXÃO REALIZADA !!!!!!"; 
		echo '<br>';
		echo '<a href="index.html">
			  CADASTRAR MAIS USUÁRIOS
			  </a>
		';
		echo '<br>';
		echo '<a href="login.html">
			  LOGIN USUÁRIO
			  </a>
		';
		
		$nome = $_REQUEST["nome"];
    	$nomeusu = $_REQUEST["nomeusu"];
    	$email = $_REQUEST["email"];
    	$senha = $_REQUEST["senha"];
    	$senhaCrip = password_hash($senha, PASSWORD_DEFAULT);
    	$sql = "INSERT INTO login (nome,nomeusu,email,senha) VALUES('$nome','$nomeusu','$email',aes_encrypt('$senha', 'matheus'))";


    	if($conexao->query($sql)){ 
    		echo '<br>';
    	} else {
    		echo $conexao->error;
    	}
		$sql = "SELECT nome, nomeusu from login";
		$result = $conexao->query($sql);
		if ($result->num_rows > 0){
			echo 'ESSES SÃO OS USUÁRIOS CADASTRADOS:';
			echo '<br>';
			while($linha = $result->fetch_assoc()){
				echo '<hr>';
				echo 'NOME:','<br>',$linha['nome']; 
				echo '<br>';
				echo 'NOME USUÁRIO:','<br>',$linha['nomeusu'];
				echo '<br>';
				echo '<hr>';
			}
		} else{
			echo "SEM USUÁRIOS CADASTRADOS";
		}
		

	}
?>
