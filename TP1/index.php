<?php
//Création des regex pour les champs de saisies
$regexPhoneNumber = '/^[0-9]{10}$/';
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexDate = '/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}/';
$regexText = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!]+$/';
$regexMail = '/^[A-z0-9._%+-]+[\@]{1}[A-z0-9.-]+[\.]{1}[A-z]{2,4}$/';
$regexAddress = '/^[A-z\ 0-9\']+$/';
$regexNumberLetter = '/^[0-9A-z]+$/';
$regexbadgeNumber = '/^[0-9]+$/';
?> 
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet"> 
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>TP1</title>
    </head>
    <body>
        <?php if (empty($_POST)) {
            ?>
        <!--Formulaire d'inscription -->
            <h1>Formulaire</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <form action="index.php" method="POST">
                            <ul>
                                <li>
                                    <label for = "lastname">Nom : </label>
                                    <input type = "text" name = "lastname" class="form-control" placeholder="Nom" class="lastName"/>
                                </li>
                                <li>
                                    <label for = "firstname">Prénom : </label>
                                    <input type = "text" name = "firstname" class="form-control" placeholder="Prénom" />
                                </li>
                                <li>
                                    <label for = "birthDate">Date de naissance : </label>
                                    <input type = "date" name = "birthDate" class="form-control" placeholder="Date de naissance" />
                                </li>
                                <li>
                                    <label for = "originalCountry">Pays de naissance : </label>
                                    <input type = "text" name = "originalCountry" class="form-control" placeholder="Pays de naissance" />
                                </li>
                                <li>
                                    <label for = "nationality">Nationalité : </label>
                                    <input type = "text" name = "nationality" class="form-control" placeholder="Nationalité" />
                                </li>
                                <li>
                                    <label for = "address">Adresse : </label>
                                    <input type = "text" name = "address" class="form-control" placeholder="Adresse" />
                                </li>
                                <li>
                                    <label for = "mail">Email : </label>
                                    <input type = "email" name = "mail" class="form-control" placeholder="Mail" />
                                </li>
                                <li>
                                    <label for = "phoneNumber">Téléphone : </label>
                                    <input type = "text" name = "phoneNumber" class="form-control" placeholder="Téléphone" />
                                </li>
                                <li>
                                    <label for = "grade">Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur) : </label>
                                    <input type = "text" name = "grade" class="form-control" placeholder="Diplôme" />
                                </li>
                                <li>
                                    <label for = "poleEmploiNumber">Numéro pôle emploi : </label>
                                    <input type = "text" name = "poleEmploiNumber" class="form-control" placeholder="Numéro pôle emploi" />
                                </li>
                                <li>
                                    <label for = "badgeNumber">Nombre de badge : </label>
                                    <input type = "number" name = "badgeNumber"class="form-control" placeholder="0" />
                                </li>
                                <li>
                                    <label for = "codecademy">Liens codecademy : </label>
                                    <input type = "text" name = "codecademy" class="form-control" placeholder="http://..." />
                                </li>
                                <li>
                                    <label for = "superHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</label>
                                    <textarea rows = "4" cols = "50" name = "superHero" ></textarea>
                                </li>
                                <li>
                                    <label for = "hacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :    </label>
                                    <textarea rows = "4" cols = "50" name = "hacks" ></textarea>
                                </li>
                                <li>
                                    <label for = "progExp">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</label>
                                    <textarea rows="4" cols="50" name="progExp" ></textarea>
                                </li>
                            </ul>
                            <input type="submit" value="Envoyer !" id="bouton"/>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Fin du formulaire d'inscription -->
            <?php  //Configuration des regex et des message d'erreurs
        } else {
            if (isset($_POST['lastname'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['lastname'])) {
                        echo 'Nom : ' . $_POST['lastname'];
                    } else {
                        echo 'Veuillez renseignez vôtre nom.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['firstname'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['firstname'])) {
                        echo 'Prénom : ' . $_POST['firstname'];
                    } else {
                        echo 'Veuillez renseignez vôtre prénom.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['birthDate'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexDate, $_POST['birthDate'])) {
                        echo 'Date de naissance : ' . $_POST['birthDate'];
                    } else {
                        echo 'Veuillez renseignez vôtre Date de naissance.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['originalCountry'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['originalCountry'])) {
                        echo 'Pays de naissance : ' . $_POST['originalCountry'];
                    } else {
                        echo 'Veuillez renseignez vôtre Pays de naissance.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['nationality'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['nationality'])) {
                        echo 'Nationalité : ' . $_POST['nationality'];
                    } else {
                        echo 'Veuillez renseignez vôtre Nationalité.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['address'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexAddress, $_POST['address'])) {
                        echo 'Adresse : ' . $_POST['address'];
                    } else {
                        echo 'Veuillez renseignez vôtre Adresse.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['mail'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexMail, $_POST['mail'])) {
                        echo 'Email : ' . $_POST['mail'];
                    } else {
                        echo 'Veuillez renseignez vôtre Email.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['phoneNumber'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexPhoneNumber, $_POST['phoneNumber'])) {
                        echo 'Téléphone : ' . $_POST['phoneNumber'];
                    } else {
                        echo 'Veuillez renseignez vôtre numéro de Téléphone.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['grade'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['grade'])) {
                        echo 'Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur) : ' . $_POST['grade'];
                    } else {
                        echo 'Veuillez renseignez vôtre niveau d\'étude.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['poleEmploiNumber'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexNumberLetter, $_POST['poleEmploiNumber'])) {
                        echo 'Numéro pôle emploi : ' . $_POST['poleEmploiNumber'];
                    } else {
                        echo 'Veuillez renseignez vôtre Numéro pôle emploi.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['badgeNumber'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexbadgeNumber, $_POST['badgeNumber'])) {
                        echo 'Nombre de badge : ' . $_POST['badgeNumber'];
                    } else {
                        echo 'Veuillez renseignez vôtre Nombre de badges.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['codecademy'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['codecademy'])) {
                        echo 'Liens codecademy : ' . $_POST['codecademy'];
                    } else {
                        echo 'Veuillez renseignez vôtre Liens codecademy.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['superHero'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['superHero'])) {
                        echo 'Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? ' . $_POST['superHero'];
                    } else {
                        echo 'Veuillez renseignez vôtre réponse.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['hacks'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['hacks'])) {
                        echo 'Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) ' . $_POST['hacks'];
                    } else {
                        echo 'Veuillez renseignez vôtre histoire.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['progExp'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['progExp'])) {
                        echo 'Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ? ' . $_POST['progExp'];
                    } else {
                        echo 'Veuillez renseignez vôtre expérience.';
                    }
                    ?>
                </p>
                <?php //Fin de la Configuration des regex et des message d'erreurs
            }
        }
        ?>
    </body>
</html>
