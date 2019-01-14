<?php
class Character
{
    protected $name;
    protected $hp;
    protected $mp;

    public function getName()
    {
        return $this->name; 
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getHP()
    {
        return $this->hp;

    }   
    
    public function getMP()
    {
        return $this->mp;
    }

    public function attack()
    {
        
        if ($this->mp >= $mp ) {
            return 0;
        }
        
        $this->mp = $this->mp - $mp;
        
        return $mp;
    }

    public function loseHP($hp) 
    {
        if ($this->hp < 0 ) {
            return;
        }

        $this->hp = $this->hp - $hp;

    }
    
    public function isDead()
    {
        if($this->hp <= 0) {
            return TRUE;
        }
        return FALSE;
    }
}