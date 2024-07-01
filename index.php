<?php
session_start();
if (isset($_SESSION['user'])) {
  ?>
  <?php require_once ("header.php"); ?>

  <div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <p>Welcome to the dashboard!</p>
  </div>
  </div>

  <?php require_once ("footer.php"); ?>

  <?php
} else {
  header('location:login.php');
}
?>