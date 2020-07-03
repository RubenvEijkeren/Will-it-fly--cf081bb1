<?php
abstract class Dier
{
    public $dier;
    abstract public function speak();
    public function eat()
    {
        echo $this->dier . " says: gobble gobble" . PHP_EOL;
    }
    public function sleep()
    {
        echo $this->dier . " says: zzzZZzZzZz" . PHP_EOL;
    }
}
?>