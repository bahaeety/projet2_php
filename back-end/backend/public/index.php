<?php
require_once '../config/Headers.php';
spl_autoload_register(function ($className) {
    $paths = ['../app/Controllers/', '../app/Models/'];
    foreach ($paths as $path) {
        $file = $path . $className . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

require_once '../app/CLasses/Database.php';

$db = (new Database())->getConnection();

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : null;
$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($controllerName && $action) {
    if (class_exists($controllerName)) {
        $controller = new $controllerName($db);
        if (method_exists($controller, $action)) {
            $controller->$action(); 
        } else {
            echo json_encode(['error' => "Method '$action' not found in '$controllerName'"]);
        }
    } else {
        echo json_encode(['error' => "Controller '$controllerName' not found"]);
    }
} else {
    echo json_encode(['error' => 'Invalid request. Please specify a controller and an action.']);
}
?>
