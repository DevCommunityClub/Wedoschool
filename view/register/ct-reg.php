<?php
try{
  $bdd = new PDO('mysql:host=localhost;dbname=wedoschool;charset=utf8','root','');
}
catch(Exeption $e){
    die('Erreur :'.$e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM `users` WHERE nom = :nom AND mail = :mail');
$req->execute(array(
    'nom' => $_POST["nom"],
    'mail' => $_POST["mail"]
));

$a = $req->fetch();
$req->closeCursor();

if($a){
    echo "CETTE UTILISATEUR EXISTE DEJA";
}
else{
    $req1 = $bdd->prepare('INSERT INTO users(nom,mail) VALUES(:nom,:mail)');
    $req1->execute(array(
        'nom' => $_POST["nom"],
        'mail' =>$_POST["mail"]
    ));
    $req1->closeCursor();
}

//header('Location: ');
?>
