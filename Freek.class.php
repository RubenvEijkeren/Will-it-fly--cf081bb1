<?php
require_once 'Dier.class.php';
require_once 'Vis.class.php';
require_once 'Vogel.class.php';
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
}

$vis = new Vis();
$vogel = new Vogel();
$freek = new Freek();

$freek->geefEten($vis);
$freek->geefEten($vogel);
$freek->brengNaarBed($vis);
$freek->brengNaarBed($vogel);
$freek->speak($vis);
$freek->speak($vogel);
?>