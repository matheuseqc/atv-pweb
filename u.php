<?php
include('conexao-bd.php');

$busca =  mysqli_real_escape_string($conexao, $_POST["busca"]);
$query = "select * from usuario where usuario = '$busca'";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
if ($result->num_rows > 0 ){
    echo 'Usúario especÍfico:';
    echo '<br>';
    while($dado = $con->fetch_array()){
        echo 'Nome:', $dado['nome'];

    }
}

        

//if ($result->num_rows > 0 and $busca = $query){
    //echo 'Usúario especÍfico:';
    //echo '<br>';
    //while($linha = $result->fetch_assoc()){
        //echo '<hr>';
        //echo 'Nome: ',$linha['nome']; 
        //echo '<br>';
        //echo 'Usúario: ',$linha['usuario'];
        //echo '<br>';
        //echo '<hr>';
    //}  
//}


?>