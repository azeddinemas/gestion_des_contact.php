<?php
    require_once('bd.php');
    session_start();

    class User extends Database{
        public $name;
        public $password;
        public $email;
        
        public function signup(){
            $req = $this->connection()->query("INSERT INTO compte  VALUES('','$this->email','$this->name','$this->password',sysdate())");
            return $req;
        }

        public function getname(){
            $res = $this->connection()->query("SELECT * FROM compte WHERE name='$this->name'");
            return $res->num_rows;
        }

        public function login(){
            $res = $this->connection()->query("SELECT * FROM compte WHERE name='$this->name' AND password = '$this->password'");
            return $res;
        }

        public function Set($name, $password, $email){
            $this->name=$name;
            $this->password=$password;
            $this->email=$email;
        }
    }
?>