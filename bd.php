<?php

    class Database{

        public function connection(){
            $coo = mysqli_connect("localhost","root","","contacts");
            return $coo;      
        }
    }
?>