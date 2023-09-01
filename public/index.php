<!DOCTYPE html>
<html>
<head>
    <title>IntelligentTask Manager</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <header>
        <h1>IntelligentTask Manager</h1>
        <nav>
            <ul>
                <li><a href="/tasks">View Tasks</a></li>
                <li><a href="/tasks/create">Create New Task</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h2>Task List</h2>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <a href="/tasks/show/<?= $task['id'] ?>"><?= $task['title'] ?></a>
                    <small>Status: <?= $task['completed'] ? 'Completed' : 'Pending' ?></small>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
    
    <footer>
        <p>&copy; <?= date('Y') ?> IntelligentTask Manager</p>
    </footer>
    
    <script src="/public/js/script.js"></script>
</body>
</html>
