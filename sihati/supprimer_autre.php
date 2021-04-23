<?php 
    require_once 'config.php';

    if(isset($_POST['sup']))
    {
        $id = htmlspecialchars($_POST['sup']);
        
       
       echo $id;

      

        

                            $delete = $bdd->prepare('DELETE FROM `autre` WHERE `id_autre` = ?');
                            $delete->execute(array($id));

                   
                   header('Location:edition.php');   
    }