// delete_task.php

<?php
require_once 'config.php';

if (isset($_GET['task_id'])) {
    $task_id = $_GET['task_id'];

    // Using PostgreSQL's query with parameterized statement
    $query = "DELETE FROM task WHERE task_id = $1";
    $result = pg_query_params($db, $query, array($task_id));

    if (!$result) {
        die("Error in query execution: " . pg_last_error($db));
    }

    header("Location: index.php");
}
?>
