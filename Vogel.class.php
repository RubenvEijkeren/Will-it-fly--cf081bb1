<?php
require_once 'Dier.class.php';

class Vogel extends Dier
{
    public function __construct()
    {
        $this->dier = 'Vogel';
    }

    public function speak()
    {
        echo "chirp chirp" . PHP_EOL;
    }
}
?>