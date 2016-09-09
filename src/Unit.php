<?php

namespace Styde;

use Styde\Armors\MissingArmor;

class Unit
{
    const MAX_DAMAGE = 10;

    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $weapon;

    public function __construct($name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new MissingArmor();
    }

    public static function createSoldier($name)
    {
        $soldier = new Unit($name, new Weapons\BasicSword());
        $soldier->setArmor(new Armors\BronzeArmor());
        return $soldier;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function setHp($damage)
    {
        if ($damage > Unit::MAX_DAMAGE) {
            $damage = Unit::MAX_DAMAGE;
        }
        $this->hp = $this->hp - $damage;
    }

    public function move($direction)
    {
        Log::info("{$this->name} avanza hacia $direction");
    }


    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();
        Log::info($attack->getDescription($this, $opponent));
        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack)
    {
        $this->setHp($this->armor->absorbDamage($attack));

        Log::info("{$this->name} ahora tiene {$this->hp} puntos de vida");

        if ($this->getHp() <= 0) {
            $this->died();
        }
    }

    public function died()
    {
        Log::info("{$this->name} muere");
        exit();
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
        return $this;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;
        return $this;
    }
}
