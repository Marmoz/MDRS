<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title><?= $metaTitle ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
-->



 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/css/material-dashboard.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/demo/demo.css" rel="stylesheet" />

 <!-- Bootstrap CSS CDN  -->


   <!--   Our Custom CSS -->


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">





    
 <link rel="stylesheet" href="res/iconic-bootstrap.css">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <!-- Optional theme 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
-->
    





    
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/stylesidebar.css') ?>" />
    
    
    
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('res/style.css') ?>" />


 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
 
    
  

    
    <style type="text/css">
        
        </style>

  <?php
    // Add any javascripts
    if( isset( $javascripts ) )
    {
      foreach( $javascripts as $js )
      {
        echo '<script src="' . $js . '"></script>' . "\n";
      }
    }

    if( isset( $final_head ) )
    {
      echo $final_head;
    }
  ?>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
<?php
if (isset($auth_role) ) {

    if ( $auth_role == 'admin' ) {  ?>
<nav id="sidebar" class="active">
            <div class="sidebar-header">
                <img id="logomadrassapp" src="<?php echo base_url('res/images/madrassapplogo3.png') ?>" >
            </div>

            <ul class="list-unstyled components">
                <p>Version Bêta</p>
                <li class="active">
                    
                    <a class="nav-link" href="<?= base_url('examples'). '/home' ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/home copie.png') ?>" />Tableau de bord</a>
                </li>
                <li>
                    <a href="<?= base_url('inscrit'). '/actuel' ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/insc.png') ?>" />Inscrits</a>
                </li>
                                <li>
                    <a href="<?= base_url('Etudiant'). '/allstudents' ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/classrooms.png') ?>" />Etudiants</a>
                </li>

                                
                <li>
                    <a href="<?= base_url('documents') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/docs.png') ?>" />Documents</a>
                </li>
             
                                


                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/modules.png') ?>" />Modules</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                            <a href="<?= base_url('Absence') ?>">Absences</a>
                        </li>
                            <li>
                            <a href="#">Notifications</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Inscrit') ?>">Paiement & Comptabilité</a>
                        </li>
                        
                        <li>
                            <a href="<?= base_url('Notedby') ?>">Plus de modules</a>
                        </li>
                        
                    </ul>
                </li>
               

                  <li>
                    <a href="<?= base_url('planning') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/planning.png') ?>" />Planning</a>
                </li>
                
               

                <li>
                    <a href="#adminSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/administration.png') ?>" />Administration</a>
                    <ul class="collapse list-unstyled" id="adminSubmenu">
                        <li>

                            <a href="<?= base_url('comporte') ?>">Configuration pédagogique</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Enseignant') ?>">Les enseignants</a>
                        </li>
                        <li>
                            <a href="<?= base_url('Etudiant') ?>">Gestion des Accès</a>
                        </li>
                    </ul>
                </li>
               
                                 <li>
                    <a href="<?= base_url('datanalytics') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/data.png') ?>" />Data Analytics</a>
                </li>

            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="<?= base_url('Helpsupport') ?>" class="download">Aide & Support</a>
                </li>
                <li>
                    <a href="#" class="article">by Marmooz</a>
                </li>
            </ul>
    </nav>

<?php  }

if ( $auth_role == 'student' ) {  ?>
<nav id="sidebar">
            <div class="sidebar-header">
                <img id="logomadrassapp" src="<?php echo base_url('res/images/madrassapplogo3.png') ?>" >
            </div>

            <ul class="list-unstyled components">
                <p>Version Bêta</p>
                <li class="active">
                    
                    <a class="nav-link" href="<?= base_url('examples'). '/home' ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/dashboard.svg') ?>" />Tableau de bord</a>
                </li>
 
           <li>


                    <a href="<?= base_url('etudiant/mynotes') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/book.svg') ?>" />Mes Notes</a>
                </li>

                  <li>
                    <a href="<?= base_url('planning') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/planning.png') ?>" />Mon Emploi du temps</a>
                </li>

                                
                <li>
                    <a href=""><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/docs.png') ?>" />Mes Documents</a>
                </li>
             
           <li>
                    <a href="#"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/credit-card.svg') ?>" />Mes Paiements</a>
                </li>


                                
                <li>
                    <a href="#"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/administration.png') ?>" />Mes Absences</a>
                </li>                            
                                   <li>
                    <a href="<?= base_url('Enseignant') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/organization.svg') ?>" />Mes Enseignants</a>
                </li>
                 <li>
                    <a href="<?= base_url('etudiant/myfiliere') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/clippy.svg') ?>" />Mes Inscriptions</a>
                </li>

            <li>
                    <a href="<?= base_url('etudiant/myfiliere') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/classrooms.png') ?>" />Mes Camarades</a>
                </li>
                    </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="<?= base_url('Helpsupport') ?>" class="download">Aide & Support</a>
                </li>
                <li>
                    <a href="#" class="article">by Marmooz</a>
                </li>
            </ul>
    </nav>
<?php  }


if ( $auth_role == 'teacher' ) {  ?>
<nav id="sidebar">
            <div class="sidebar-header">
                <img id="logomadrassapp" src="<?php echo base_url('res/images/madrassapplogo3.png') ?>" >
            </div>

            <ul class="list-unstyled components">
                <p>Version Bêta</p>
                <li class="active">
                    
                    <a class="nav-link" href="<?= base_url('examples'). '/home' ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/dashboard.svg') ?>" />Tableau de bord</a>
                </li>
                      <li>
                    <a href="<?= base_url('planning') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/planning.png') ?>" />Mon Emploi du temps</a>
                </li>

                 <li>
                    <a href="<?= base_url('Enseignant/mesEtudiants') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/clippy.svg') ?>" />Mes Etudiants</a>
                </li>

                 <li>
                    <a href="<?= base_url('Enseignant/mesNotes') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/book.svg') ?>" />Mes Notes</a>
                </li>

                   <li>
                    <a href="<?= base_url('Enseignant/mesInfos') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/credit-card.svg') ?>" />Mes Infos</a>
                </li>
                   <li>
                    <a href="<?= base_url('Enseignant/mesMatieres') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/docs.png') ?>" />Mes Matières</a>
                </li>

                                
                <li>
                    <a href="#"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/docs.png') ?>" />Mes Documents</a>
                </li>

             
             
          

                                
                <li>
                    <a href="#"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/images/administration.png') ?>" />Mes Absences</a>
                </li>                            
                                   <li>
                    <a href="<?= base_url('Enseignant') ?>"><img alt="Homeicon" height="25px" width="25px" src="<?php echo base_url('res/svg/organization.svg') ?>" />Mes Collegues</a>
                </li>
           

                            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="<?= base_url('Helpsupport') ?>" class="download">Aide & Support</a>
                </li>
                <li>
                    <a href="#" class="article">by Marmooz</a>
                </li>
            </ul>
    </nav>
<?php  }









}

