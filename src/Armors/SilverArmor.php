<?php

namespace Styde\Armors;


class SilverArmor extends \Styde\Armor
{
    public function absorbPhysicalDamage(\Styde\Attack $attack)
    {
        return $attack->getDamage() / 3;
    }
}
