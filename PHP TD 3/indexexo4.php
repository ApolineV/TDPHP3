
<?php require("Persoexo4.php");?>
<html>

    <head>

    </head>

    <body>

    
    <?php
        
        $Perso1 = new Perso(50,50,"AVAST");
        $Perso2 = new Perso(50,50,"PILOU");
        $Perso1->Afficher();
        $Perso2->Afficher();
        
        
        while($Perso1->isLife() && $Perso2->isLife())
        {
            $Perso1->Attaquer($Perso2);  
            $Perso2->Attaquer($Perso1);  
        }

    ?>   

   
    </body>

</html>



