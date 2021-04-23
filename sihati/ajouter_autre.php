<?php 
    require_once 'config.php';
    if(isset($_POST['autre']) && isset($_POST['id_user'])){
        $autre = htmlspecialchars($_POST['autre']);
        $id_user = htmlspecialchars($_POST['id_user']);
        
        $insert = $bdd->prepare('INSERT INTO autre(autre, id_user) VALUES(:autre, :id_user)');
        $insert->execute(array(
            'autre' => $autre,
            'id_user' => $id_user,
            
        
        ));
        header('Location:ajouter_antecedant.php?reg_erre=success');
                            die();
        echo "l'ajout a été bien effectué.";
    }else{
        echo "l'ajout n'a pas été bien effectué.";
    }
