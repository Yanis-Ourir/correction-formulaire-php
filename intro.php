<?php
// Exercice 1

// Créer une variable et l'initialiser à 0.
// Tant que cette variable n'atteint pas 10, il faut :

//     l'afficher
//     l'incrementer

$number = 0;

for($number; $number <= 10; $number++) {
    echo "<p>" . $number . "</p>";
}






// Exercice 2

// Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
// Tant que la première variable n'est pas supérieure à 20 :

//     multiplier la première variable avec la deuxième
//     afficher le résultat
//     incrementer la première variable

$var1 = 0;
$var2 = 20;

for($var1; $var1 <= 20; $var1++) {
    echo "<p>" . $var1 * $var2 . "</p>";
}


// Exercice 3

// Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
// Tant que la première variable n'est pas inférieure ou égale à 10 :

//     multiplier la première variable avec la deuxième
//     afficher le résultat
//     décrémenter la première variable

$number1 = 100;
$number2 = 50;

for($number1; $number > 10; $number--) {
    echo "<p>" . $number1 * $number2 . "</p>";
}



// Exercice 4

// Créer une variable et l'initialiser à 1.
// Tant que cette variable n'atteint pas 10, il faut :

//     l'afficher
//     l'incrementer de la moitié de sa valeur

$number4 = 1;

for($number4; $number4 <= 10; $number4 += $number4 / 2) {
    echo "<p>" . $number4 . "</p>";
}


// Exercice 5
// En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.

for($i = 1; $i <= 15; $i++) {
    echo "<p>" . $i . " On y arrive presque</p>";
}

// Exercice 6
// En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.

for($i = 20; $i >= 0; $i--) {
    echo "<p>" . $i . " C'est presque bon</p>";
}


// Exercice 7
// En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.

for($i = 1; $i <= 100; $i+= 15) {
    echo "<p>" . $i . " On tient le bon bout</p>";
}


// Exercice 8
// En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.

for($i = 200; $i >= 0; $i -= 12) {
    echo "<p>" . $i . " Enfin!!!</p>";
}



// FONCTIONS


 echo "<h1> FONCTIONS </h1>";

//  Exercice 1
// Faire une fonction qui retourne true.

function returnTrue() {
    return true;
}

returnTrue();

// Exercice 2
// Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
$hello = "fdsbhfsbh";
function chaine($hello) {
    return $hello;
}
echo chaine("hello");
chaine("Bonjour");
// Exercice 3
// Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines

function chaine2($prenom, $nom) {
    return "<p>" . $prenom . " " . $nom . "</p>";
}

echo chaine2("turan", "kumbasar"); 



// Exercice 4
// Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
//     Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
//     Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
//     Les deux nombres sont identiques si les deux nombres sont égaux

function checkNumbers($a, $b) {
    if($a > $b) {
        return "<p>le premier nombre est plus grand que le deuxième</p>";
    } elseif ($a < $b) {
        return "<p>le premier nombre est plus petit que le deuxième</p>";
    } else {
        return "<p>Les deux nombres sont identiques</p>";
    }
}

echo checkNumbers(30, 30);
echo checkNumbers(3, 30);
echo checkNumbers(30, 3);


// Exercice 5
// Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.

function concatenation($number, $string) {
    return "<p>" . $number . " " . $string . "</p>"; 
}

echo concatenation(6, "airpods");


// Exercice 6

// Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
// "Bonjour" + nom + prénom + ",tu as" + age + "ans".

function hello($nom, $prenom, $age) {
    return "<p>Bonjour" . $nom . " " . $prenom . " tu as " . $age . " ans</p>"; 
}

echo hello("ourir", "yanis", 24);
// Exercice 7
// Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :

//     Homme
//     Femme

// La fonction doit renvoyer en fonction des paramètres :

//     Vous êtes un homme et vous êtes majeur
//     Vous êtes un homme et vous êtes mineur
//     Vous êtes une femme et vous êtes majeur
//     Vous êtes une femme et vous êtes mineur
// Gérer tous les cas.

function checkGender($age, $gender) {
    if($age >= 18 && $gender === 'homme') {
        return "<p>Vous êtes un homme et vous êtes majeur</p>" ;
    } elseif($age <= 18 && $gender === 'homme') {
        return "<p>Vous êtes un homme et vous êtes mineur</p>" ;
    } elseif($age >= 18 && $gender === 'femme') {
        return "<p>Vous êtes une femme et vous êtes majeur</p>" ;
    } elseif ($age <= 18 && $gender === 'femme'){
        return "<p>Vous êtes une femme et vous êtes mineur</p>" ;
    }
}

echo checkGender(18, 'femme');
echo checkGender(15, 'femme');
echo checkGender(20, 'homme');
echo checkGender(15, 'homme');

// Exercice 8

// Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
// Tous les paramètres doivent avoir une valeur par défaut.

function sumNumbers($number1 = 1, $number2 = 2, $number3 = 3) {
    return $number1 + $number2 + $number3;
}

echo sumNumbers(10, 5, 4);
echo sumNumbers();


// -----------TABLEAUX ----------------

echo "<h1> Tableaux </h1>";

// Exercice 1

// Créer un tableau months et l'initialiser avec les valeurs suivantes :

//     janvier
//     février
//     mars
//     avril
//     mai
//     juin
//     juillet
//     aout
//     septembre
//     octobre
//     novembre
//     décembre

$months = [
    'janvier', 
    'février', 
    'mars',
    'avril', 
    'mai', 
    'juin', 
    'juillet', 
    'aout', 
    'septembre',
    'octobre',
    'novembre',
    'décembre'
];

var_dump($months);


// Exercice 2
// Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.

echo "<p>" . $months[2] . "</p>";

// Exercice 3
// Avec le tableau de l'exercice , afficher la valeur de l'index 5.

echo "<p>" . $months[5] . "</p>";


// Exercice 4
// Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.

$months[7] = 'août';

echo $months[7];

// Exercice 5
// Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.

$departements = [
        69 => 'Rhone',
        59 => 'Nord',
        01 => 'Ain',
        75 => 'Paris',
        91 => 'L\'esonne'
];


print_r($departements);




// Exercice 6
// Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
echo $departements[59]; // Nord

// Exercice 7
// Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.

// $departements = [51 => 'Reims'];
$departements[51] = 'Reims';

// Exercice 8
// Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

foreach($months as $month) {
    echo "<p>" . $month . "</p>";
}

// Exercice 9
// Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.

foreach($departements as $departement) {
    echo "<p>" . $departement . "</p>";
}


// Exercice 10
// Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
// Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département


foreach($departements as $key => $value) {
    echo "<p>Le département " . $value . " à le numéro " . $key . "</p>"; 
}





?>