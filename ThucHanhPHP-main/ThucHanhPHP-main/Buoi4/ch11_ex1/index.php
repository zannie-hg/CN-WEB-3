<?php
// Get tasklist array from POST
$task_list = filter_input(INPUT_POST, 'tasklist', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if ($task_list === NULL) {
    $task_list = array();
}

$errors = array();

// Get value
$action = filter_input(INPUT_POST, 'action');

// Process
switch ($action) {
    case 'Add Task':
        $new_task = filter_input(INPUT_POST, 'newtask', FILTER_SANITIZE_STRING);
        if (empty($new_task)) {
            $errors[] = 'The new task cannot be empty.';
        } else {
            // Add the new task to the end of the task_list array
            array_push($task_list, $new_task);
        }
        break;
    case 'Delete Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'The task cannot be deleted.';
        } else {
            // Remove the selected task from the array
            unset($task_list[$task_index]);
            $task_list = array_values($task_list);
        }
        break;
    case 'Modify Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'Invalid task ID for modification.';
        } else {
            // Display the form
            $modify_task_id = $task_index;
        }
        break;
    case 'Save Changes':
        $modified_task_id = filter_input(INPUT_POST, 'modified_task_id', FILTER_VALIDATE_INT);
        $modified_task = filter_input(INPUT_POST, 'modified_task', FILTER_SANITIZE_STRING);
        if ($modified_task_id === NULL || $modified_task_id === FALSE || empty($modified_task)) {
            $errors[] = 'Invalid task data for modification.';
        } else {
            // Update selected task
            $task_list[$modified_task_id] = $modified_task;
        }
        break;
    case 'Cancel Changes':
        // Clear the form
        $modify_task_id = null;
        break;
    case 'Promote Task':
        $task_index = filter_input(INPUT_POST, 'taskid', FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $errors[] = 'Invalid task ID for promotion.';
        } elseif ($task_index === 0) {
            $errors[] = 'You cannot promote the first task.';
        } else {
            // Swap the selected task with the task above it
            $temp = $task_list[$task_index];
            $task_list[$task_index] = $task_list[$task_index - 1];
            $task_list[$task_index - 1] = $temp;
        }
        break;
    case 'Sort Tasks':
        // Sort the task list alphabe
        sort($task_list);
        break;
}

include('task_list.php');
