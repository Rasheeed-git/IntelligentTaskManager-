<?php
// index.php

// Autoloading classes using Composer's autoloader
require_once 'vendor/autoload.php';

// Include configuration settings
require_once 'config.php';

use Bramus\Router\Router;
// Initialize the router
$router = new \Bramus\Router\Router();



// Define routes
$router->get('/', function () {
    require_once 'views/home.php'; // Load the main view for the homepage
});

$router->get('/tasks', function () {
    require_once 'views/tasks.php'; // Load the view for the tasks page
});

$router->get('/tasks/show/(\d+)', function ($taskId) {
    // Load the view for showing a specific task
    require_once 'views/show.php';
});

$router->get('/tasks/create', function () {
    // Load the view for creating a new task
    require_once 'views/create.php';
});

$router->post('/tasks/store', function () {
    // Handle storing a new task (form submission)
    // Example: require_once 'controllers/TaskController.php';
    // TaskController::store();
});

$router->get('/tasks/edit/(\d+)', function ($taskId) {
    // Load the view for editing a specific task
    require_once 'views/edit.php';
});

$router->post('/tasks/update/(\d+)', function ($taskId) {
    // Handle updating a task (form submission)
    // Example: require_once 'controllers/TaskController.php';
    // TaskController::update($taskId);
});

$router->get('/tasks/delete/(\d+)', function ($taskId) {
    // Handle deleting a task
    // Example: require_once 'controllers/TaskController.php';
    // TaskController::delete($taskId);
});

// Run the router
$router->run();
