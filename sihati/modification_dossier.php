<?php 
    require_once 'config.php';
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>

     <title>Modification-Admin</title>
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
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

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
                    <li><a href="accueil.php" class="smoothScroll">Accueil</a></li>
                         <li><a href="about.php" class="smoothScroll">À propos de nous</a></li>
                         <li><a href="admin.php" class="smoothScroll">Admin</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact</a></li>
                         <li class="appointment-btn"><a href="deconnexion_admin.php">Déconnexion</a></li>
                         
                         
                         
                    </ul>
               </div>

          </div>
     </section>

          
     
     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
     
        <div class="content">
            
        
          <div class="container">
          <div class="row">
          <?php 
                              $user = $bdd->query('SELECT * FROM utilisateur ORDER BY id DESC LIMIT 0,9');
                         ?>
                         <?php 
                            if(isset($_GET['nom'])){
                              $nom = htmlspecialchars($_GET['nom']);
                              $prenom = htmlspecialchars($_GET['prenom']);
                              $user = $bdd->query('SELECT * FROM utilisateur WHERE nom LIKE "%'.$nom.'%" AND prenom LIKE "%'.$prenom.'%"  ORDER BY id DESC');
                            }
                            
                         ?>
            <form method ="GET" action="" class="navbar-form navbar-left" role="search">
               <div class="form-group">
                  <input type="search" name="nom" class="form-control" placeholder="Nom">
               </div>
               <div class="form-group">
                  <input type="search" name="prenom" class="form-control" placeholder="Prénom">
               </div>
               <button type="submit" class="btn btn-default" id="researche">
                  <span class="glyphicon glyphicon-search"></span>
               </button>
           </form>
         </div>

	<div class="row">
    <div class="col-md-10 col-sm-8">
    
		<div class="list-group">     
                 <?php while ($m= $user->fetch()) { 
                      

                       $_SESSION['id_affich'] = $m['id'];
                      
                      
                      ?>
            <div class="list-group-item clearfix">

               
            
                <div class="profile-teaser-left">
                    <div class="profile-img"><img src="images/<?= $m['photo'] ?>" alt=""></div>
                </div>
                <div class="profile-teaser-main">
                
                    <h2 class="profile-name"><?= $m['nom'] ?> <?= $m['prenom'] ?></h2>
                    <form action="profil_modification.php" method="GET"> 
                    <div class="profile-info">
                        <div class="info"><span class="">Profession : </span> <?= $m['profession'] ?></div>
                        <div class="info"><span class="">Email : </span> <?= $m['phone'] ?></div>
                        
                        <button type="submit" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" value="<?= $m['id'] ?>" id="accepter" name="id">Modifier</button>
                        </form>
                        
                        <form action="supprimer.php" method="POST">
                        <button type="submit" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" name="im" value="<?= $m['id'] ?>" id="supprimer">Supprimer</button>
                        </form>
                        
                    </div>
                </div>
               
            </div>
            .<!-- item -->
            <?php } ?> 
            
        </div>
     
	</div>
</div>
</div>       
       
            
    
        </div>
    </section>

               


     <!-- FOOTER -->
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
 
     #news{background: #f0f2f5;}
    
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
#accepter{
   
    color: #fff;
    background-color: #22b5c4;
    border-color: #22b5c4;
    

}
#supprimer{
   
   color: #fff;
   background-color: #c76291;;
   border-color: #c76291;;
   

}

body{
    background:#DCDCDC;
    margin-top:20px;
}
.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
}

.social-links li a {
    border-radius: 50%;
    color: rgba(121, 121, 121, .8);
    display: inline-block;
    height: 30px;
    line-height: 27px;
    border: 2px solid rgba(121, 121, 121, .5);
    text-align: center;
    width: 30px
}

.social-links li a:hover {
    color: #797979;
    border: 2px solid #797979
}
.thumb-lg {
    height: 88px;
    width: 88px;
}
.list-group-item{
   
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
}
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}
.text-pink {
    color: #ff679b!important;
}
.btn-rounded {
    border-radius: 2em;
}
.text-muted {
    color: #98a6ad!important;
}
h4 {
    line-height: 22px;
    font-size: 18px;
}
.profile-teaser-left {
    float: left; width: 20%; margin-right: 1%;
}
.profile-img img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-teaser-main {
    float: left; width: 79%;
}

.info { display: inline-block; margin-right: 10px; color: #777; }
.info span { font-weight: bold; }
#researche{
    background-color: #f9d1e4;
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