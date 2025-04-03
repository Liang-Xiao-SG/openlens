<?php
// Front controller for routing requests

// Load configuration
require_once 'config/config.php';

// Simple routing logic
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Determine controller file
$controllerFile = 'controllers/' . ucfirst($controller) . 'Controller.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controllerClass = ucfirst($controller) . 'Controller';
    if (class_exists($controllerClass)) {
        $controllerInstance = new $controllerClass();
        if (method_exists($controllerInstance, $action)) {
            $controllerInstance->$action();
        } else {
            echo "Action not found.";
        }
    } else {
        echo "Controller class not found.";
    }
} else {
    echo "Controller file not found.";
}
?>
