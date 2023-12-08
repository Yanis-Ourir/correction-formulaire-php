<?php

if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['gender'])) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $gender = $_POST['gender'];
    echo $prenom . $nom . $gender;
} else {
    echo "Rien";
}

