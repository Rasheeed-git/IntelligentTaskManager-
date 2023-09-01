<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <h1>Task Details</h1>
    
    <h2><?= $task['title'] ?></h2>
    <p><?= $task['description'] ?></p>
    <p>Status: <?= $task['completed'] ? 'Completed' : 'Pending' ?></p>
    
    <a href="/tasks/edit/<?= $task['id'] ?>">Edit Task</a>
    <a href="/tasks">Back to Tasks</a>
    
    <script src="/public/js/script.js"></script>
</body>
</html>
