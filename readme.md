https://phpunit.de/getting-started/phpunit-9.html

-- installer phpunit
composer require --dev phpunit/phpunit

-- créer un nouveau projet
composer init

Package name <vendor>/<name>
Description
Author
Minimum Stability
Package type
License
Would you like to define your dependencies (require) interactively
Would you like to define your dependencies (require-dev) interactively
Add PSR-4 autoload mapping

création automatique du composer.json (autoload)

-- créer manuellement phpunit.xml
<?xml version="1.0" encoding="utf-8" ?>
<phpunit colors="true">
    <testsuite name="Initialisation de l'utilitaire de tests">
        <directory>./tests</directory>
    </testsuite>
</phpunit>

https://phpunit.readthedocs.io/fr/latest/writing-tests-for-phpunit.html


Définition du répertoire de l'autolaod et gestion des namespace
composer.json
"autoload": {
    "psr-4": {
        "App\\": "src/"
    }

exécuter composer dump-autoload pour prendre en compte les modifications

https://openclassrooms.com/fr/courses/4087056-testez-et-suivez-letat-de-votre-application-php
vendor/bin/phpunit tests/Entity/ProductTest.php                                             Lance l'ensemble des tests de la classe ProductTest
vendor/bin/phpunit tests/Entity/ProductTest.php --filter=testcomputeTVAFoodProduct          Lance une méthode de test définie dans l'option filter

xdebug
vendor/bin/phpunit --coverage-html web/test-coverage/

Lancer l'application
> supprimer le répertoire /web
> symfony server:start