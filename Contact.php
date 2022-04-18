<?php
 require_once('bd.php');
 session_start();

class Contact extends Database{
    public $id;
    public $name;
    public $email;
    
    public function delete(){
        
        $req=$this->connection()->query("delete from contact_list where idc='$this->id'");
        return $req;
    }
    public function getname(){
       
    }
   public function SelectALL(){

   }
   public function Selectone(){

}

public function Setid($id){
    $this->id=$id;
  
}
    public function Set($name, $password, $email){
        $this->name=$name;
        $this->password=$password;
        $this->email=$email;
      
    }
 

     

}



?>