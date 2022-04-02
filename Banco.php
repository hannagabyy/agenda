<?php

class Banco{

    private $conexao;

    //construtor
    public function __construct()
    {
        try{
            //conexão com banco de dados
            $this->conexao=new PDO(dsn: "mysql:host=localhost;dbname=agenda",username:"root",password:"");

        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function consultar(){
        try{
            $instancia = $this->conexao->prepare("SELECT * FROM contatos");
            $instancia->execute();
            $dados = $instancia->fetchAll(mode: PDO::FETCH_OBJ);
            return $dados;
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function cadastrar($nome,$telefone,$celular,$email){
        try{
            $instancia = $this->conexao->prepare("INSERT INTO contatos(nome,telefone,celular,email)VALUES(?,?,?,?)");
            $instancia->bindParam(1, $nome);
            $instancia->bindParam(2, $telefone);
            $instancia->bindParam(3, $celular);
            $instancia->bindParam(4, $email);
            $instancia->execute();
            
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function excluir($id){
        try{
            $instancia = $this->conexao->prepare("DELETE FROM contatos WHERE id=?");
            $instancia->bindParam(1,$id);
            $instancia->execute();
            
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function getContato($id){
        try{
            $instancia = $this->conexao->prepare("SELECT * FROM contatos WHERE id=?");
            $instancia->bindParam(1, $id);
            $instancia->execute();
            $contato = $instancia->fetch(PDO::FETCH_OBJ);
            return $contato;
            
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }

    public function editar($id,$nome,$telefone,$celular,$email){
        try{
            $instancia = $this->conexao->prepare("UPDATE contatos SET nome=?, telefone=?,celular=?,email=? WHERE id=?");
            $instancia->bindParam(1, $nome);
            $instancia->bindParam(2, $telefone);
            $instancia->bindParam(3, $celular);
            $instancia->bindParam(4, $email);
            $instancia->bindParam(5, $id);
            $instancia->execute();
            
        }catch (PDOException $ex){
            echo $ex->getMessage();
        }
    }
}