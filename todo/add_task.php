// add_task.php

<?php
require_once 'config.php';
if (isset($_POST['add'])) {
    if (!empty($_POST['task'])) {
        $task = $_POST['task'];

        try {
            $stmt = $db->prepare("INSERT INTO task (task, status) VALUES (:task, 'Pending')");
            $stmt->bindParam(':task', $task);
            $stmt->execute();
        } catch (PDOException $e) {
            die("Error adding task: " . $e->getMessage());
        }

        header('location:index.php');
    }
}

?>
