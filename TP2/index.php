<?php //Création des regex pour les champs de saisies
$regexName = '/^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-]+$/';
$regexAge = '/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}/';
$lastname = '';
$firstname = '';
$age = '';
$society = '';

if (!empty($_POST['lastanme'])) {
    $lastname = $_POST['lastname'];
}
if (!empty($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
}
if (!empty($_POST['age'])) {
    $age = $_POST['age'];
}
if (!empty($_POST['society'])) {
    $society = $_POST['society'];
}
?> 
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet"> 
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>TP2</title>
    </head>
    <body>
        <?php if (empty($_POST)) {
            ?>
         <!--Formulaire d'inscription -->
            <h1>Formulaire</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <form method="POST" class="bouton">
                            <select name="civility" class="bouton">  
                                <option value="disabled selected">Veuillez séléctionner vôtre civilié</option>
                                <option>Madame</option>
                                <option>Mademoiselle</option>
                                <option>Monsieur</option>
                            </select>
                            <ul class="lastName">
                                <li>
                                    <label for = "lastname">Nom : </label>
                                    <input type = "text" name = "lastname"  class="form-control" placeholder="Nom" />
                                </li>
                                <li>
                                    <label for = "firstname">Prénom : </label>
                                    <input type = "text" name = "firstname"  class="form-control" placeholder="Prénom" />
                                </li>
                                <li>
                                    <label for = "birthDay">Age : </label>
                                    <input type = "text" name = "birthDate" class="form-control" placeholder="Age" />
                                </li>
                                <li>
                                    <label for = "originalCountry">Société : </label>
                                    <input type = "text" name = "originalCountry" class="form-control" placeholder="Société" />
                                </li>
                            </ul>
                            <input type="submit" value="Envoyer !" id="bouton"/>
                        </form>
                    </div>
                </div>
            </div>
             <!-- Fin du formulaire d'inscription -->
            <?php //Configuration des regex et des message d'erreurs
        } else {
            if (isset($_POST['lastname'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexName, $_POST['lastname'])) {
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
                    if (preg_match($regexName, $_POST['firstname'])) {
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
                    if (preg_match($regexAge, $_POST['birthDate'])) {
                        echo 'Age : ' . $_POST['birthDate'] . 'ans';
                    } else {
                        echo 'Veuillez renseignez un age valide.';
                    }
                    ?>
                </p>
                <?php
            }
            if (isset($_POST['societe'])) {
                ?>
                <p>
                    <?php
                    if (preg_match($regexText, $_POST['originalCountry'])) {
                        echo 'Société : ' . $_POST['originalCountry'];
                    } else {
                        echo 'Veuillez renseignez le nom de vôtre société.';
                    }
                    ?>
                </p>
                <?php  //Fin de la Configuration des regex et des message d'erreurs
            }
        }
        ?>
    </body>
</html>