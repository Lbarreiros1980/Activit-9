<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lidia Barreiros">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body> 
    <?php
    $nombre = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "valet", "dame", "roi", "as");
    $couleurCartes = array("coeur", "pique", "trèfle", "carreau");
    $cartes = [];
    $paquet1 = [];
    $paquet2 = [];
    foreach($nombre as $valeur)
    {
        foreach($couleurCartes as $sorte)
        {
            $cartes[] = $valeur . " " . $sorte;
        }
    }
    
    //array_slice($cartes);
    for($i = 0; $i < count($cartes); $i++)
    {
        if($i < (count($cartes)/2))
        {
            $paquet1[] = $cartes[$i];
        }
        else
        {
            $paquet2[] = $cartes[$i];
        }
    }
    
    for($i=0; $i< (count($cartes)/2); $i++)
    {
        echo $paquet1[$i] . "<br>";
        echo $paquet2[$i] . "<br>";
    }
    
    ?>
    
</body>
</html>