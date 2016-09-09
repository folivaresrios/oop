<?php

namespace Styde\Armors;

class CursedArmor extends \Styde\Armor
{
    public function absorbDamage(\Styde\Attack $attack)
    {
        return $attack->getDamage() * 2;
    }
}
