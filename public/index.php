<?php


use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;
use app\core\Router;
use app\controllers\PostController;;


require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new Application(dirname(__DIR__), $config);
//$app->on(Application::EVENT_BEFORE_REQUEST,function (){
//    echo "Before request";
//});

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'contact']);

$app->router->get('/post', [PostController::class, 'create']);
$app->router->post('/post', [PostController::class, 'create']);

$app->router->get('/getpost', [PostController::class, 'getPost']);
$app->router->get('/allpost', [PostController::class, 'allPost']);
$app->router->get('/search', [PostController::class, 'search']);


$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/profile', [AuthController::class, 'profile']);


$app->run();


//"MrRezoo\\PhpmvcFramework\\": "src/"