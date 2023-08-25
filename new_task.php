<!DOCTYPE html>
<html>
<head>
  <title>Task Manager</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<?php
require_once 'header.php'
?>
  <main class="container mt-4">
    <div class="row">
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="bg-white p-4 rounded shadow">
          <h2 class="mb-3">Add Task</h2>
            <form class="mb-3" method="POST" action="insert_task.php">
              <label for="taskName" class="form-label">Task Name:</label>
              <input type="text" class="form-control" id="taskName" name="taskName" required>
              <label for="taskDetails" class="form-label">Task Details:</label>
              <input type="text" class="form-control" id="taskDetails" name="taskDetails" required>
              <br>
              <button type="submit" class="btn btn-success">Add Task</button>
            <br> <br>
            <a class="btn btn-primary" href="index.php">List Tasks</a>
          </form>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

