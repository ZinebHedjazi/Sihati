<?php 
    require_once 'config.php';

    if(isset($_POST['nom']) && isset($_POST['date']) && isset($_POST['prenom']) && isset($_POST['lieu']) && isset($_POST['fils_de']) && isset($_POST['et_de']) && isset($_POST['profession']) && isset($_POST['situation_familiale']) && isset($_POST['sexe']) && isset($_POST['adresse']) && isset($_POST['n_securite_sociale']) && isset($_POST['groupe_sanguin']) && isset($_POST['diagnostic']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']))
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $date = htmlspecialchars($_POST['date']);
        $lieu = htmlspecialchars($_POST['lieu']);
        $fils_de = htmlspecialchars($_POST['fils_de']);
        $et_de = htmlspecialchars($_POST['et_de']);
        $profession = htmlspecialchars($_POST['profession']);
        $situation_familiale = htmlspecialchars($_POST['situation_familiale']);
       
        $sexe = htmlspecialchars($_POST['sexe']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $affiliation = htmlspecialchars($_POST['affiliation']);
        $n_securite_sociale = htmlspecialchars($_POST['n_securite_sociale']);
        $groupe_sanguin = htmlspecialchars($_POST['groupe_sanguin']);
        $diagnostic = htmlspecialchars($_POST['diagnostic']);
        session_start();
        $_SESSION['diagnostic'] = $diagnostic;
        $phone = htmlspecialchars($_POST['phone']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        $check = $bdd->prepare('SELECT id, nom, prenom, date, lieu, fils_de, et_de, profession, situation_familiale, sexe, adresse, n_securite_sociale, affiliation, groupe_sanguin, diagnostic, phone, email, password FROM utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
       
        $row = $check->rowCount();
      

        if($row == 0){ 
            if(strlen($nom) <= 100){
                if(strlen($email) <= 100){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        if($password == $password_retype){

                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                            $ip = $_SERVER['REMOTE_ADDR'];

                            $insert = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, date, lieu, fils_de, et_de, profession, situation_familiale, sexe, adresse, n_securite_sociale, affiliation, groupe_sanguin, diagnostic, phone, email, password, ip) VALUES(:nom, :prenom, :date, :lieu, :fils_de, :et_de, :profession, :situation_familiale, :sexe, :adresse, :n_securite_sociale, :affiliation, :groupe_sanguin, :diagnostic, :phone, :email, :password, :ip)');
                            $insert->execute(array(
                                'nom' => $nom,
                                'date' => $date,
                                'prenom' => $prenom,
                                'lieu' => $lieu,
                                'fils_de' => $fils_de,
                                'et_de' => $et_de,
                                'profession' => $profession,
                                
                                'situation_familiale' => $situation_familiale,
                                'sexe' => $sexe,
                                'adresse' => $adresse,
                                
                                
                                'n_securite_sociale' => $n_securite_sociale,
                                'affiliation' => $affiliation,
                                'groupe_sanguin' => $groupe_sanguin,
                                'diagnostic' => $diagnostic,
                                'phone' => $phone,
                                'email' => $email,
                                'password' => $password,
                                'ip' => $ip
                            ));
                           
                          

                            header('Location:notification.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription1.php?reg_err=password'); die();}
                    }else{ header('Location: inscription1.php?reg_err=email'); die();}
                }else{ header('Location: inscription1.php?reg_err=email_length'); die();}
            }else{ header('Location: inscription1.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: inscription1.php?reg_err=already'); die();}
    }