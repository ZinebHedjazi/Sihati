<?php 
    require_once 'config.php';
    if(isset($_POST['type']) && isset($_POST['suites']) && isset($_POST['sequelles']) && isset($_POST['id_user'])){
        $type = htmlspecialchars($_POST['type']);
        $suites = htmlspecialchars($_POST['suites']);
        $sequelles = htmlspecialchars($_POST['sequelles']);
        $id_user = htmlspecialchars($_POST['id_user']);
        echo "les champs ont été bien récupérés.";

        $insert = $bdd->prepare('INSERT INTO chirurgie(type, suites, sequelles, id_user) VALUES(:type, :suites, :sequelles, :id_user)');
        
        $insert->execute(array(
           

            'type' => $type,
            'suites' => $suites,
            'sequelles' => $sequelles,
            'id_user' => $id_user,
            
        ));
        header('Location:ajouter_antecedant.php?reg_errc=success');
                            die();
        echo "l'ajout a été bien effectué.";
    }else{
        echo "l'ajout n'a pas été bien effectué.";
    }