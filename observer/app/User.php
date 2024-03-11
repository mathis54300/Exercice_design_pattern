<?php

namespace App;

use SplSubject;
use SplObserver;

class User implements SplObserver
{

    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(
        private string $name,
        private bool $notified = false
    ) {}

    public function update(SplSubject $subject): void
    {
        $this->notified = true;
    }


    public function isNotified(): bool
    {
        return $this->notified;
    }
}