?>
        

        <!-- Page Content  -->
        <div id="content">


  
<!--/.DEBUT CONTAINER -->

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>MadrassApp</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">

                                <a class="nav-link" href="<?= base_url('examples'). '/home' ?>">Accueil</a>
                            </li>
                            
                            
                            <?php


        if (isset( $auth_user_id ) ) { ?>
                            <li class="nav-item">
          <a class="nav-link" href="<?= base_url('examples') ?>">Mon compte</a>  </li>
<li class="nav-item">
          <a class="nav-link" href="<?= base_url('examples'). '/logout' ?>">Déconnexion</a>  </li>

          <?php }
          else { ?>
        <li class="nav-item">  <a class="nav-link" href="<?= base_url('examples'). '/home' ?>">Accéder au cloud</a>  </li>

        <?php  }
          # code...
        
    ?>

                          
                       <!--
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>







    
    
    
    

























<div class="container">



<div class="container homeadmin">
	<p>
<?php
echo 'Bienvenue Directeur ' . $auth_username;
?>	
</p>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
          <img alt="Homeicon" height="80px" width="80px" src="<?php echo base_url('res/images/studentzer.png') ?>" />

                  </div>
                  <p class="card-category">Nombre d'inscrits</p>
                  <h3 class="card-title"><?php echo count($listetudiants);?>
                    <small>Etudiants</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <a href="<?= base_url('inscrit'). '/actuel' ?>">Voir le détail</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
          <img alt="Homeicon" height="80px" width="80px" src="<?php echo base_url('res/images/teacherzer.png') ?>" />
                  </div>
                  <p class="card-category">Corps Professoral</p>
                  <h3 class="card-title"><?php echo count($listeenseignants);?>
                  <small>Enseignants</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> 
                                        <a href="<?= base_url('teach') ?>">Voir la Liste</a>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
          <img alt="Homeicon" height="80px" width="80px" src="<?php echo base_url('res/images/filierezer.png') ?>" />


                  </div>
                  <p class="card-category">Formations Certifiantes</p>
                  <h3 class="card-title"><?php echo count($listefilieres);?>
                      <small>Filières</small>

                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> 

                    <a href="<?= base_url('comporte') ?>">Voir plus</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
          <img alt="Homeicon" height="80px" width="80px" src="<?php echo base_url('res/images/dokzer.png') ?>" />
                  </div>
                  <p class="card-category">Modules Enseignés</p>
                  <h3 class="card-title"><?php echo count($listematieres);?>
                                      <small>Matières</small>

                    
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> <a href="<?= base_url('Matiere') ?>">Voir plus</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Evolution des Etudiants</h4>
                  <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> de Croissance pour les notes d'Examens</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Mis à jour il y a 2 minutes
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-warning">
                  <div class="ct-chart" id="websiteViewsChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Paiement Scolarité</h4>
                  <p class="card-category">Dernièrs ajouts comptabilité</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Mis à jour il y a 2 minutes
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Utilisation de l'App</h4>
                  <p class="card-category">Dernières Performances</p>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">access_time</i> Dernière mise à jour 1 semaine
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            
            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title">Dernières notes ajoutées</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-info">
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Matière</th>
                      <th>Filière</th>
                    </thead>
                    <tbody>
            <tr>
                        <td>1</td>
                        <td>Amine Bensouda</td>
                        <td>Maths</td>
                        <td>Réseaux Info</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Sara Ijilo</td>
                        <td>Anglais</td>
                        <td>Gestion d'entreprise</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Yassine Mapoi</td>
                        <td>Marketing</td>
                        <td>Marketing International</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Kamal Gailm</td>
                        <td>Finance</td>
                        <td>Web Master</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

             <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Dernièrs Documents</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-primary">
                      <th>ID</th>
                      <th>Nom</th>
                      <th>Matière</th>
                      <th>Filière</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Amine Bensouda</td>
                        <td>Maths</td>
                        <td>Réseaux Info</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Sara Ijilo</td>
                        <td>Anglais</td>
                        <td>Gestion d'entreprise</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Yassine Mapoi</td>
                        <td>Marketing</td>
                        <td>Marketing International</td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Kamal Gailm</td>
                        <td>Finance</td>
                        <td>Web Master</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




