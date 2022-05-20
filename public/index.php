<?php
require "../vendor/autoload.php";
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$router = new App\Router(dirname(__DIR__).'/views');
$router
/**route pour la partie du site et administration complet */
->match('/','Home/index','home')
->match('/connexion','Connexion/index','connexion')
->run();