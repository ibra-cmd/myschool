<?php
require_once('Conn.php');


if (isset($pdo)) {
    $pa= $pdo -> prepare("select * from etudient");
}

$pa->execute();

/*$requett=$pdo->prepare("select  sum(prixAchat) as totalPrixAchat, sum(TotalGeneral) as total from accesoires;");
$requett->execute();
*/
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet"  href="/css/bootstrap.min.css ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>
    <title>affiche</title>

</head>
<body class="" >
<?php
if(isset($_GET['verifie'])) {
$err = htmlspecialchars($_GET['verifie']);
switch ($err) {
case 'ok':
?>
<div class="alert alert-success">
    <strong>Success ,</strong>Colonne suppresion reussie !
</div>
<?php
            break;
        case 'cool':
            ?>
<div class="alert alert-success">
    <strong>Success ,</strong>modification reussie !
</div>
<?php
break;
}
}
?>
<div class="">

    <div class="jumbotron-fluid  text-center text-dark ">
        <h1 class="title ">Liste des Etudients </h1>
    </div>


    <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active " data-toggle="tab" href="#tout">Tout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#licence1">Licence 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#licence2">Licence 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#licence3">Licence 3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#master1">Master 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#master2">Master 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#doctorat">Doctorat</a>
            </li>
        </ul>
    <div class="fixed mt-2 ml-2">
        <a href="/php-file/etudient/inscrip_etudient.php" class="nav-item text-light  btn btn-success">Nouveau</a>
        <a href="/php-file/etudient/ListeEtudient.php" class="nav-item text-light  btn btn-primary">Actualiser</a>
        <a href="/php-file/fenetre/administration.php" class="nav-item text-light  btn btn-danger">Quitte</a>

    </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="tout" class="tab-pane active"><br>
                <div class="" >

                    <table class="table table-hover" id="table">
                        <tr>
                            <th>Matricule</th>
                            <th>PRENOM</th>
                            <th>NOM</th>
                            <th>AGE</th>
                            <th>SEXE</th>
                            <th>NUM P</th>
                            <th>NUM E</th>
                            <th>RESIDENCE</th>
                            <th>NATIONALITE</th>
                            <th>DIPLOME</th>
                            <th>FILIERE</th>
                            <th>CLASSE</th>
                            <th>DATE NA</th>
                            <th>DATE INSCR</th>
                            <th>EMAIL</th>

                        </tr>

                        <tbody class="body" >
                        <?php while($se=$pa->fetch()){?>
                            <tr>
                                <td class=""><?php echo($se['matricule_etudient'])?></td>
                                <td><?php echo($se['prenom'])?></td>
                                <td><?php echo($se['nom'])?></td>
                                <td><?php echo($se['age'])?></td>
                                <td><?php echo($se['sexe'])?></td>
                                <td><?php echo($se['num_parent'])?> </td>
                                <td><?php echo($se['num_etudient'])?> </td>
                                <td><?php echo($se['residence'])?> </td>
                                <td><?php echo($se['nationalite'])?> </td>
                                <td><?php echo($se['diplome_anterieur'])?> </td>
                                <td><?php echo($se['filiere'])?> </td>
                                <td><?php echo($se['classe'])?> </td>
                                <td><?php echo($se['date_naissance'])?> </td>
                                <td><?php echo($se['date_inscription'])?> </td>
                                <td style="width: 20px"><?php echo($se['adresse_email'])?> </td>
                                <td><a onclick="return confirm('vous voullez vraiment modifier')"; href="edite.php?matricule=<?php echo($se['matricule_etudient'])?>">Editer</a></td>
                                <td><a onclick="return confirm('vous voullez vraiment supprimer enregistrement')"; href="supprime.php?matricule=<?php echo($se['matricule_etudient'])?>">Suprimer</a></td>

                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div id="licence1" class="tab-pane fade"><br>

                <?php
                if (isset($pdo)) {
                $pa= $pdo -> prepare("select * from etudient where classe=?");

                }
                $un='1er Annee Licence 1';
                $pa->execute(array($un));

                ?>
                <div class="">

                    <div class="" >

                        <table id="table" class="table table-active">
                            <tr>
                                <th>Matricule</th>
                                <th>PRENOM</th>
                                <th>NOM</th>
                                <th>AGE</th>
                                <th>SEXE</th>
                                <th>NUM PARENT</th>
                                <th>NUM ETUDIENT</th>
                                <th>RESIDENCE</th>
                                <th>NATIONALITE</th>
                                <th>DIPLOME</th>
                                <th>FILIERE</th>
                                <th>CLASSE</th>
                                <th>DATE NAIS</th>
                                <th>DATE INSCRIP</th>
                                <th>ADRESSE EMAIL</th>

                            </tr>
                            <tbody class="body" >
                            <?php while($se=$pa->fetch()){?>
                                <tr>
                                    <td class=""><?php echo($se['matricule_etudient'])?></td>
                                    <td><?php echo($se['prenom'])?></td>
                                    <td><?php echo($se['nom'])?></td>
                                    <td><?php echo($se['age'])?></td>
                                    <td><?php echo($se['sexe'])?></td>
                                    <td><?php echo($se['num_parent'])?> </td>
                                    <td><?php echo($se['num_etudient'])?> </td>
                                    <td><?php echo($se['residence'])?> </td>
                                    <td><?php echo($se['nationalite'])?> </td>
                                    <td><?php echo($se['diplome_anterieur'])?> </td>
                                    <td><?php echo($se['filiere'])?> </td>
                                    <td><?php echo($se['classe'])?> </td>
                                    <td><?php echo($se['date_naissance'])?> </td>
                                    <td><?php echo($se['date_inscription'])?> </td>
                                    <td style="width: 20px"><?php echo($se['adresse_email'])?> </td>
                                    <td><a onclick="return confirm('vous voullez vraiment modifier')"; href="edite.php?matricule=<?php echo($se['matricule_etudient'])?>">Editer</a></td>
                                    <td><a onclick="return confirm('vous voullez vraiment supprimer enregistrement')"; href="supprime.php?matricule=<?php echo($se['matricule_etudient'])?>">Suprimer</a></td>

                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div id="licence2" class="tab-pane fade"><br>
                <?php
                if (isset($pdo)) {
                $pa= $pdo -> prepare("select * from etudient where classe=?");

                }
                $un='2e Annee Licence 2';
                $pa->execute(array($un));

                ?>
                <div class="">


                    <div class="" >

                        <table id="table" class="table table-active">
                            <tr >
                                <th>Matricule</th>
                                <th>PRENOM</th>
                                <th>NOM</th>
                                <th>AGE</th>
                                <th>SEXE</th>
                                <th>NUM PARENT</th>
                                <th>NUM ETUDIENT</th>
                                <th>RESIDENCE</th>
                                <th>NATIONALITE</th>
                                <th>DIPLOME</th>
                                <th>FILIERE</th>
                                <th>CLASSE</th>
                                <th>DATE NAIS</th>
                                <th>DATE INSCRIP</th>
                                <th>ADRESSE EMAIL</th>

                            </tr>
                            <tbody class="body" >
                            <?php while($se=$pa->fetch()){?>
                                <tr>
                                    <td class=""><?php echo($se['matricule_etudient'])?></td>
                                    <td><?php echo($se['prenom'])?></td>
                                    <td><?php echo($se['nom'])?></td>
                                    <td><?php echo($se['age'])?></td>
                                    <td><?php echo($se['sexe'])?></td>
                                    <td><?php echo($se['num_parent'])?> </td>
                                    <td><?php echo($se['num_etudient'])?> </td>
                                    <td><?php echo($se['residence'])?> </td>
                                    <td><?php echo($se['nationalite'])?> </td>
                                    <td><?php echo($se['diplome_anterieur'])?> </td>
                                    <td><?php echo($se['filiere'])?> </td>
                                    <td><?php echo($se['classe'])?> </td>
                                    <td><?php echo($se['date_naissance'])?> </td>
                                    <td><?php echo($se['date_inscription'])?> </td>
                                    <td style="width: 20px"><?php echo($se['adresse_email'])?> </td>
                                    <td><a onclick="return confirm('vous voullez vraiment modifier')"; href="edite.php?matricule=<?php echo($se['matricule_etudient'])?>">Editer</a></td>
                                    <td><a onclick="return confirm('vous voullez vraiment supprimer enregistrement')"; href="supprime.php?matricule=<?php echo($se['matricule_etudient'])?>">Suprimer</a></td>

                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="licence3" class="tab-pane fade"><br>
                <?php
                if (isset($pdo)) {
                $pa= $pdo -> prepare("select * from etudient where classe=?");

                }
                $un='3e Annee Licence 3';
                $pa->execute(array($un));

                ?>
                <div class="" >

                    <table id="table" class="table table-active">
                        <tr>
                            <th>Matricule</th>
                            <th>PRENOM</th>
                            <th>NOM</th>
                            <th>AGE</th>
                            <th>SEXE</th>
                            <th>NUM PARENT</th>
                            <th>NUM ETUDIENT</th>
                            <th>RESIDENCE</th>
                            <th>NATIONALITE</th>
                            <th>DIPLOME</th>
                            <th>FILIERE</th>
                            <th>CLASSE</th>
                            <th>DATE NAIS</th>
                            <th>DATE INSCRIP</th>
                            <th>ADRESSE EMAIL</th>

                        </tr>
                        <tbody class="body" >
                        <?php while($se=$pa->fetch()){?>
                            <tr>
                                <td class=""><?php echo($se['matricule_etudient'])?></td>
                                <td><?php echo($se['prenom'])?></td>
                                <td><?php echo($se['nom'])?></td>
                                <td><?php echo($se['age'])?></td>
                                <td><?php echo($se['sexe'])?></td>
                                <td><?php echo($se['num_parent'])?> </td>
                                <td><?php echo($se['num_etudient'])?> </td>
                                <td><?php echo($se['residence'])?> </td>
                                <td><?php echo($se['nationalite'])?> </td>
                                <td><?php echo($se['diplome_anterieur'])?> </td>
                                <td><?php echo($se['filiere'])?> </td>
                                <td><?php echo($se['classe'])?> </td>
                                <td><?php echo($se['date_naissance'])?> </td>
                                <td><?php echo($se['date_inscription'])?> </td>
                                <td style="width: 20px"><?php echo($se['adresse_email'])?> </td>
                                <td><a onclick="return confirm('vous voullez vraiment modifier')"; href="edite.php?matricule=<?php echo($se['matricule_etudient'])?>">Editer</a></td>
                                <td><a onclick="return confirm('vous voullez vraiment supprimer enregistrement')"; href="supprime.php?matricule=<?php echo($se['matricule_etudient'])?>">Suprimer</a></td>

                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="master1" class="tab-pane fade"><br>
                <?php
                if (isset($pdo)) {
                $pa= $pdo -> prepare("select * from etudient where classe=?");

                }
                $un='1er Annee Master 1';
                $pa->execute(array($un));

                ?>


                <div class="" >

                    <table id="table" class="table table-active">
                        <tr>
                            <th>Matricule</th>
                            <th>PRENOM</th>
                            <th>NOM</th>
                            <th>AGE</th>
                            <th>SEXE</th>
                            <th>NUM PARENT</th>
                            <th>NUM ETUDIENT</th>
                            <th>RESIDENCE</th>
                            <th>NATIONALITE</th>
                            <th>DIPLOME</th>
                            <th>FILIERE</th>
                            <th>CLASSE</th>
                            <th>DATE NAIS</th>
                            <th>DATE INSCRIP</th>
                            <th>ADRESSE EMAIL</th>

                        </tr>
                        <tbody class="body" >
                        <?php while($se=$pa->fetch()){?>
                            <tr>
                                <td class=""><?php echo($se['matricule_etudient'])?></td>
                                <td><?php echo($se['prenom'])?></td>
                                <td><?php echo($se['nom'])?></td>
                                <td><?php echo($se['age'])?></td>
                                <td><?php echo($se['sexe'])?></td>
                                <td><?php echo($se['num_parent'])?> </td>
                                <td><?php echo($se['num_etudient'])?> </td>
                                <td><?php echo($se['residence'])?> </td>
                                <td><?php echo($se['nationalite'])?> </td>
                                <td><?php echo($se['diplome_anterieur'])?> </td>
                                <td><?php echo($se['filiere'])?> </td>
                                <td><?php echo($se['classe'])?> </td>
                                <td><?php echo($se['date_naissance'])?> </td>
                                <td><?php echo($se['date_inscription'])?> </td>
                                <td style="width: 20px"><?php echo($se['adresse_email'])?> </td>
                                <td><a onclick="return confirm('vous voullez vraiment modifier')"; href="edite.php?matricule=<?php echo($se['matricule_etudient'])?>">Editer</a></td>
                                <td><a onclick="return confirm('vous voullez vraiment supprimer enregistrement')"; href="supprime.php?matricule=<?php echo($se['matricule_etudient'])?>">Suprimer</a></td>

                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="master2" class="tab-pane fade"><br>
                <?php
                if (isset($pdo)) {
                $pa= $pdo -> prepare("select * from etudient where classe=?");

                }
                $un='2e Annee Master 2';
                $pa->execute(array($un));

                ?>
                <div class="" >

                    <table id="table" class="table table-active">
                        <tr>
                            <th>Matricule</th>
                            <th>PRENOM</th>
                            <th>NOM</th>
                            <th>AGE</th>
                            <th>SEXE</th>
                            <th>NUM PARENT</th>
                            <th>NUM ETUDIENT</th>
                            <th>RESIDENCE</th>
                            <th>NATIONALITE</th>
                            <th>DIPLOME</th>
                            <th>FILIERE</th>
                            <th>CLASSE</th>
                            <th>DATE NAIS</th>
                            <th>DATE INSCRIP</th>
                            <th>ADRESSE EMAIL</th>

                        </tr>
                        <tbody class="body" >
                        <?php while($se=$pa->fetch()){?>
                            <tr>
                                <td class=""><?php echo($se['matricule_etudient'])?></td>
                                <td><?php echo($se['prenom'])?></td>
                                <td><?php echo($se['nom'])?></td>
                                <td><?php echo($se['age'])?></td>
                                <td><?php echo($se['sexe'])?></td>
                                <td><?php echo($se['num_parent'])?> </td>
                                <td><?php echo($se['num_etudient'])?> </td>
                                <td><?php echo($se['residence'])?> </td>
                                <td><?php echo($se['nationalite'])?> </td>
                                <td><?php echo($se['diplome_anterieur'])?> </td>
                                <td><?php echo($se['filiere'])?> </td>
                                <td><?php echo($se['classe'])?> </td>
                                <td><?php echo($se['date_naissance'])?> </td>
                                <td><?php echo($se['date_inscription'])?> </td>
                                <td style="width: 20px"><?php echo($se['adresse_email'])?> </td>
                                <td><a onclick="return confirm('vous voullez vraiment modifier')"; href="edite.php?matricule=<?php echo($se['matricule_etudient'])?>">Editer</a></td>
                                <td><a onclick="return confirm('vous voullez vraiment supprimer enregistrement')"; href="supprime.php?matricule=<?php echo($se['matricule_etudient'])?>">Suprimer</a></td>

                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="doctorat" class="tab-pane fade"><br>
                <?php
                if (isset($pdo)) {
                $pa= $pdo -> prepare("select * from etudient where classe=?");

                }
                $un='Doctorat';
                $pa->execute(array($un));

                ?>

                <div class="" >

                    <table id="table" class="table table-active">

                        <tr>
                            <th>Matricule</th>
                            <th>PRENOM</th>
                            <th>NOM</th>
                            <th>AGE</th>
                            <th>SEXE</th>
                            <th>NUM PARENT</th>
                            <th>NUM ETUDIENT</th>
                            <th>RESIDENCE</th>
                            <th>NATIONALITE</th>
                            <th>DIPLOME</th>
                            <th>FILIERE</th>
                            <th>CLASSE</th>
                            <th>DATE NAIS</th>
                            <th>DATE INSCRIP</th>
                            <th>ADRESSE EMAIL</th>

                        </tr>
                        <tbody class="body" id="tbody">
                        <?php while($se=$pa->fetch()){?>
                            <tr>
                                <td class=""><?php echo($se['matricule_etudient'])?></td>
                                <td><?php echo($se['prenom'])?></td>
                                <td><?php echo($se['nom'])?></td>
                                <td><?php echo($se['age'])?></td>
                                <td><?php echo($se['sexe'])?></td>
                                <td><?php echo($se['num_parent'])?> </td>
                                <td><?php echo($se['num_etudient'])?> </td>
                                <td><?php echo($se['residence'])?> </td>
                                <td><?php echo($se['nationalite'])?> </td>
                                <td><?php echo($se['diplome_anterieur'])?> </td>
                                <td><?php echo($se['filiere'])?> </td>
                                <td><?php echo($se['classe'])?> </td>
                                <td><?php echo($se['date_naissance'])?> </td>
                                <td><?php echo($se['date_inscription'])?> </td>
                                <td style="width: 20px"><?php echo($se['adresse_email'])?> </td>
                                <td><a onclick="return confirm('vous voullez vraiment modifier')"; href="edite.php?matricule=<?php echo($se['matricule_etudient'])?>">Editer</a></td>
                                <td><a onclick="return confirm('vous voullez vraiment supprimer enregistrement')"; href="supprime.php?matricule=<?php echo($se['matricule_etudient'])?>">Suprimer</a></td>

                            </tr>
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    <script>
        $(document).ready(function(){
            $("#recherche").on("keyup", function() {
                let value = $(this).val().toLowerCase();

                $("#table tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>






</body>
</html>