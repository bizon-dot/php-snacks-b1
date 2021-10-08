<!-- 

    ## Snack 1
        Creiamo un array contenente le partite di basket di un’ipotetica tappa
        del calendario.
        Ogni array avrà una squadra di casa e una squadra ospite,
        punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
        Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
    
    ## Snack 2
        Passare come parametri GET name, mail e age e verificare
        (cercando i metodi che non conosciamo nella documentazione) che name
        sia più lungo di 3 caratteri,
        che mail contenga un punto e una chiocciola e che age sia un numero.
        Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

      

 -->

 <!-- SNACk1 -->

<?php


// Array con le squadre e i risultati
$matchs = [
    [
            'teamA' => 'Limesvilles',
            'teamB' => 'Silverkeep',
            'pointsA' => 30,
            'pointsB' => 4,
    ],
    [
            'teamA' => 'Marrens Eve',
            'teamB' => 'Lewes',
            'pointsA' => 23,
            'pointsB' => 54,
    ],
    [
            'teamA' => 'Torrine',
            'teamB' => 'Lakeshore',
            'pointsA' => 45,
            'pointsB' => 70,
    ],
    [
            'teamA' => 'Mirstone',
            'teamB' => 'Caershire',
            'pointsA' => 30,
            'pointsB' => 32,
    ],
];

echo '<ul>';

//Ciclo e stampo
for($i = 0; $i < count($match); $i++){
    echo "<li>{$match[$i]['teamA']} vs {$match[$i]['teamB']} | {$match[$i]['pointsA']} - {$match[$i]['pointsB']}</li>";
};
echo '</ul>';

?>