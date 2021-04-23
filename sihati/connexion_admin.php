<?php 
    session_start();
    require_once 'config.php';

    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $recuser = $bdd->prepare('SELECT id email, password FROM admin WHERE email = ?');
        $recuser->execute(array($email));
        $data = $recuser->fetch();
        $row = $recuser->rowCount();

        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($password, $data['password']))
                {
                   
                    
                   
                    
                   
                    $_SESSION['user_id'] = $data['id'];
                   


                    header('Location: admin.php?id='.$_SESSION['user_id']);
                    die();
                }else{ header('Location: login_admin.php?login_err=password'); die(); }
            }else{ header('Location: login_admin.php?login_err=email'); die(); }
        }else{ header('Location: login_admin.php?login_err=already'); die(); }
    }