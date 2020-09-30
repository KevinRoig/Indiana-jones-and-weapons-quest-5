<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.
$indyWeapon = '';
if ($opponentWeapon == 'fists') {
    $indyWeapon = 'gun';
} elseif ($opponentWeapon == 'whip') {
        $indyWeapon = 'fists';
} else ($opponentWeapon == 'gun') {
        $indyWeapon = 'whip';
}
echo "The oppponent has $opponentWeapon, but Indy beats him with $indyWeapon!";
