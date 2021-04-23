<?php 
    require_once 'config.php';

    if(isset($_POST['im']))
    {
        $id = htmlspecialchars($_POST['im']);
        
       
       echo $id;

      

        

                            $delete = $bdd->prepare('DELETE FROM `utilisateur` WHERE `id` = ?');
                            $delete->execute(array($id));

                   
                   header('Location:modification_dossier.php');   
    }