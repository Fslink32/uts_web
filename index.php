<?php
// require_once 'dbConnection.php';
define('BASEPATH', true);

require_once('./system/Main_controller.php');

$url = substr($_SERVER['REQUEST_URI'], 1);
$urlParts = explode('/', $url);
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    $url1 = substr($_SERVER['REQUEST_URI'], 1);
    $urlParts1 = explode('/', $url1);
    $urlParts[0] = !empty($urlParts[1]) ? $urlParts[1] : '';
    $urlParts[1] = !empty($urlParts[2]) ? $urlParts[2] : '';
}

$className = !empty($urlParts[0]) ? $urlParts[0] : 'home';
$functionName = !empty($urlParts[1]) ? explode('?', $urlParts[1])[0] : 'index';

if ($className != "assets") {
    // Remove the class and function names from the URL parts
    $urlValues = array_slice($urlParts, 2);

    // Instantiate the class dynamically
    $classFile = 'controller/' . $className . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
        $classObject = new $className();

        // Check if the requested function exists in the class
        if (method_exists($classObject, $functionName)) {
            // Call the requested function and pass the URL values as arguments
            call_user_func_array([$classObject, $functionName], $urlValues);
        } else {
            echo "Function not found!";
        }
    } else {
        echo "Class not found!";
    }
}
