<?php 
    require_once 'config.php';
    if(isset($_POST['maladie']) && isset($_POST['type']) && isset($_POST['traitement']) && isset($_POST['date_apparition']) && isset($_POST['id_user'])){
        $maladie = htmlspecialchars($_POST['maladie']);
        $type = htmlspecialchars($_POST['type']);
        $traitement = htmlspecialchars($_POST['traitement']);
        $date_apparition = htmlspecialchars($_POST['date_apparition']);
        $id_user = htmlspecialchars($_POST['id_user']);

        $insert = $bdd->prepare('INSERT INTO diagnostic(maladie, type, traitement, date_apparition, id_user) VALUES(:maladie, :type, :traitement, :date_apparition, :id_user)');
        $insert->execute(array(
            'maladie' => $maladie,
            'type' => $type,
            'traitement' => $traitement,
            'date_apparition' => $date_apparition,
            'id_user' => $id_user,
        
        ));
        header('Location:ajouter_antecedant.php?reg_err=success');
                            die();
        echo "l'ajout a été bien effectué.";
    }else{
        echo "l'ajout n'a pas été bien effectué.";
    }
