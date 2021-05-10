<?php
require_once 'src/Fighter.php';

// First Labour : Heracles vs Nemean Lion
// use your Figher class here
//🧔 Héraclès, force de 20, dextérité de 6
$heracles = new Fighter("Héraclès", 25, 5);
echo 'Nom: ' . '🧔' . $heracles->getName() . '<br>';
echo 'Force:' . '💪' . $heracles->getStrenght() . '<br>';
echo 'Dexterity: ' . $heracles->getDexterity() . '<br>';
echo 'Life: ' . '💙' . $heracles->getLife() . '<br>';
echo '<br>';
//🦁 Héraclès, force de 20, dextérité de 6
$lionDeNemee = new Fighter("Lion de Némée", 25, 7);
echo 'Nom: ' . '🦁' . $lionDeNemee->getName() . '<br>';
echo 'Force:' . '💪' . $lionDeNemee->getStrenght() . '<br>';
echo 'Dexterity: ' . $lionDeNemee->getDexterity() . '<br>';
echo 'Life: ' . '💙' . $lionDeNemee->getLife() . '<br>';

echo $heracles->fight($lionDeNemee) . '<br>';
var_dump($heracles->fight($lionDeNemee));


echo '🧔' . $heracles->getName() . '💙' . $heracles->getLife() . '<br>';
echo '🦁' . $lionDeNemee->getName() . '💙' . $lionDeNemee->getLife() . '<br>';

$i = 1;
while ($heracles->getLife() >= 0 && $lionDeNemee->getLife() >= 0) {
    if ($heracles->getLife() == 0) {
        echo '🧔' . $heracles->getName() . '💀 est mort!' . '💙' . $heracles->getLife() . '<br>';
        echo '🦁' . $lionDeNemee->getName() . '🏆 est vainqueur!' . '💙' . $lionDeNemee->getLife() . '<br>';
        exit();
    } elseif ($lionDeNemee->getLife() == 0) {
        echo '🧔' . $lionDeNemee->getName() . '💀 est mort!' . '💙' . $lionDeNemee->getLife() . '<br>';
        echo '🦁' . $heracles->getName() . '🏆 est vainqueur!' . '💙' . $heracles->getLife() . '<br>';
        exit();
    } else {
        $heracles->fight($lionDeNemee);
        echo $heracles->getName() . '🧔' . $lionDeNemee->getName() . '💙🦁' . $lionDeNemee->getName() . ' : ' . $lionDeNemee->getLife(). '<br>';
        $lionDeNemee->fight($heracles);
        echo $lionDeNemee->getName() . '🦁' . $heracles->getName() . '💙🧔' . $heracles->getName() . ' : ' . $heracles->getLife(). '<br>';
        echo 'tour: ' . $i;
        $i++;
    
    }
}
