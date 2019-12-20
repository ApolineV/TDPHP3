<?php require("User.php");?>
<?php require("Perso.php");?>
<html>

    <head>

    </head>

    <body>

    <form  method="Post" action="">
        <input type="text" name="nom" />
        <input type="text" name="mdp" />
        <input type="submit" value="OK">
    </form>

    <?php
        
        $Utilisateur1 = new User();
        $Utilisateur1->setNom("Avast");
        $Utilisateur1->setmdp("Avast");

        $Perso1 = new Perso(10,4,"PILOU");
        $Perso2 = new Perso(10,2,"CAMILLE");
        $Perso1->Afficher();
        $Perso2->Afficher();
        
        
        while($Perso1->isLife() && $Perso2->isLife())
        {
            $Perso1->Attaquer($Perso2);  
            $Perso2->Attaquer($Perso1);  
        }

    ?>   

    <?php
        if (isset($_POST['nom'])){

            $isConnect = $Utilisateur1->Verifmdp($_POST['nom'],$_POST['mdp']);
            if($isConnect)
            {
                echo "connecter ";

                $maBase=new PDO('mysql:host=192.168.65.226; dbname=Medecin; charset=utf8','Clems','Clems'); 

                $LesDonneesBrutesDeLaBdd = $maBase->query("select * from medecin");
                
                echo "<table>";
                while ($TableauDeDonnée = $LesDonneesBrutesDeLaBdd ->fetch())
                {
                    echo "<tr>";
                    echo "<td>".$TableauDeDonnée["nom"]."</td>";
                    echo "</tr>";
                }
                $LesDonneesBrutesDeLaBdd ->closeCursor();
               
            }
            else
            {
                echo "erreur";
            }
        }
    ?>

    
    </body>

</html>



