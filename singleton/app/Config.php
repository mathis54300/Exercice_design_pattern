<?php

# TODO: Créer une classe Config en Singleton

namespace App;

class Config
{
    private static $instance;
    private $settings = [];

    private function __construct()
    {
        $this->settings = require dirname(__DIR__) . '/config/config.php';
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function get($key)
    {
        return $this->settings[$key] ?? null;
    }

    public function set($key, $value)
    {
        $this->settings[$key] = $value;
    }
}