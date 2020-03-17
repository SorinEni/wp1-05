<?php
$vklad = 275;
$studentka = 17;
$muz = 40;
$podnikatel = 100;
$cigarettePrice = 99;
$spoluobcane = 50;
$vodkaPrice = 133;
$homelessMoney = $vklad + $studentka + $muz + $podnikatel - $spoluobcane;
$cigaretteVodka = $cigarettePrice + $vodkaPrice;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <p>Penize před návštěvou večerky: <?=$homelessMoney?> </p>

    <?php

    if ($homelessMoney >= $cigaretteVodka) {
        echo "Cena vodky a cigaret: " .$cigaretteVodka;
        $homelessMoney = $homelessMoney - $cigaretteVodka;
        echo "Zakoupeno";
    }

    elseif ($homelessMoney >= $vodkaPrice) {
        echo "Cena vodky: " . $vodkaPrice; 
        $homelessMoney = $homelessMoney - $vodkaPrice;
        echo "Vodka byla zakoupena";
    }

    elseif ($homelessMoney >= $cigarettePrice) {
        echo "Cena cigaret:" .$cigarettePrice;
        $homelessMoney = $homelessMoney - $cigarettePrice;
        echo "Cigarety byly zakoupeny";
    }

    else {
        "Bezdomovec nemá dostatek peněz";
    }

    ?>

    <p>Peníze po návštěvě večerky: <?=$homelessMoney ?> </p>

</body>
</html>