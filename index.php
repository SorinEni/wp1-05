<?php

$vklad = 25;
$studentka = 17;
$muz = 40;
$podnikatel = 100;
$spoluobcane = 50;
$vodkaPrice = 129;
$homelessMoney = $vklad + $studentka + $muz + $podnikatel - $spoluobcane;
$homelessMoneyAfter = $homelessMoney - $vodkaPrice;

if ($homelessMoney >= $vodkaPrice) {
    echo "Bezdmovec ma dostatek peněz";
}

else {
    echo "Bezdomovec nema dostatek peněz";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
    <?php

    if ($homelessMoney>=$vodkaPrice) {
        echo "Cena vodky: " . $vodkaPrice; 
        echo  "<br> Vodka zakoupena!<br>";
        echo "<br>Peníze bezdomovce před návštěvou večerky: " . $homelessMoney . "<br>";
        echo "<br>Peníze bezdomovce po návštěvě večerky: " . $homelessMoneyAfter . "<br>";
    }

    else {
        echo "Nedostatek peněz!";
    }
   

    ?>

</body>
</html>