<!DOCTYPE html>
<html lang="en">
<head>

     <title>Sihati-login_admin</title>
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
                         <li><a href="#top" class="smoothScroll">Accueil</a></li>
                         <li><a href="#about" class="smoothScroll">À propos de nous</a></li>
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

                    <div class="col-md-6 col-sm-6">
                         <img src="images/admin.jpg" class="img-responsive" alt="" id="photo">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         
                    <?php
                         if(isset($_GET['login_err']))
                             {
                               $err = htmlspecialchars($_GET['login_err']);

                                 switch($err)
                                     {
                          case 'password':
                    ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                    <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
                         <form action="connexion_admin.php" method="post" id="appointment-form" role="form"  >

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>connexion</h2>
                              </div>

                              

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Nom d'utilisateur :</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Nom d'utilisateur :">
                                        <label for="Message">Mot de passe :</label>
                                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                                   </div>
                              </div>
                        </form>
                    </div>

               </div>
          </div>
          .
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
  #formulaire{
     background-color: #d3eaf1;
     border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
  }
   #appointment{
    
     background-color :#f0f2f5
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
    #photo{
     border-radius: 8px;
        box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
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