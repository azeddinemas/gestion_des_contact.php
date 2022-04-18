<?php
 require_once('bd.php');
 session_start();

class User extends Database{
    public $name;
    public $password;
    public $email;
    
    public function signup(){
        if($this->getname()==0){
        $req=$this->connection()->query("insert into compte  values('','$this->email','$this->name','$this->password',sysdate())");
        return $req;}
        else{
           
            return false;
        } 
    }
    public function getname(){
        $res = $this->connection()->query("select * from compte where name='$this->name'");
        return $res->num_rows;
    }
   public function login(){
      
        $res = $this->connection()->query("select * from compte where name='$this->name' and password = '$this->password'");
        $sql= $res->fetch_assoc();
        $_SESSION['name']=$sql['name'];
        $_SESSION['id']=$sql['id'];
        $_SESSION['date']=$sql['date'];
        $_SESSION['datelog']=date("Y-m-d H:i:s");

   }

    public function Set($name, $password, $email){
        $this->name=$name;
        $this->password=$password;
        $this->email=$email;
      
    }
 

     

}



?>