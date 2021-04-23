<?php 
    require_once 'config.php';

    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']))
    {
        
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        $check = $bdd->prepare('SELECT email, password FROM admin WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        if($row == 0){ 
            
                if(strlen($email) <= 100){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        if($password == $password_retype){

                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                            $ip = $_SERVER['REMOTE_ADDR'];

                            $insert = $bdd->prepare('INSERT INTO admin(email, password, ip) VALUES(:email, :password, :ip)');
                            $insert->execute(array(
                                
                                'email' => $email,
                                'password' => $password,
                                'ip' => $ip
                            ));

                            header('Location:inscription1.php?reg_err=success');
                            die();
                        }else{ header('Location:connexion_admin.php?reg_err=password'); die();}
                    }else{ header('Location: connexion_admin.php?reg_err=email'); die();}
                }else{ header('Location: connexion_admin.php?reg_err=email_length'); die();}
            
        }else{ header('Location: connexion_admin.php?reg_err=already'); die();}
    }