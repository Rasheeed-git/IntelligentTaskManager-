<!DOCTYPE html>
<html>
<head>
    <title>IntelligentTask Manager</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <h1>IntelligentTask Manager</h1>
    
    <a href="/tasks/create">Create New Task</a>
    
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li>
                <a href="/tasks/show/<?= $task['id'] ?>"><?= $task['title'] ?></a>
                <small>Status: <?= $task['completed'] ? 'Completed' : 'Pending' ?></small>
            </li>
        <?php endforeach; ?>
    </ul>
    
    <script src="/public/js/script.js"></script>
</body>
</html>
