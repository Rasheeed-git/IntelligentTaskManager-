<!DOCTYPE html>
<html>
<head>
    <title>Create New Task</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
    <h1>Create New Task</h1>
    
    <form action="/tasks/store" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>
        
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" cols="30" rows="5"></textarea><br>
        
        <button type="submit">Create Task</button>
    </form>
    
    <a href="/tasks">Back to Tasks</a>
    
    <script src="/public/js/script.js"></script>
</body>
</html>
