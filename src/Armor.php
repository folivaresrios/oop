<?php

namespace Styde;

abstract class Armor
{
    public function absorbDamage(Attack $attack)
    {
        if($attack->isMagical()){
            return $this->absorbPhysicalDamage($attack);
        }
        return $this->absorbPhysicalDamage($attack);
    }

    public function absorbPhysicalDamage(\Styde\Attack $attack)
    {
        return $attack->getDamage();
    }

    public function absorbMagicalDamage(\Styde\Attack $attack)
    {
        return $attack->getDamage();
    }
}
