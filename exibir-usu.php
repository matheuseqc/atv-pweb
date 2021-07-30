
<html>

    <body>
        <form>
            PROCURAR USUÁRIO: <input name="busca" type="text" placeholder="busca usuario" method="POST">
            <a href="u.php"> 
                <input type="button" value="enviar">
            </a>
        <form>
        <br>
    </body>
</html>
<?php
include('conexao-bd.php');

$query = "select * from usuario";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($result->num_rows > 0){
    echo 'Usúarios:';
    echo '<br>';
    while($linha = $result->fetch_assoc()){
        echo '<hr>';
        echo 'Nome: ',$linha['nome']; 
        echo '<br>';
        echo 'Usúario: ',$linha['usuario'];
        echo '<br>';
        echo '<hr>';
    }  
}

?>
