<?php

$menukaart = array (
    'Eten' => array (
        'Appel1' => 10.95,
        'Appel2' => 10.95,
        'Appel3' => 10.95,
        'Appel4' => 10.95
    ),
    'Drinken' => array (
        'Cola1' => 2.00,
        'Cola2' => 2.00,
        'Cola3' => 2.00,
        'Cola4' => 2.00
    )
);

$titel = 'Menukaart';
echo "<h1>$titel</h1>";

foreach($menukaart as $menuSectie => $gerechten) {
    echo "<h2>$menuSectie</h2>";
    echo '<ul>';
    foreach($gerechten as $gerecht => $prijs ) {
        echo "<li>$gerecht - $prijs</li>";
    }
    echo '</ul>';
}

?>