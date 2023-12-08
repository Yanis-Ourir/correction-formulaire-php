<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="">
</head>
<body>
   
<!-- Exercice 1
Créer un formulaire demandant le nom et le prénom. 
Ce formulaire doit rediriger vers la page user.php avec la méthode GET. -->

<!-- // Exercice 5
// Créer un formulaire sur la page index.php avec :

//     Une liste déroulante pour la civilité (Mr ou Mme)
//     Un champ texte pour le nom
//     Un champ texte pour le prénom

// Ce formulaire doit rediriger vers la page index.php.
// Vous avez le choix de la méthode. -->


<!-- // Exercice 6
// Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
// Utiliser qu'une seule page. -->

<?php

$var1 = '';
empty($var1); // true, je vérifie que la variable est vide
!empty($var1); // false, je vérifie que la variable est différente de vide
isset($var1); // true, je vérifie que la variable existe


if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['gender'])) {
    echo "<p>" . $_POST['prenom'] . $_POST['nom'] . $_POST['gender'];
} else {

?>
    <form action='' method='post'> 
         <label>Prénom </label>
         <input type="text" placeholder="votre prénom" name="prenom">
 
         <label>Nom de famille</label>
         <input type="text" placeholder="" name="nom">

         <select name="gender">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
        </select>
    
 
         <button type="submit" name="submit">Envoyer</button>
        
     </form>


<?php  } ?> 



<script>
    console.log('bonjour');
</script>
</body>
</html>


<?php 


?>