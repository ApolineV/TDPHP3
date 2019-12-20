<?php
class User{
    
    private $_Nom;
    private $_Prenom;

   

    public function setNom($NouveauNom){
        $this->_Nom = $NouveauNom;
    }

    public function setprenom($Nouveauprenom){
        $this->_Prenom = $Nouveauprenom;
    }

    public function AfficherUser()
    {
        echo "je suis User";
    }
    public function AfficherPrenom($Nouveauprenom)
    {
        echo "<p>".$this->_Prenom;
    }
    public function AfficherNom($NouveauNom)
    {
        echo "<p>" .$this->_Nom;
    }
}
?>
