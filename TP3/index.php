<?php 
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
showImage($portrait1);
showImage($portrait2);
showImage($portrait3);
showImage($portrait4);
?>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" /> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" /> 
        <link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet"> 
        <link rel="stylesheet" href="assets/css/style.css" />
        <title>TP3</title>
    </head>
    <body>
     <?php 
     function showImage($array) {?>        
        <p><?php echo $array ['name']; ?></p>
        <p><?= $array ['firstname']; ?></p>
        <img src="<?= $array ['portrait'];?>"></p>        
        <?php } ?>    
    </body>       
</html>