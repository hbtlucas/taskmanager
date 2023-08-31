<!DOCTYPE html>
<html>
<head>
  <title>Task Manager</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<?php
$task_id = $_POST['task_id'];
?>
  <main class="container mt-4">
    <div class="row">
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="bg-white p-4 rounded shadow">
          <h2 class="mb-3">Edit Task</h2>
            <form class="mb-3" method="POST" action="up_task.php">
              <label for="newtaskName" class="form-label">New task name:</label>
              <input type="text" class="form-control" id="newtaskName" name="newtaskName">
              <label for="newtaskDetail" class="form-label">New Task Details:</label>
              <input type="text" class="form-control" id="newtaskDetail" name="newtaskDetail">
              <?php echo "<input type='hidden' name='task_id' value='".$_POST['task_id']."'>"
              ?>
              <br>
              <button type="submit" class="btn btn-success">save</button>
            <br> <br>
            <a class="btn btn-primary" href="index.php">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </main>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

