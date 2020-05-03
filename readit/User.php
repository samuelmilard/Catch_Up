<?php 

class User {

protected $_email;
protected $_pass;
protected $_name;

public function __construct($pass, $name){
    $this->_pass = $pass;
    $this->_name = $name;
}

public function connexion($bdd){
        $req = $bdd->prepare("SELECT * FROM utilisateur WHERE username = :username AND pass = :pass");
        $req->execute(array(
            ':username' => $this->_name,
            ':pass' => $this->_pass
        ));

        $count = $req->rowCount();
        if($count > 0)
        {
            session_start();
            $_SESSION['pass'] = $this->_pass;
            $_SESSION['name'] = $this->_name;
            header("location:adminpannel.php");
        }
        else
        {
            //Mauvais identifiant ou mauvais tout cours
           header("location:connexion.php");
        
        }
    }

}





?>