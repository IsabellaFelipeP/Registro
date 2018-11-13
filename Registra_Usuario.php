<?php

require_once ('Db_Conexao.php');

 $usuario =  $_POST['Nome'];

 $senha =  $_POST['Senha'];

 $email = $_POST['Email'];

 $objDb =  new Db_Conexao();
 $link = $objDb->conecta_mysql(); //utiliza o link porque o return da função Db_Conexao precisa ser recuperado também.


 $sql = "insert into usuarios(usuario, senha, email) values ('$usuario','$senha','$email')";

 //executar a query
    if(mysqli_query($link, $sql)){
        echo 'Usuario Registrado com sucesso';

    }else {
        echo 'Erro ao registrar o usuario!';
    }

?>