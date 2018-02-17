<?php
// 1 : Créer une fonction qui prend en entrée une phrase et qui retourne un tableau contenant des sous-chaînes de notre phrase en utilisant l’espace comme séparateur.

function explodeSentence($string) {
    return explode(" ", $string);
}
var_dump(explodeSentence("Un petit test")); echo "<br/><br/>";

// 2 : Créer une fonction qui fait exactement l’inverse de la fonction 1. Soit qui retourne une phrase à partir d’un tableau.

function implodeArray($array) {
    return implode(" ", $array);
}
var_dump(implodeArray(explodeSentence("Un petit test"))); echo "<br/><br/>";

// 3 : A l’aide des deux fonctions précédentes, vous allez devoir créer plusieurs fonctions afin
// qu’à partir d’une phrase, elles répondent aux attentes suivantes :

//	A ) Chaque mot de la phrase doit commencer par une majuscule.
function functionA($string) {
    return $array = ucwords($string);
}
var_dump(functionA("un petit test")); echo "<br/><br/>";

//	B ) Classer les mots de la phrase par ordre alphanumérique.
function functionB($string) {
    $toBeMod = explodeSentence($string); natcasesort($toBeMod); return implodeArray($toBeMod);
}
var_dump(functionB("Un petit test Légèrement 5 plus long avec Des numéros 3 au millieu !")); echo "<br/><br/>";

//	C ) Inverser la phrase
function functionC($string) {
    $rev = explodeSentence($string); array_reverse($rev); return implodeArray($rev);
}
var_dump(functionC("Un petit test Légèrement 5 plus long avec Des numéros 3 au millieu !")); echo "<br/><br/>";

//	D ) Compare la phrase à une autre phrase et donne tous les mots qui sont présents dans la première phrase et qui sont aussi présent dans la seconde.
function functionD($string1, $string2) {
    return $lel = implodeArray(array_diff($arr = explodeSentence($string1), $arr1 = explodeSentence($string2)));
}
var_dump(functionD("Un petit test Légèrement 5 plus long avec Des numéros 3 au millieu !", "Un long petit test")); echo "<br/><br/>";

$concat = function ($string){
    return $string . ",";
};
//	E ) Ajouter une virgule après chaque mot de la phrase
function functionE($string) {
    $arrE = explodeSentence($string); array_walk($arrE, "concat");
    return implodeArray($arrE);
}
var_dump(functionE("Un petit test Légèrement 5 plus long avec Des numéros 3 au millieu !")); echo "<br/><br/>";

//	F ) Retourner un mot issu de la phrase alléatoirement.
function functionF($string) {
    $arrF = explodeSentence($string);
    return $value = $arrF[random_int(0, sizeof($arrF)-1)];
}
var_dump(functionF("Un petit test Légèrement 5 plus long avec Des numéros 3 au millieu !")); echo "<br/><br/>";


?>