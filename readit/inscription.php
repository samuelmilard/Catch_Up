<?php

class Inscription{
    protected $_name;
    protected $_pass;
    protected $_email;
    


    public function __construct($_name,$_pass,$_email){
        $this->_name = $_name;
        $this->_pass = $_pass;
        $this->_email = $_email;
    }

    //getters
    public function getname(){
        return $this->_name;
    }

    public function getpass(){
        return $this->_pass;
    }

    public function getemail(){
        return $this->_email;
    }


  
    //setters
    public function setPrenom($name){
        $this->_name = $name;
       
    }
    public function setpass($pass){
        $this->_pass = $pass;
       
    }

    public function setemail($email){
        $this->_email = $email;       
    }


    

    public function inscription($bdd){
        $name = $this->_name;
        $pass = $this->_pass;
        $email = $this->_email;
        $req = $bdd->prepare("INSERT INTO utilisateur (username, email, pass)
                            VALUES (:name, :email, :pass) ");
        $req->execute(array(
                    'name' => $this->_name,
                    'pass' => $this->_pass,
                    'email'=>$this->_email
                       ));

        header("location: connexion.php");
   }




}

?>