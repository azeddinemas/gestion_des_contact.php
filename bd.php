<?php

    class Database{

        public $con;
        
        public function __construct()
        {
            $this->con = mysqli_connect("localhost","root","","contacts");
            // $this->con = new PDO('mysql:host=localhost;dbname=contacts','root','');
        }
    
    
        public function inserted($data){
            $result = $this->con->query($data);
            if ($result) {
                header("location:contactlist.php");
            }
        }

        public function select($data){
            $result = $this->con->query($data);
            
            if ($result -> num_rows>0) {
                return $result;
            }else
                return false;
        }



    }


?>