<!-- 

<h4> Data Analytics </h4>  
<h5>
<?php /*
echo '<br> Nb Etudiants ' . count($listetudiants);
echo ' <br> Nb Enseignants ' . count($listeenseignants);
echo ' <br>Nb Filieres ' . count($listefilieres);
echo ' <br>Nb Matières ' . count($listematieres);
echo ' <br>Actuel Inscrits ' . count($listetudiants) ;
*/
?>	</h5>

<h4> Paiement et Comptabilité (pourcentage etudiants à jours)  </p>  


<h4> Notifications  </h4>  


<h4> Documents Administratifs  </h4>  
<h4> Dernieres notes ajoutes </p>  


<h4> Calendrier planning </h4> 
<h4> Evenements  </h4>  

<h4> Lien Web site /Social </h4> 

<h4> Infos Ecole  </h4> 

<h4> Candidature Préinscription </h4>  

<h4> Documentation Support  </p>  

<h4> Mises à jours/Infos Madrassapp  </p>  


   
	Nombre de Filière
	Nombre de Matière
	Nombre d'Etudiants
	Nombre de d'inscrit (Actuel)
	Notifications
	Eleve du mois
	Etat Comptabilité
	Site Web
	FaceBook
	
	Calendrier


-->
</div>

</div>




<!--
  <footer class="zefooter">
     MadrassApp  &copy; <?php //  echo  date('Y') ?> Marmooz
  </footer> -->
</div>
</div>
  <!-- Latest compiled and minified JavaScript 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->

<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>



   <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>





  


<!-- ALLOY UI  -->

 <!--   Core JS Files   -->
  <script src="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Chartist JS -->
  <script src="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url('res/material-dashboard-html-v2.1.0') ?>/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>











   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>



    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });







        


    </script>


</body>
</html>
