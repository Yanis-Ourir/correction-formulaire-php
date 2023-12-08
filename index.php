<?php

// Exercice 1
// Faire une page index.php. 
//Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
// index.php?lastname=Nemare&firstname=Jean


if(isset($_GET['lastname']) && isset($_GET['firstname'])) {
   
    echo "<p>" . $_GET['lastname'] . $_GET['firstname'] . "</p>";
}




// Exercice 2
// Faire une page index.php. 
//Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : 
// index.php?lastname=Nemare&firstname=Jean

if(isset($_GET['age'])) {
    $age = $_GET['age'];
    echo $age;
} else {
    echo "<p>L'age n'a pas été défini"; 
}





// Exercice 3
// Faire une page index.php. 
//Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
// index.php?startDate=2/05/2016&endDate=27/11/2016



// isset = 
// empty = 

if(isset($_GET['startDate']) && isset($_GET['endDate']) &&  !empty($_GET['startDate'])) {
    echo $_GET['startDate'] . $_GET['endDate'];
} else {
    echo "Je n'ai pas récupéré de date";
}





// Exercice 4
// Faire une page index.php. 
//Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
// index.php?language=PHP&server=LAMP

if(isset($_GET['language']) && isset($_GET['server'])) {
    echo $_GET['language'] . $_GET['server'];
}



// Exercice 5
// Faire une page index.php. 
//Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
// index.php?week=12

if(isset($_GET['week'])) {
    echo $_GET['week'];
}




// Exercice 6
// Faire une page index.php. 
//Tester sur cette page que tous les paramètres de cette URL existent et les afficher: 
// index.php?building=12&room=101


// PHP - Les formulaires

// Vous devez agrémenter votre code avec de l'HTML 5 valide (DOCTYPE, ....)
// Exercice 1

// Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode GET.
// Exercice 2

// Créer un formulaire demandant le nom et le prénom. Ce formulaire doit rediriger vers la page user.php avec la méthode POST.

// Exercice 3
// Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.
// Exercice 4
// Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.

// Exercice 5
// Créer un formulaire sur la page index.php avec :

//     Une liste déroulante pour la civilité (Mr ou Mme)
//     Un champ texte pour le nom
//     Un champ texte pour le prénom

// Ce formulaire doit rediriger vers la page index.php.
// Vous avez le choix de la méthode.

// Exercice 6

// Avec le formulaire de l'exercice 5, Si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.
// Utiliser qu'une seule page.










