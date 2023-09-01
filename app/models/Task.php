<?php

class Task {
    private static $tasks = [
        // Placeholder data for demonstration purposes
        ['id' => 1, 'title' => 'Finish Project Proposal', 'description' => 'Write the project proposal document', 'completed' => false],
        ['id' => 2, 'title' => 'Research AI Integration', 'description' => 'Investigate how AI can be integrated into the task manager', 'completed' => false],
    ];

    public static function getAllTasks() {
        return self::$tasks;
    }

    public static function getTaskById($id) {
        foreach (self::$tasks as $task) {
            if ($task['id'] == $id) {
                return $task;
            }
        }
        return null;
    }

    // Additional methods for creating, updating, and deleting tasks would go here
}
