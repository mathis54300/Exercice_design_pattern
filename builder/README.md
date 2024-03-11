# Builder

## Objectif

Créer un Query Builder qui permet de construire des requêtes SQL de manière progressive et flexible. Le Query Builder devrait fournir des méthodes pour spécifier les différentes parties d'une requête SQL, telles que select(), from(), where(), etc.

## Étapes

- Créez une classe QueryBuilder qui représente le Query Builder. Cette classe devrait avoir des méthodes pour chaque partie d'une requête SQL, telles que select(), from(), where(), etc.
- Implémentez ces méthodes pour permettre aux utilisateurs de spécifier les parties de la requête de manière progressive.
- Ajoutez une méthode get() qui construit et retourne la requête SQL complète à partir des spécifications fournies par les utilisateurs.
- Testez votre implémentation en créant plusieurs requêtes SQL à l'aide du Query Builder et en vérifiant qu'elles sont construites correctement.
