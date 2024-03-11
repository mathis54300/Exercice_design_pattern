<?php

namespace App;

use SplObserver;
use SplSubject;

class MusicBand implements SplSubject
{
    private array $observers = [];

    // Hors exercice mais notable:
    // Promotion du constructeur: https://www.php.net/manual/fr/language.oop5.decon.php#language.oop5.decon.constructor.promotion
    public function __construct(private string $name, private array $concert = [])
    {}

    public function addNewConcertDate(string $date, string $location): void
    {
        $this->concert = [
            'date' => $date,
            'location' => $location
        ];
        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers = array_filter($this->observers, function ($a) use ($observer) {
            return $a !== $observer;
        });
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}