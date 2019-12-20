<?php require("Userexo1.php"); ?>
<html>

<head>

</head>

<body>



    <?php

    $Utilisateur1 = new User();
    $Utilisateur1->AfficherUser();
    $Utilisateur1-> setNom("♥");
    $Utilisateur1-> AfficherNom($Utilisateur1);
    $Utilisateur1->setprenom("apopo");
    $Utilisateur1-> Afficherprenom($Utilisateur1);
    ?>


<?php
echo 
highlight_file(
'./'.
basename(
__FILE__),
true);
?>
</body>

</html>

