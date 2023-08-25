<!DOCTYPE html>
<html>
<head>
  <title>Task Manager</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
<header class="bg-dark text-white py-4">
    <div class="container text-center">
      <h1>Task Manager</h1>
    </div>
  </header>
<main class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <div class="bg-white p-4 rounded shadow">
          <h2 class="mb-3">Task List</h2>
          <a class="btn btn-success" href="new_task.php">Insert new Task</a>
<?php
require_once 'conection.php';

$taskobjct = new task ();

$link = $taskobjct->conecta_mysqli();

$sql = "select * FROM taskmanager";

$executa=mysqli_query($link,$sql);

if($executa){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th> TASK ID </th>";
    print "<th> TASK NAME </th>";
    print "<th> TASK DATE </th>";
    print "<th> ACTIONS </th>";

    print "</tr>";
    while ($row=mysqli_fetch_assoc($executa)){
        print "<tr>";
        print "<td>".$row['task_id']."</td>";
        print "<td>".$row['task_name']."</td>";
        print "<td>".$row['task_date']."</td>";
        print "<td>
        <button class='btn btn-primary'>Edit</button>
        <button class='btn btn-primary'>Details</button>

        <button class='btn btn-danger'>
        <i class='fas fa-trash'></i>
        </button>
        </td>";
        print "</tr>";
    
    }
}
?>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

