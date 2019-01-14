<?php 

require __DIR__.'/../vendor/autoload.php';

$c = new Character();
echo $c->getName().'<br>';
echo $c->getHP().'<br>';
echo $c->getMP().'<br>';
echo ($c->isDead() ? 'oui': 'non').'<br>';

