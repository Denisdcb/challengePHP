<?php
$weapons = ["fists", "whip", "gun"];
$opponentWeapon = $weapons[rand(0,2)];
echo "The opponent Weapon is : $opponentWeapon";
echo "<br>";
switch($opponentWeapon) {
    case $opponentWeapon == "fists":
        $stevensonWeapon = "gun" ;
        break;
    case $opponentWeapon == "whip":
        $stevensonWeapon = "fists" ;
        break;
    case $opponentWeapon == "gun":
        $stevensonWeapon = "whip";
        break;
}
echo "So Stevenson will choose : $stevensonWeapon";
