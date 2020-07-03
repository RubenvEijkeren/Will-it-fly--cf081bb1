<?php
require_once 'Dier.class.php';

class Vis extends Dier
{
    public function __construct()
    {
        $this->dier = 'Vis';
    }

    public function speak()
    {
        echo "blub blub" . PHP_EOL;
    }
}
?>