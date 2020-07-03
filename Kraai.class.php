<?php
require_once 'Vogel.class.php';
require_once 'Vliegbrevet.class.php';

class Kraai extends Vogel implements Vliegbrevet
{
    public function fly()
    {
        echo "Lift off...... flap flap flap" . PHP_EOL;
    }
}
?>