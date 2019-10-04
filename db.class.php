<?php
    //Class para conexão com o Banco de Dados
    class db {
        //host - user - password - DataBase
        private $host           = 'localhost';
        private $user           = 'root';
        private $password       = ''; 
        private $nameDataBase   = 'testeInvasao';      

        
        public function conecta_mySql(){

            $coneccaoDb = mysqli_connect($this->host, $this->user, $this->password, $this->nameDataBase);
            mysqli_set_charset($coneccaoDb, 'utf8');

            if(mysqli_connect_errno()){
                echo 'Erro ao tentar se conectar com o DB MySQL: '.mysqli_connect_error();
            }
            
            return $coneccaoDb;
        }        

    }



?>