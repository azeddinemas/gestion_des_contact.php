<?php
    require_once('bd.php');
    session_start();

    class Contact extends Database{
        public $id;
        public $name;
        public $email;
        public $phone;
        public $address;
        
        public function delete(){
            $req=$this->connection()->query("DELETE FROM contact_list WHERE idc='$this->id'");
            return $req;
        }

        public function SelectALL($id){
            $sql=$this->connection()->query("SELECT * FROM contact_list WHERE id='$id'");
            $sql= $sql->fetch_all();
            return $sql;
        }

        public function Selectone(){
            $sql=$this->connection()->query("SELECT * FROM contact_list WHERE idc='$this->id'");
            $a=$sql->fetch_assoc();
            return $a ;
        }

        public function Add(){
            $sql=$this->connection()->query("INSERT INTO contact_list VALUES('','$this->name','$this->email','$this->phone','$this->address','$this->id')");
            return $sql;
        }

        public function update() {
            $sql=$this->connection()->query("UPDATE contact_list SET name='$this->name' , email='$this->email' , phone='$this->phone', address='$this->address' WHERE idc='$this->id'");
            return $sql;
        }
    
        public function Set($name, $email, $phone,$address,$id){
            $this->name=$name;
            $this->email=$email;
            $this->phone=$phone;
            $this->address=$address;
            $this->id=$id;
        
        }

        public function setId($id){
            $this->id=$id;
        }
    }
?>