<?php

   $usuario = $_POST['Nome'];
   $senha = $_POST['Senha'];

   echo $usuario;
   echo '</br>';
   echo $senha;

/*
class Cliente
{

    private $nome;
    private $cpf;
    private $endereco;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getCpf()
    {
        return $this->cpf;
    }


    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }


    public function getEndereco()
    {
        return $this->endereco;
    }


    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }


/*    function Dados($nome, $cpf, $endereco){
        $dados = array('Isabella', '123123', 'Ricardo Brandão');



    } */


?>