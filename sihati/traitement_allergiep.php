<?php 
    require_once 'config.php';
    if(isset($_POST['medicament']) && isset($_POST['alimentation']) && isset($_POST['id_user'])){
        $medicament = htmlspecialchars($_POST['medicament']);
        $alimentation = htmlspecialchars($_POST['alimentation']);
        $id_user = htmlspecialchars($_POST['id_user']);
        echo "les champs ont été bien récupérés.";

        $insert = $bdd->prepare('INSERT INTO allergie_p(medicament, alimentation, id_user) VALUES(:medicament, :alimentation, :id_user)');
        
        $insert->execute(array(
           

            'medicament' => $medicament,
            'alimentation' => $alimentation,
            'id_user' => $id_user,
            
        ));
        header('Location:validation_p.php?reg_erra=success');
                            die();
        echo "l'ajout a été bien effectué.";
    }else{
        echo "l'ajout n'a pas été bien effectué.";
    }
