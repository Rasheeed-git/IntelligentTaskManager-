<?php

class TaskController {
    public function index() {
        require_once 'app/models/Task.php';
        $tasks = Task::getAllTasks();
        require 'app/views/tasks/index.php';
    }

    public function show($id) {
        require_once 'app/models/Task.php';
        $task = Task::getTaskById($id);
        require 'app/views/tasks/show.php';
    }

    public function create() {
        require 'app/views/tasks/create.php';
    }

    public function store() {
        require_once 'app/models/Task.php';
        // Process form data and create a new task
        // Redirect to the task index page
    }

    public function edit($id) {
        require_once 'app/models/Task.php';
        $task = Task::getTaskById($id);
        require 'app/views/tasks/edit.php';
    }

    public function update($id) {
        require_once 'app/models/Task.php';
        // Process form data and update the task
        // Redirect to the task details page
    }

    public function delete($id) {
        require_once 'app/models/Task.php';
        // Delete the task
        // Redirect to the task index page
    }
}
