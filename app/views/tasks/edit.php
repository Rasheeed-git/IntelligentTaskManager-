<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <h1>Edit Task</h1>
    
    <form action="/tasks/update/<?= $task['id'] ?>" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?= $task['title'] ?>" required><br>
        
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" cols="30" rows="5"><?= $task['description'] ?></textarea><br>
        
        <label for="completed">Completed:</label>
        <input type="checkbox" name="completed" id="completed" <?= $task['completed'] ? 'checked' : '' ?>><br>
        
        <button type="submit">Update Task</button>
    </form>
    
    <a href="/tasks">Back to Tasks</a>
    
    <script src="/public/js/script.js"></script>
</body>
</html>
