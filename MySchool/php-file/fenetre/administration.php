<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySchool</title>
    <link rel="stylesheet" href="../../css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css" >
    <link rel="stylesheet" href="../../css/index.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</head>
<body class="bodyindex">
<!--Header-->
    <div class="bg-light">
        <header class="card-header ">
          <div class="row navbar ">
              <h2 class="col-md-4 nav-item">SUP IGA MALI</h2>
              <li class="offset-md-3 col-auto nav "><a href="acceuil.php">Acceuil</a></li>
              <li class="col-auto nav"><a href="../securite/securite.php">Administration</a></li>
              <li class="col-auto nav"><a href="etudient.php" >Etudient</a></li>
              <li class="col-auto nav"><a href="/php-file/securite/deconnexion.php" >Logout</a></li>
          </div>
        </header>
    </div>
<!--section image-->


<div class=" container-fluid p-4">
    <div class="row">
        <div class="offset-1"></div>
        <div class="col-10 ">
            <h3 class="text-center  jumbotron jumbotron-fluid  bg-light"> Universite </h3>
            <hr class="bg-warning">


                <ul class="nav navbar p-3 jumbotron jumbotron-fluid bg-success ">

                    <li class="p-2"><button class="btn btn-outline-success   bg-warning"><a class="nav nav-link nav-item text-light"  aria-expanded="false" href="menu.php">Nouvel Enregistrement </a></button></li>

                    <li class="p-2"><button class="btn btn-outline-light bg-info "><a class="nav nav-link nav-item text-light   "  href="../etudient/ListeEtudient.php">Liste Etudient</a></button></li>
                    <li class="p-2"><button class="btn btn-outline-light  bg-info "><a class="nav nav-link nav-item text-light  " href="../proffeseur/listeProffeseur.php">Liste Proffeseur</a></button></li>
                    <li class="p-2"><button class="btn btn-outline-light  bg-info"><a class="nav nav-link nav-item text-light " href="../personnelAdministrative/listePersonnelAdministrative.php">liste Personnel Administratif</a></button></li>
                </ul>
                <ul class="nav navbar p-3 jumbotron jumbotron-fluid bg-warning">

                <!--    <li class="p-2"><button class="btn btn-outline-danger bg-secondary"><a class="nav nav-link nav-item text-light " href="menu2.php">Nouvel Payement </a></button></li>

                    <li class="p-2"><button class="btn btn-outline-primary bg-secondary"><a class="nav nav-link nav-item text-light ">Payement Fournisseur</a></button></li>
                  -->
                    <li class="p-2"><button class="btn btn-outline-success bg-success"><a  href="menu2.php" class="nav nav-link nav-item text-light ">Gestion  Salaire </a></button></li>

                    <li class="p-2"><button class="btn btn-outline-light bg-info"><a class="nav nav-link nav-item text-light ">Gestion des Notes</a></button></li>
                    <li class="p-2"><button class="btn btn-outline-light bg-info"><a class="nav nav-link nav-item text-light ">Gestion des Emploi du Temps</a></button></li>
                    <li class="p-2"><button class="btn btn-outline-light bg-info"><a class="nav nav-link nav-item text-light ">Bibliotheque </a></button></li>

                </ul>

           <!-- <ul class="nav navbar p-3 jumbotron jumbotron-fluid bg-warning">

                <li class="p-2"><button class="btn btn-outline-warning"><a class="nav nav-link nav-item text-light ">Premiere Cycle</a></button></li>
                <li class="p-2"><button class="btn btn-outline-info"><a class="nav nav-link nav-item text-light ">Seconde Cycle</a></button></li>
                <li class="p-2"><button class="btn btn-outline-warning"><a class="nav nav-link nav-item text-light ">Lyce Cycle</a></button></li>
                <li class="p-2"><button class="btn btn-outline-info"><a class="nav nav-link nav-item text-light ">Universite Cycle</a></button></li>
            </ul>
        -->

            <h3 class="text-center  jumbotron jumbotron-fluid  bg-light"> Universite  </h3>
        </div>






        </div>
        <div class="offset-1"></div>
    </div>


</body>
</html>