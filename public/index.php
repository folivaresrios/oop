<?php

namespace Styde;

require_once '../vendor/autoload.php';
Translator::set([
    'BasicBowAttack' => ':unit dispara una flecha a :oppontent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'CrossBowAttack' => ':unit dispara una flecha a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent',
]);

Log::setLogger(new HtmlLogger());

$ramm = Unit::createSoldier('Ramm')
    ->setArmor(new \Styde\Armors\SilverArmor())
    ->setWeapon(new \Styde\Weapons\BasicSword());

$silence = new Unit('Silence', new \Styde\Weapons\FireBow());
$silence->attack($ramm);
$silence->attack($ramm);
$ramm->attack($silence);