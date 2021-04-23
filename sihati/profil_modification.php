<?php 
  
    require_once 'config.php';
   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Modidfication - Profil </title>
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
     <meta name="viewport" content="width=device-width, initial-scale=1">
     
     
     

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
     

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     
     <!-- MENU -->
     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Bienvenue dans une plateforme professionnelle de santé</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> </span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 8:00 AM - 5:00 PM (Samedi-Jeudi)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">sihati.societé@gmail.com</a></span>
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
                    <li><a href="admin.php" class="smoothScroll">Admin</a></li>
                         <li><a href="#about" class="smoothScroll">A propos de nous</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                        
                         
                    </ul>
               </div>

          </div>
     </section>

     <?php
     
     $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT * FROM utilisateur WHERE id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
  
      
  
  
  <?php while ($m= $user->fetch()) {  
      session_start();

    $_SESSION['id_ajout'] = $m['id'];

    ?>
                         
     <section id="appointment" data-stellar-background-ratio="3">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
              <img src="images/<?= $m['photo'] ?>" alt="">
              </a>
              <h1><?= $m['nom'] ?> <?= $m['prenom'] ?></h1>
              <p><?= $m['email'] ?></p>
          </div>
        <form action="supprimer.php" method="post">
                
            <ul class="nav nav-pills nav-stacked">
               <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
               <li><button type="submit"  name="im" id="im" value="<?= $m['id'] ?>" class="btn btn-primary btn-lg btn-block"><i class="fa fa-trash"></i> Supprimer </button></li>
               
             
            </ul>
        </form>
      </div>
  </div>
  <div class="profile-info col-md-9">
      
      <div class="panel">
          <div class="bio-graph-heading">
         <h3> La santé est le support de notre vie, l'oublier c'est ôter l'essence à notre survie. </h3>
          </div>
          <div class="panel-body bio-graph-info">
              <h1>Informations personnelles</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>Nom </span>: <?= $m['nom'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Prénom </span>: <?= $m['prenom'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Date de naissance </span>: <?= $m['date'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Lieu de naissance</span>: <?= $m['lieu'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Fils(e) de </span>: <?= $m['fils_de'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Et de  </span>: <?= $m['et_de'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Profession </span>: <?= $m['profession'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Situation familiale </span>: <?= $m['situation_familiale'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Sexe </span>: <?= $m['sexe'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Adresse de résidence </span>: <?= $m['adresse'] ?></p>
                  </div>
              </div>
          </div>
      </div>
      <div>
          <div class="row">
              <div class="col-md-6">
                  <div class="panel">                  
                      <div class="panel-body">
                     
                          <div class="bio-desk">
                              <h4 class="red">Assurance</h4>
                              <p>N° sécurité sociale : <?= $m['n_securite_sociale'] ?></p>
                              <p>Affiliation : <?= $m['affiliation'] ?></p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">                             
                  <div class="panel">
                      <div class="panel-body">
                      
                          <div class="bio-desk">
                              <h4 class="terques">Information médicales </h4>
                              <p>Groupe sanguin : <?= $m['groupe_sanguin'] ?></p>
                              <p>Diagnostic : <?= $m['diagnostic'] ?></p>
                          </div>
                      </div>
                  </div>
              </div>
              
          </div>
      </div>
       
       
  </div>
</div>
</div>
<?php } ?>
    
<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      
  </div>
  <div class="profile-info col-md-9">
      
      <div class="panel">
          <div class="bio-graph-heading">
                  <h3>Antécédents personnels</h3>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT id, id_maladie, maladie, type, traitement, date_apparition FROM utilisateur,diagnostic WHERE utilisateur.id=diagnostic.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));

       
               



       }
 
    
  

     
?>
<?php 



?>
  
      
  
  
  
          <div class="panel-body bio-graph-info" >
              <h1>Diagnostic  . <a href="ajouter_antecedant.php"><i class="fa fa-edit"></i> </a></h1>
              <div class="row">
                  <?php while ($m= $user->fetch()) {
                       
                      $_id_maladie = $m['id_maladie'];

                      $_SESSION['user_id'] = $m['id'];
                 

                   ?>
                <div class="col-md-11 col-sm-8" id="info">
                
                  <div class="bio-row">
                      <p><span>Maladie </span>: <?= $m['maladie'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Type </span>: <?= $m['type'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Traitement </span>: <?= $m['traitement'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Date d'apparition</span>: <?= $m['date_apparition'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                  <div class="bio-row">
                  <form action="edition_diagnostic.php" method="GET"> 
                 <p><span></span> <a href="edition_diagnostic.php" target="_blank"> <button type="submit" name="id_maladie" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" id="supprimer" value="<?= $m['id_maladie'] ?>"><i class="fa fa-edit"></i>
                            Modifier</button></a></p>
                  </form>
                  </div>
                  
                        
                </div>
               
                <h5> . </h5>
               

                <?php } ?>
              </div>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT * FROM utilisateur,allergie WHERE utilisateur.id=allergie.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
          <div class="panel-body bio-graph-info" >
              <h1>Allergie  .<a href="ajouter_antecedant.php"><i class="fa fa-edit"></i> </a></h1>
              <div class="row">
              <?php while ($m= $user->fetch()) {  

$_SESSION['user_id'] = $m['id'];

 ?>
                <div class="col-md-11 col-sm-8" id="info">
                  <div class="bio-row">
                      <p><span>Médicaments </span>: <?= $m['medicament'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Alimentation </span>: <?= $m['alimentation'] ?></p>
                  </div>
                  
                  
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                  
                  
                        
                </div>
                <?php } ?>
              </div>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT id, id_autre, autre FROM utilisateur,autre WHERE utilisateur.id=autre.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
          
          <div class="panel-body bio-graph-info" >
              <h1>Autre  . <a href="ajouter_antecedant.php"><i class="fa fa-edit"></i> </a></h1>
              <div class="row">
              <?php while ($m= $user->fetch()) {  

$_SESSION['user_id'] = $m['id'];

 ?>
                <div class="col-md-11 col-sm-8" id="info">
                  <p><?= $m['autre'] ?>  </p>
                  
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                  <form action="supprimer_autre.php" method="post">
                  <div class="bio-row">
                      <p><span><button type="submit" name="sup" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" id="accepter" value="<?= $m['id_autre'] ?>"><i class="fa fa-trash"></i>  Supprimer</button></span>  </p>
                  </div>
                  </form>
                        
                </div>
                <?php } ?>
              </div>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT * FROM utilisateur,chirurgie WHERE utilisateur.id=chirurgie.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
          <div class="panel-body bio-graph-info" >
              <h1>Antécédents chirurgicaux  .<a href="ajouter_antecedant.php"><i class="fa fa-edit"></i> </a></h1>
              <div class="row">
              <?php while ($m= $user->fetch()) {  

$_SESSION['user_id'] = $m['id'];

 ?>
                <div class="col-md-11 col-sm-8" id="info">
                  <div class="bio-row">
                      <p><span>Type d'intervention </span>: <?= $m['type'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Suites </span>: <?= $m['suites'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Séquelles  </span>: <?= $m['sequelles'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span></span>: </p>
                  </div>
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                  
                  
                        
                </div>
                <?php } ?>
              </div>
          </div>
      </div>
      <div>
          
      </div>
       
       
  </div>
</div>
</div>
<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      
  </div>
  <div class="profile-info col-md-9">
      
      <div class="panel">
          <div class="bio-graph-heading">
                  <h3>Antécédents familials (Père) </h3>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT * FROM utilisateur,diagnostic_p WHERE utilisateur.id=diagnostic_p.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
  
      
  
  
  
          <div class="panel-body bio-graph-info" >
              <h1>Diagnostic  . <a href=""><i class="fa fa-edit"></i> </a></h1>
              <div class="row">
                  <?php while ($m= $user->fetch()) {  

                  $_SESSION['user_id'] = $m['id'];

                   ?>
                <div class="col-md-11 col-sm-8" id="info">
                  <div class="bio-row">
                      <p><span>Maladie </span>: <?= $m['maladie'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Type </span>: <?= $m['type'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Traitement </span>: <?= $m['traitement'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Date d'apparition</span>: <?= $m['date_apparition'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                  <div class="bio-row">
                     
                  </div>
                  
                        
                </div>
               
                <h5> . </h5>
               

                <?php } ?>
              </div>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT * FROM utilisateur,allergie_p WHERE utilisateur.id=allergie_p.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
          <div class="panel-body bio-graph-info" >
              <h1>Allergie  .<a href=""><i class="fa fa-edit"></i> </a></h1>
              <div class="row">
              <?php while ($m= $user->fetch()) {  

$_SESSION['user_id'] = $m['id'];

 ?>
                <div class="col-md-11 col-sm-8" id="info">
                  <div class="bio-row">
                      <p><span>Médicaments </span>: <?= $m['medicament'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Alimentation </span>: <?= $m['alimentation'] ?></p>
                  </div>
                  
                  
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                 
                  
                        
                </div>
                <?php } ?>
              </div>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT * FROM utilisateur,autre_p WHERE utilisateur.id=autre_p.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
          
          <div class="panel-body bio-graph-info" >
              <h1>Autre  . <a href=""><i class="fa fa-edit"></i> </a></h1>
              <div class="row">
              <?php while ($m= $user->fetch()) {  

$_SESSION['user_id'] = $m['id'];

 ?>
                <div class="col-md-11 col-sm-8" id="info">
                  <p><?= $m['autre'] ?> je peux mettre une note concernant le patients et ses antécédents personnels et familials</p>
                  
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                  <div class="bio-row">
                      
                  </div>
                  
                        
                </div>
                <?php } ?>
              </div>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT * FROM utilisateur,chirurgie_p WHERE utilisateur.id=chirurgie_p.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
          <div class="panel-body bio-graph-info" >
              <h1>Antécédents chirurgicaux  . <a href=""><i class="fa fa-edit"></i> </a></h1>
              <div class="row">
              <?php while ($m= $user->fetch()) {  

$_SESSION['user_id'] = $m['id'];

 ?>
                <div class="col-md-11 col-sm-8" id="info">
                  <div class="bio-row">
                      <p><span>Type d'intervention </span>: <?= $m['type'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Suites </span>: <?= $m['suites'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Séquelles  </span>: <?= $m['sequelles'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span></span>: </p>
                  </div>
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                  <div class="bio-row">
                     
                  </div>
                  
                        
                </div>
                <?php } ?>
              </div>
          </div>
      </div>
      <div>
          
      </div>
       
       
  </div>
</div>
</div>
<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      
  </div>
  <div class="profile-info col-md-9">
      
      <div class="panel">
          <div class="bio-graph-heading">
                  <h3>Antécédents familials (Mère)</h3>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT * FROM utilisateur,diagnostic_m WHERE utilisateur.id=diagnostic_m.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
  
      
  
  
  
          <div class="panel-body bio-graph-info" >
              <h1>Diagnostic  . <a href=""><i class="fa fa-edit"></i> </a></h1>
              <div class="row">
                  <?php while ($m= $user->fetch()) {  

                  $_SESSION['user_id'] = $m['id'];

                   ?>
                <div class="col-md-11 col-sm-8" id="info">
                  <div class="bio-row">
                      <p><span>Maladie </span>: <?= $m['maladie'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Type </span>: <?= $m['type'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Traitement </span>: <?= $m['traitement'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Date d'apparition</span>: <?= $m['date_apparition'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                  <div class="bio-row">
                      
                  </div>
                  
                        
                </div>
               
                <h5> . </h5>
               

                <?php } ?>
              </div>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT * FROM utilisateur,allergie_m WHERE utilisateur.id=allergie_m.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
          <div class="panel-body bio-graph-info" >
              <h1>Allergie  .<a href=""></h1>
              <div class="row">
              <?php while ($m= $user->fetch()) {  

$_SESSION['user_id'] = $m['id'];

 ?>
                <div class="col-md-11 col-sm-8" id="info">
                  <div class="bio-row">
                      <p><span>Médicaments </span>: <?= $m['medicament'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Alimentation </span>: <?= $m['alimentation'] ?></p>
                  </div>
                  
                  
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                  <div class="bio-row">
                      
                  </div>
                  
                        
                </div>
                <?php } ?>
              </div>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT * FROM utilisateur,autre_m WHERE utilisateur.id=autre_m.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
          
          <div class="panel-body bio-graph-info" >
              <h1>Autre  . <a href=""><i class="fa fa-edit"></i> </a></h1>
              <div class="row">
              <?php while ($m= $user->fetch()) {  

$_SESSION['user_id'] = $m['id'];

 ?>
                <div class="col-md-11 col-sm-8" id="info">
                  <p><?= $m['autre'] ?> je peux mettre une note concernant le patients et ses antécédents personnels et familials</p>
                  
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                  <div class="bio-row">
                      
                  </div>
                  
                        
                </div>
                <?php } ?>
              </div>
          </div>
          <?php $getid = $_GET["id"];
     if(isset($_GET['id'])){
         $user = $bdd->prepare('SELECT * FROM utilisateur,chirurgie_m WHERE utilisateur.id=chirurgie_m.id_user AND utilisateur.id = ?');
         $user->execute(array($getid));
       }
 
    
  

     
?>
          <div class="panel-body bio-graph-info" >
              <h1>Antécédents chirurgicaux </h1>
              <div class="row">
              <?php while ($m= $user->fetch()) {  

$_SESSION['user_id'] = $m['id'];

 ?>
                <div class="col-md-11 col-sm-8" id="info">
                  <div class="bio-row">
                      <p><span>Type d'intervention </span>: <?= $m['type'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Suites </span>: <?= $m['suites'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Séquelles  </span>: <?= $m['sequelles'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span></span>: </p>
                  </div>
                  <div class="bio-row">
                      <p><span></span> </p>
                  </div>
                  <div class="bio-row">
                      
                  </div>
                  
                        
                </div>
                <?php } ?>
              </div>
          </div>
      </div>
      <div>
          
      </div>
       
       
  </div>
</div>
</div>

    </section> 

    
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Informations de contact</h4>
                              <p></p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 031457812</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">sihati.societé@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Dernières nouvelles</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Technologie innovante</h5></a>
                                        <span>Mai 01, 2020</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Nouveau processus de santé</h5></a>
                                        <span>20 Février 2020</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Horaires d'ouvertures</h4>
                                   <p>Dimanche - Jeudi <span>08:00 AM - 5:00 PM</span></p>
                                   <p>Samedi<span>09:00 AM - 08:00 PM</span></p>
                                   <p>Vendredi <span>Fermée</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2020 votre societé 
                                   
                                   | Design: ZinebH</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="#">Tests de laboratoire</a>
                                   <a href="#">Départements</a>
                                   <a href="#">Police d'assurance</a>
                                   <a href="#">Carrières</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer> 
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
  .img-responsive{
     width: 100px;
    height: 100px;
  }
  #formulaire{
     background-color: #d3eaf1;
     border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
  }
   #appointment{
    
     background-color :#f0f2f5
  }
  .diagnostic{
    background-color: #d3eaf1;
     border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);

  }
  #compte{
     color: #fff;
    background-color: #c76291;
    border-color: #c76291;
    
    
}
#notif{
     color: #6b99de;
}
#succés{
     background-color: #d3eaf1;
}
.alert-success {
    color: #337ab7;
    border-color  : #a8ccea
    }
    #info{
        border : 1px #ccc solid;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
        background: white;
    }
       #recherche{
          background: #edf3d6;
        }

       #identification{
        border : 1px #ddd solid;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
        background: white;
       }
       #identification2{
        border : 1px #ddd solid;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
        background: white;
       }
       #photo{
        border : 0.1px #eee solid;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);

       }
       #appointment{
    
          background: #f0f2f5;
       }
       #partie1{
        border : 0.5px #ddd solid;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
       }
       #cf-submit{
        border-radius: 8px;
        width : 300px;
        height : 15px;
        
       }
       .btn-primary:hover{
        color: #fff;
        background-color: #22b5c4;
        border-color: #204d74;

       }
      







       body {
    color: #797979;
    background: #f1f2f7;
    font-family: 'Open Sans', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}

.profile-nav, .profile-info{
    margin-top:30px;   
}

.profile-nav .user-heading {
    background: #f9d1e4;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #f8f7f5;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}
#im{
    color: #fff;
    background-color: #22b5c4;
    border-color: #22b5c4;
    
}



.bio-graph-heading {
    background:  #f9d1e4;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 200px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

#accepter{
   
    color: #fff;
   background-color: #c76291;;
   border-color: #c76291;;
   

}
#supprimer{
  
  color: #fff;
  background-color: #c76291;;
  border-color: #c76291;;
  

}

.btn-rounded {
    border-radius: 2em;
    border-top-left-radius: 2em;
    border-top-right-radius: 2em;
    border-bottom-right-radius: 2em;
    border-bottom-left-radius: 2em;
}
#supprimer{
  
    color: #fff;
    background-color: #22b5c4;
    border-color: #22b5c4;
  

}
ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #fff;
    font-size: 16px;
}

.activity.terques span {
    background: #8dd7d6;
}

.activity.terques h4 {
    color: #8dd7d6;
}
.activity.purple span {
    background: #b984dc;
}

.activity.purple h4 {
    color: #b984dc;
}
.activity.blue span {
    background: #90b4e6;
}

.activity.blue h4 {
    color: #90b4e6;
}
.activity.green span {
    background: #aec785;
}

.activity.green h4 {
    color: #aec785;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}

.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #F4F4F4 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #F4F4F4 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #F4F4F4 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
}

.activity-desk .album a:last-child{
    margin-right: 0px;
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

