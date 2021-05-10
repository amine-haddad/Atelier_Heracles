<?php

/* Fighter class definition */
class Fighter{

    const MAX_LIFE=100;

    private string $name;
    private int $strenght;
    private int $dexterity;
    private int $life;

    public function __construct(string $name, int $strenght, int $dexterity)
    {
        $this->name=$name;
        $this->strenght=$strenght;
        $this->dexterity=$dexterity;
        $this->life = self::MAX_LIFE;
    }

    public function attack ():int
    {
        return rand(1,$this->getStrenght());
        
    }
    
    public function defense (int $attack):int
    {
        
        return ($attack - $this->getDexterity()>0)?($attack-$this->getDexterity()): 0;
    }

    public function fight (Fighter $enemy){
        $attack=$this->attack();
        $defense = $enemy->defense($attack);
        $enemy->setLife( ($enemy->getLife() - $defense > 0)? ($enemy->getLife()-$defense):0);
    }

    public function getLife(){
        return $this->life;
    }
    public function setLife(int $life){
        $this->life = $life;
        return $this;
    }

    public function getName():string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    public function getStrenght():int
    {
        return $this->strenght;
    }
    public function setStrenght(int $strenght)
    {
        $this->strenght = $strenght;
        return $this;
    }

    public function getDexterity():int
    {
        return $this->dexterity;
    }
    public function setDexterity(int $dexterity)
    {
        $this->dexterity = $dexterity;
        return $this;
    }
}