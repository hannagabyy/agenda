<?php
    // classe
    class Contato{
        //atributos de classe
        private $id;
        private $nome;
        private $telefone;
        private $celular;
        private $email;

        // metodo get
        public function getID(){
            return $this->id;
        }

        //metodo set
        public function setID($id){
            $this ->id = $id;
        }

        // metodo get
        public function getNome(){
            return $this->nome;
        }

        //metodo set
        public function setNome($nome){
            $this ->nome = $nome;
        }

         // metodo get
         public function getTelefone(){
            return $this->telefone;
        }

        //metodo set
        public function setTelefone($telefone){
            $this ->telefone = $telefone;
        }

         // metodo get
         public function getCelular(){
            return $this->celular;
        }

        //metodo set
        public function setCelular($celular){
            $this ->celular = $celular;
        }

         // metodo get
         public function getEmail(){
            return $this->email;
        }

        //metodo set
        public function setEmial($email){
            $this ->email = $email;
        }

    }


    

?>