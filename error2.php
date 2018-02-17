<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Errors</title>
</head>
<body>
    <strong>Exercice</strong> : Corrigez toutes les erreurs !
    <br/>

    <?php
        error_reporting(E_ALL);

        echo "<h2> Quelques fonctions : </h2>";

        function newLine1() {
            echo "<br>";
        };

        $NewLine2 = function () { echo "</br>"; };

        echo "Les fonctions NewLine1 et NewLine2 permettent de passer à la ligne ";
        echo newLine1();
        echo $NewLine2();

        function displayType ( $string )
        {
            echo "La variable vaut : string et est de type : ". gettype($string);
            echo newLine1();
        }

        echo "La fonction displayType permet d'afficher le type d'une variable :";
        echo newLine1();

        $_var = "PHP";
        $type = displayType($_var);
        $_élément = "Or";
        displayType($_élément);
        $Number = 1.2;
        displayType($Number);

        echo "<h2> Conversions de types : </h2>";

        $a = "3.14159 voilà pi"; 
        displayType($a); 
        newLine1();
        $b = (double)$a; 
        displayType($b); 
        newLine1();
        $c = (int)$a; 
        displayType($c); 
        newLine1();
        $d = (boolean)$a; 
        displayType($d); 
        newLine1();
        $e = $a + $b; 
        displayType($e); 
        newLine1();
        $f = $a . $b; 
        displayType($f); 
        newLine1();

        echo "<h2>Structure de contrôle</h2>";

        if ($a === $b) {
            echo "<strong>$a est égal à $b.</strong>";
        }
        if ($a !== $b) {
            echo "<strong>$a n'est pas égal à $b.</strong>";
        }

        echo "<h2>Tableaux et parcours de tableaux</h2>";

        $g = array(1=>"bonjour", "2"=>"monde");
        var_dump($g); newLine1();
        $h = array('animal'=>'chat', 'couleur'=>'rouge');
        var_dump($h);
        newLine1();
        $i = 'animal';
        echo($g[1].' '.$h[$i]); 
        newLine1();
        foreach ($h as $key => $value){
            echo "la valeur de la clé $key est $value <br />";
        }
        

        echo "<h2>Chaînes de caractères et commande <strong>echo</strong> </h2>";

        echo(1); // utilisation avec parenthèses
        echo 1;  // utilisation sans parenthèses
        newLine1();
        $animal = $i;
        $j = "l'animal que je préfère est le ". $h[$animal];
        $k = " ! ";
        echo $j.$k; newLine1(); // concaténation des 2 chaînes de caractères
        echo $j,$k; newLine1(); // utilisation de 'echo' pour afficher plusieurs chaînes
        echo "la valeur de $h[i]  est $h[$animal]";
        echo "<h2>Une fonction</h2>";

        function flip($chaine) {
            $chainebis = $chaine;
            $n=sizeof($chaine);
            foreach ($chaine as $chain){
                $chainebis[$i]=$chain;
            }              
            return $chainebis;
        }

        echo(flip('abcde')); 
        newLine1();

        $same = (flip('abcde') === strrev('abcde')) ? true : false;
        var_dump($same);

        echo "<h2>Et un formulaire</h2>";

        echo '<form action="????" method="get">
                <input type="text" name="lel">
                <input type="submit" value="????">
              </form>';

        
            echo isset($_GET["????"]) ? "Vous n'avez rien tapé" : "Vous avez tapé <em>${$_GET["????"]}</em>";

    ?>


</body>
</html>