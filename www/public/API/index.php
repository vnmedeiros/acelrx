<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';

$config['displayErrorDetails'] = true;
$app = new \Slim\App(["settings" => $config]);
$container = $app->getContainer();

$container['db'] = function ($c) {
    $db = $c['settings']['db'];
    
    $pdo = new pdo( 'mysql:host=localhost;port=4406;dbname=myDb',
                    'user',
                    'test',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    
    //$pdo = new PDO("pgsql:host=" . $db['host'] . ";port=" . $db['port'] . ";dbname=" . $db['dbname'] . ";user=" . $db['user'] . ";password=" . $db['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

$dir = '../../app/routes';
foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)) as $file) {
    require $file;
}
$app->run();
?>
