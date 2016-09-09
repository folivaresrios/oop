<?php

namespace Styde\Armors;

class MissingArmor extends \Styde\Armor
{
    public function absorbDamage(\Styde\Attack $attack)
    {
        return $attack->getDamage();
    }
}