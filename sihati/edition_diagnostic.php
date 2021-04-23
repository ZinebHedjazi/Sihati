<?php 
  
    require_once 'config.php';
    session_start();

    $id_ajout = $_SESSION['id_ajout'];
    
    echo  $id_ajout;
    $id_maladie = $_GET['id_maladie'];

    echo $id_maladie;
   
    



    $requser = $bdd->prepare('SELECT * FROM utilisateur,diagnostic WHERE utilisateur.id=diagnostic.id_user AND diagnostic.id_maladie = ?');
  
     $requser->execute(array($id_maladie));
        $user =  $requser->fetch();



        if(isset($_POST['traitement'])){
         
          $traitement = htmlspecialchars($_POST['traitement']);
         
         
          $update = $bdd->prepare('UPDATE diagnostic SET  traitement = ? WHERE id_maladie = ?');
          $update->execute(array($traitement,$id_maladie));

          header('Location:edition.php');

     }
    
    
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Edition-diagnostic</title>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50" id="body">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Bienvenue dans notre site professionnel de la santé</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
                    </div>

               </div>
          </div>
     </header>
    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

          <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                   
                         <div class="logo">
                              <a href="index.html" class="navbar-brand"> Sihati </a>
                              <img src="images/logo.png" class="img-responsive" alt="">
                              

                             
                         
                         </div>
                   
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                         <li><a href="acceuil.html" class="smoothScroll">accueil</a></li>
                         <li><a href="#about" class="smoothScroll">A propos de nous</a></li>
                      
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                        
                    </ul>
               </div>

          </div>
     </section>


     

     
    


     


     


   
          

     
     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    

                    <div class="col-md-8 col-sm-6" id="antécedents">
                         <!-- CONTACT FORM HERE -->
                         

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Antécédents personnels</h2>
                              </div>
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                             
                                   <h3>Antécédents médicaux</h3>
                               
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-12 col-sm-12" id="formulaire"> 
                                   <?php
                              if(isset($_GET['reg_err']))
                              {
                                   $err = htmlspecialchars($_GET['reg_err']);

                                   switch($err)
                                   {
                                        case 'success':
                                        ?>
                                            <div class="alert alert-success">
                                                <strong>Succès</strong> Les information de la maladie ont été bien enregistrées ! !
                                             </div>
                                        <?php
                                        break;

                                        case 'password':
                                        ?>
                                            <div class="alert alert-danger">
                                                <strong>Erreur</strong> mot de passe différent
                                             </div>
                                        <?php
                                        break;

                                        case 'email':
                                        ?>
                                             <div class="alert alert-danger">
                                                <strong>Erreur</strong> email non valide
                                             </div>
                                        <?php
                                        break;

                                        case 'email_length':
                                        ?>
                                             <div class="alert alert-danger">
                                                <strong>Erreur</strong> email trop long
                                             </div>
                                        <?php 
                                        break;

                                        case 'pseudo_length':
                                        ?>
                                             <div class="alert alert-danger">
                                                 <strong>Erreur</strong> pseudo trop long
                                             </div>
                                        <?php 
                                        case 'already':
                                        ?>
                                             <div class="alert alert-danger">
                                                 <strong>Erreur</strong> compte deja existant
                                             </div>
                                        <?php
                                   }     
                              }
                              ?>
                              
                                   <form id="diagnostic_form" role="form" method="post" action="">
                                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                             <h5>Modification de diagnostic :</h5>
                                        </div>
                                        <div class="col-md-12 col-sm-12" id="allergie">
                                            <div class="col-md-6 col-sm-6">
                                                <label for="traitement">Maladie :</label>
                                                <input type="text" class="form-control" id="maladie" name="maladie" value="<?php echo $user['maladie'] ; ?>" placeholder="">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <label for="traitement">Type :</label>
                                                <input type="text" class="form-control" id="type" name="type"  value="<?php echo $user['type'] ; ?>" placeholder="">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                 <label for="traitement">Traitement :</label>
                                                 <input type="text" class="form-control" id="traitement" name="traitement" value="<?php echo $user['traitement'] ; ?>" placeholder="">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                 <label for="traitement">Date d'apparition de la maladie :</label>
                                                 <input type="date" name="date_apparition" value="<?php echo $user['date_apparition'] ; ?>" class="form-control">
                                            </div>
                                            <div class="col-md-8 col-sm-6">
                                             
                                             </div>
                                            
                                             <div class="col-md-4 col-sm-2">
                                             <button type="submit" value="<?php echo  $id_ajout ; ?>" name="id_user" class="btn btn-primary">Mettre à jour le diagnostic</button>
                                            
                                             </div>
                                            
                                        </div>
                                   </form>
                                  
                                    </div>

                                </div>
                              
                                
                                
                                <div class="col-md-4 col-sm-6">
                                  
                                             </div>
                                             <div class="col-md-8 col-sm-6">
                                            
                                           
                                            
                                             </div>
                                
                            

                              

                        
                       </div>

                    </div>
                </div>
            </div>
        </section>
        <section>
        .
        </section>
      
        
    <!-- Style -->
    <style>
         .logo img,
  .logo .author-info {
    display: inline-block;
    vertical-align: top;
  }
  .author-info h5 {
    margin-bottom: 0;
  }
  .logo img {
    border-radius: 100%;
    width: 50px;
    height: 50px;
    margin-right: 10px;
  }
  .btn-primary {
    color: #fff;
    background-color: #329ebe;
    
    border-color: #fff;
}
 #nous{
     color: #fff;
    background-color: #c76291;
    border-color: #c76291;
    
    
}
    #diagnostic{
        border : 0.5px grey solid;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
    }
    #allergie{
        border : 1px grey solid;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
        background: white;
    }
    #autre{
        border : 1px grey solid;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
        background: white;

    }
    #appointment{
    
        background: #f0f2f5;
    }
    #antécedents{
        border-radius: 8px;
        background: white;

    }
   

   
    #accordion{
     cursor:pointer;
     
     outline:none;
     width:100%;
     text-align:left;
     background-color:transparent;
     
     padding:8px;
     margin:4px 0;
     border-radius:4px;
     transition:0.3s;
}

button.btn:hover{
  background-color:rgba(255,255,255,0.3);
}

button.btn.active{
  background-color:#fff;
  color:#000;
  border-radius:4px 4px 0 0;
  margin:4px 0 0;
 }
 #diagnostic1{
    border : 0.5px grey solid;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
}
.logo img,
       .logo .author-info {
        display: inline-block;
         vertical-align: top;
     }
  .author-info h5 {
    margin-bottom: 0;
  }
  .logo img {
    border-radius: 100%;
    width: 50px;
    height: 50px;
    margin-right: 10px;
  }
  #formulaire{
     background-color: white;
     
  }
  #appointment{
    
     background-color :#f0f2f5
  }
  #compte{
     color: #fff;
    background-color: #c76291;
    border-color: #c76291;
    
    
}

    </style>

     

     <!-- SCRIPTS -->
    
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>