<?php


class Db_Conexao
{
    //Host:
    private $host = 'localhost';
    //Usuario:
    private $usuario = 'root';
    //Senha:
    private $senha = '';
    //Banco de Dados:
    private $database = 'painel';

public function conecta_mysql(){
        //criar a conexão:
   $con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);
        //ajustar o charset de comunicação entre a aplicação  e o banco  de dados.
    mysqli_set_charset($con, 'utf8');

    //verificar se houve erro de conexao

    if(mysqli_connect_errno()){
        echo 'Erro ao tentar se connectar com o BD MYSQL: '.mysqli_connect_error();
    }

    return $con;
}

}

?>