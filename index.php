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

    ## Snack 3
        Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore
        un array di post associati a quella data. Stampare ogni data con i relativi post.
        Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
        codepile.netcodepile.net
        CodePile | Easily Share Piles of Code
        {{ description }}

                

      

 -->

 <!-- SNACK1 -->

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

<!--  Snack2 -->

<?php




// if(isset($_GET['name']) or (isset($_GET['email']) or (isset($_GET['age']))) {

// }


?>

<!-- Snack3 -->


<html>
<body>
<ul>
<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
foreach ($posts as $key => $value) {
    foreach ($value as $data)
    echo ("<li>" . $key . "-->". " Titolo: ". $data["title"].  " Author: ". $data["author"].  " Titolo: ". $data["text"]."</li>");
} ?>
</ul>
</body>
</html> 



<!-- Snack4 -->

<html>
<head></head>
<body>
<ul>
<?php 
$numbers = [];
for($i = 0; $i < 15; $i++){
    $number = mt_rand(1, 100);
    is_array($number) ? false : array_push($numbers, $number);    
} ?>

<?php foreach ($numbers as $key => $value) {
    echo ("<li>" . $value . "</li>");
} ?>
</ul>
</body>
</html> 
