<?php
require('../vendor/autoload.php');


# TODO: Creer un QueryBuilder
# Ecrire une requête en chainant des methodes
# Afficher la requête

$builder = new \App\MySQLQueryBuilder();

$query = $builder->select('name, email')
    ->where('id', 1)
    ->from('users')
    ->getQuery();

echo $query; // SELECT name, email FROM users WHERE id = 1
echo PHP_EOL;

$query = $builder->select('name, email')
    ->from('users')
    ->where('id', 1, '>')
    ->getQuery();

echo $query . PHP_EOL; // SELECT name, email FROM users WHERE id > 1

//tester andWhere
$query = $builder->select('name, email')
    ->from('users')
    ->where('id', 1)
    ->andWhere('email', 'test
    ', 'LIKE')
    ->getQuery();

echo $query . PHP_EOL; // SELECT name, email FROM users WHERE id = 1 AND email LIKE 'test'

//tester LitteralBuilder
echo "---LitteralBuilder---" . PHP_EOL;
$builder = new \App\LitteralBuilder();

$query = $builder->select('name, email')
    ->where('id', 1)
    ->from('users')
    ->getQuery();


echo $query. PHP_EOL;// Je sélectionne les champs name, email de la table users où id = 1

$query = $builder->select('name, email')
    ->from('users')
    ->where('id', 1, '>')
    ->getQuery();

echo $query . PHP_EOL; // Je sélectionne les champs name, email de la table users où id > 1

//tester andWhere

$query = $builder->select('name, email')
    ->from('users')
    ->where('id', 1)
    ->andWhere('email', 'test
    ', 'LIKE')
    ->getQuery();

echo $query . PHP_EOL; // Je sélectionne les champs name, email de la table users où id = 1 et email LIKE 'test'