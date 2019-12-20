<?php
class Perso{

    //propriété
    private $_name;
    private $_vie;
    private $_degat;
    private $_isLife;

    //méthodes
    public function __construct($valeurVie,$valeurDegat,$valeurname){

        $this->_vie = $valeurVie;
        $this->_degat = $valeurDegat;
        $this->_name = $valeurname;
        $this->_isLife = true;
 
     }


    public function Afficher(){
       echo "<p> Mon nom est ".$this->_name;
       echo " je possede ".$this->_vie." de DEFENSE et ".$this->_degat." de DEGAT";

    }
    
    public function Attaquer($perso){

        
        echo "<p>".$this->_name." a attaquer ".$perso->getNom().'</p> ';
        
        $perso->defense($this->_degat);
     }

    public function defense($degat){
        
        $this->_vie -= $degat;
       
        if($this->_vie <= 0)
        { 
            $this->_isLife = false;
            echo "".$this->_name." a perdu ".$degat."PV <p> et c'est le coup mortel pour.$this->_name.  </p> ";
        }
        else{
            echo "".$this->_name." a perdu ".$degat."</p>";
        }
       
     }
     
     public function isLife(){
        return $this->_isLife;
     }

     public function getNom()
     {
         return $this->_name;
     }

}
?>