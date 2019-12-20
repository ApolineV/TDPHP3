<?php

class User{
    //propriété
    private $_nom;
    private $_vie;

    //méthodes

    public function setNom($NouveauNom){
        $this->_nom = $NouveauNom;
    }
    

public function AfficherNom($NouveauNom)
{
    echo '<p>Je suis '.$this->_nom;

}


public function __construct()
{
    $this->_vie = 200;
    
}
public function AfficherVie()
{
echo 'et je possède '.$this->_vie.' de vie';   
}

}

?>
