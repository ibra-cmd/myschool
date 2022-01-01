<?php
/*require_once ('entete.php');
*/
?>
<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body class="">

<div class="container-fluid">


        <div class="row ">
            <div class="col-12 bg-light pt-5" style="height: 400px;width: 700px"  >
                <h4 class="text-center  jumbotron jumbotron-fluid  bg-primary text-light"> Inscription Etudient</h4>


                <form class="form-group text-center" method="post" action="universiteEnregistrementEtudient.php" enctype="multipart/form-data">
                    <ul class="nav navbar p-2 jumbotron jumbotron-fluid ">

                        <li>
                            <div class="form-group">
                                <label class="control-label">Prenom

                                    <input type="text" name="Prenom" id="Prenom" class="form-control" required>
                                </label>
                            </div>
                        </li>

                        <li>
                            <div class="form-group">
                                <label class="control-label">Nom
                                    <input type="text" name="Nom" id="Nom" class="form-control" required>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label class="control-label ">Age
                                    <input type="number" name="Age"  id="Age" class="form-control" required>
                                </label>
                            </div>
                        </li>

                    </ul>

                    <ul class="nav navbar p-2 jumbotron jumbotron-fluid ">
                        <li>
                            <div class="form-group">
                                <label class="control-label ">Sexe
                                    <input  type="text" name="Sexe"  id="Sexe" class="form-check" required>
                                </label>
                            </div>
                        </li>

                        <li>
                            <div class="form-group">
                                <label class="control-label">Numero Parent
                                    <input type="number" name="numeroParent"  id="numeroParent" class="form-control" required>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label class="control-label">Numero Etudient
                                    <input type="number" name="numeroEtudient"  id="numeroEtudient" class="form-control"required>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar p-2 jumbotron jumbotron-fluid ">
                        <li>
                            <div class="form-group">
                                <label class="control-label">Adresse Email
                                    <input type="email" required   name="adresseEmail"  id="adresseEmail" class="form-control " required>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label class="control-label">Residence
                                    <input type="text" name="Residence"  id="Residence" class="form-control" required>
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label class="control-label">Nationalite
                                    <input type="text" name="Nationalite"  id="Nationalite" class="form-control" required>
                                </label>
                            </div>
                        </li>

                    </ul>
                    <ul class="nav navbar p-2 jumbotron jumbotron-fluid ">
                        <li>
                            <div class="form-group">
                                <label class="control-label">Diplome
                                    <input type="text" name="Diplome"  id="Diplome" class="form-control" required>
                                </label>
                            </div>
                        </li>

                        <li>
                            <div class="form-group">
                                <label class="control-label">Date Naissance
                                    <input type="date" name="dateNaissance"  id="dateNaissance" class="form-control" required>
                                </label>
                            </div>

                        </li>
                        <li>
                            <div class="form-group">
                                <label class="control-label">Date Inscription
                                    <input type="date" name="dateInscription"  id="dateInscription" class="form-control" required>
                                </label>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar p-2 jumbotron jumbotron-fluid  card">
                        <li>
                            <div class="form-control-range">
                                <label for="sel1">Filiere:</label>
                                <select class="form-control"  name="Filiere" id="Filiere"  required>
                                    <option>Gestion Entreprise</option>
                                    <option>Informatique de gestion</option>
                                    <option>Genie Informatique</option>
                                    <option>Finance Comptable</option>
                                    <option>logistique</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="form-control-range">
                                <label for="sel1">Classe:</label>
                                <select class="form-control"  name="Classe" id="Classe" required>
                                    <option>1er Annee Licence 1</option>
                                    <option>2e Annee Licence 2</option>
                                    <option>3e Annee Licence 3</option>
                                    <option>1er Annee Master 1</option>
                                    <option>2e Annee Master 2</option>
                                    <option>Doctorat</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar p-2 jumbotron jumbotron-fluid card bg-primary text-light">

                        <li>
                            <div class="form-control ">
                                <button class="btn btn-success " type="submit">Enregistre</button>
                                <input class="btn btn-secondary" type="Reset" value="remetre a zero" >
                                <a class="btn btn-danger  "  href="../fenetre/menu.php">Quitte</a>


                            </div>
                        </li>
                    </ul>
                </form>

            </div>
        </div>



    </div>
</div>
</body>
</html>
