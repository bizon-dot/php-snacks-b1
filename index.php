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
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];
    if (strlen($name)>3 && strpos($mail, "@") && strpos($email, ".") && is_numeric($age)) {
        echo "<h1>OK</h1>";
    } else {
        echo "<h1>KO</h1>";
    }
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

<!-- Snack5 -->

<?php 
        $str = "Lorem ipsum dolor sit amet. Ex facere perspiciatis At tempora reiciendis qui deserunt voluptatem non temporibus iure aut obcaecati velit ut impedit eveniet ut consequatur assumenda. Sed illo totam et cumque dicta non rerum dignissimos ut cupiditate temporibus. Et ratione culpa eum omnis architecto aut dignissimos error quo animi enim! In ducimus autem eum beatae inventore in optio deserunt est maiores repellendus sit iusto dolore ea asperiores reprehenderit! Sed deserunt autem est commodi atque et laboriosam totam cum fugit voluptatem qui perspiciatis minus! Qui suscipit aperiam eum necessitatibus aperiam et architecto nihil est enim inventore sed sunt perspiciatis. Et sint tempora non culpa expedita est nulla sunt nam modi maiores et nulla harum et minus inventore? Non reprehenderit consequuntur non voluptatibus optio non magni nostrum et minima voluptatum qui accusantium ipsa eos corrupti facilis. Non enim quis et temporibus nihil ut vitae officiis eos quisquam quasi. Ut quos facere rem enim molestiae sit pariatur nisi qui inventore perspiciatis qui aperiam dignissimos.   Qui explicabo laudantium aut illo ipsa aut nemo enim non odio nulla et quia eaque non soluta vero? Et sapiente distinctio ad voluptas fugit sed ullam debitis ea numquam atque et illum officia. Eos eaque necessitatibus sit dolore voluptatem est doloribus consequatur sit repellendus magnam.";
        echo $formatStr = str_replace(".","<br /><br />", $str)
?>
