// script.js

// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', () => {
    // Get references to elements
    const createTaskForm = document.querySelector('#create-task-form');
    const editTaskForm = document.querySelector('#edit-task-form');
    
    // Example: Add an event listener for the create task form
    if (createTaskForm) {
        createTaskForm.addEventListener('submit', (event) => {
            event.preventDefault();
            // Process form data and create a new task using AJAX or fetch
            // Update the UI as needed (e.g., add the new task to the list)
        });
    }
    
    // Example: Add an event listener for the edit task form
    if (editTaskForm) {
        editTaskForm.addEventListener('submit', (event) => {
            event.preventDefault();
            // Process form data and update the task using AJAX or fetch
            // Update the UI as needed (e.g., update the task details)
        });
    }
    
    // Example: Add an event listener to handle task deletion
    const deleteButtons = document.querySelectorAll('.delete-task-button');
    deleteButtons.forEach((button) => {
        button.addEventListener('click', (event) => {
            const taskId = event.target.dataset.taskId;
            // Prompt user for confirmation before deleting
            // Send a request to the server to delete the task
            // Update the UI by removing the task from the list
        });
    });
});
