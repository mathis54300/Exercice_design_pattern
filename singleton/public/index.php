<?php
require('../vendor/autoload.php');


# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

$config = App\Config::getInstance();

var_dump($config->get('db')); // array(4) { ["host"]=> string(9) "localhost" ["user

$config2 = App\Config::getInstance();

var_dump($config === $config2); // true