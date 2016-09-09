<?php

namespace Styde;

require_once '../vendor/autoload.php';

$ramm = new Unit('Ramm', new \Styde\Weapons\BasicSword());
//$ramm->setArmor(new Armors\SilverArmor());
$silence = new Unit('Silence', new \Styde\Weapons\FireBow());
$silence->attack($ramm);
$silence->attack($ramm);
$ramm->attack($silence);