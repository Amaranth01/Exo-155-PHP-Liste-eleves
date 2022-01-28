<?php

$promo = [
    0 => [
        "Ducon",
        "Pierre",
        "12",
        "St Petersburg",
        "Passions" => [
            "La bière",
            "Le foot",
        ]
    ],
    1 => [
        "Perruche",
        "Georgette",
        "22",
        "Limoges",
        "Passions" => [
            "Le maquillage",
            "Le shopping",
        ]
    ],
    2 => [
        "Truc",
        "Elise",
        "18",
        "Paris",
        "Passions" => [
            "Faire chier les gens",
            "Dormir",
        ]
    ],
    3 => [
        "Bidule",
        "Marguerite",
        "20",
        "Lille",
        "Passions" => [
            "Manger du gras",
            "Râler",
        ]
    ],
    4 => [
        "Sénéchal",
        "Marion",
        "19",
        "Bourg en Bresse",
        "Passions" => [
            "Virer les arabes",
            "Être avec tata",
        ]
    ],
    5 => [
        "Clette",
        "Lara",
        "17",
        "Marseille",
        "Passions" => [
            "Les jeux video",
            "Programmer",
        ]
    ],
];

if(!isset($_GET["index"])) {
    header('Location: index.php?error=1');
}

echo "<a href='index.php'>Retour à la liste d'élèves</a>";

$index = intval($_GET['index']);

if ($index < 0) {
    $index = 1;
}

foreach ($promo[$index] as $index => $identite){
        if ($index === "Passions"){
            echo"<p>Passions de l'élève : </p> <br>";
            foreach ($identite as $Passion){
                echo "Il aime : $Passion ";
            }
        }
        else {
            echo "<p>$identite</p>";
        }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
