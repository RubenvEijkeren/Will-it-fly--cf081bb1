<?php
require_once 'Dier.class.php';
require_once 'Vis.class.php';
require_once 'Vogel.class.php';
require_once 'Kraai.class.php';
require_once 'Struisvogel.class.php';
require_once 'Vliegbrevet.class.php';

class Freek
{
    public function geefEten($dier)
    {
        echo "Freek geeft eten aan " . $dier->dier . PHP_EOL;
        $dier->eat();
    }
    public function brengNaarBed($dier)
    {
        echo "Freek brengt " . $dier->dier . " naar bed" . PHP_EOL;
        $dier->sleep();
    }
    public function speak($dier)
    {
        $dier->speak();
    }
    public function laatVliegen(Vliegbrevet $dier)
    {
        $dier->fly();
    }
}

$freek = new Freek();
$kraai = new Kraai();
$struisvogel = new Struisvogel();

$freek->laatVliegen($kraai);
$freek->laatVliegen($struisvogel);
?>