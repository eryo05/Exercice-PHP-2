<?php
$age = 16;

if ($age >= 18){
    echo "vous etes majeur";
}
else echo "vous etes mineur"

?>

<?php

$isEasy = true;

if ($isEasy){
    echo "<br> c'est facile";
}
else echo "<br> c'est difficile";

?>

<?php

$isEasy = false;

echo ($isEasy) ? "<br>c'est facile" : "<br> c'est difficile ";
?>

<?php
$gender = "femme";
$age = 18;

if ($gender == "homme" && $age >= 18) {
    echo "vous etes un homme et vous etes majeur";
}
else if ($gender == "homme" && $age < 18) {
    echo "vous etes un homme et vous etes mineur";
}
else if ($gender == "femme" && $age < 18) {
    echo "vous etes une femme et vous etes mineur";
}
else if ($gender == "femme" && $age >= 18) {
    echo "vous etes une femme et vous etes majeur";
}
?>

<?php

$magnitude = 8;

switch ($magnitude) // on indique sur quelle variable on travaille
{ 
    case 1: // dans le cas où $note vaut 0
        echo "<br>Micro-séisme impossible à ressentir.";
    break;
    
    case 2: // dans le cas où $note vaut 5
        echo "<br>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;
    
    case 3: // dans le cas où $note vaut 7
        echo "<br>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;
    
    case 4: // etc. etc.
        echo "<br>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;
    
    case 5:
        echo "<br>Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    break;
    
    case 6:
        echo "<br>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;
    
    case 7:
        echo "<br>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;

    case 8:
        echo "<br>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;

    case 9:
        echo "<br>Séisme capable de tout détruire sur une très vaste zone.";
    break;

    default:
        echo "<br>Désolé, je n'ai pas de message à afficher pour cette note";
}
?>

<?php 
$gender = "homme";

if ($gender == "homme"){
    echo "<br> c'est un develloppeur !!!";
}
else if ($gender == "femme") {
    echo "<br> c'est une develloppeuse !!!";
}
?>

<?php
$age = 16;

if ($age >= 18){
    echo "Tu es majeur";
}
else echo "Tu n'est pas majeur"

?>

<?php
$isOk = false;
if ($isOk == false) {
    echo "<br> c'est pas bon !!!";
}
else echo "<br> c'est ok ";
?>
<?php
$isOk = 13;
if ($isOk){
    echo "<br> c'est ok !!!";
}
else echo "<br> c'est pas bon !!!";
?>