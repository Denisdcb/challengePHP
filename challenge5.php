<?php
$weapons = ["fists", "whip", "gun"];
$opponentWeapon = $weapons[rand(0,2)];
echo "The opponent Weapon is : $opponentWeapon";
echo "<br>";
switch($opponentWeapon) {
    case "fists":
        $stevensonWeapon = "gun" ;
        break;
    case "whip":
        $stevensonWeapon = "fists" ;
        break;
    case "gun":
        $stevensonWeapon = "whip";
        break;
}
echo "So Stevenson will choose : $stevensonWeapon"
