<?php
session_start();
include './lib/db/dbconfig.php';
date_default_timezone_set('Asia/Jakarta');

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = "home";
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = "id";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Absensi Karyawan</title>
</head>
<body style="background-color:rgb(155, 170, 99);">
  <?php
  if (!isset($_SESSION['sw']) AND !isset($_SESSION['pb'])) {
    include 'view/login.php';
  } else {
    include 'view/media.php';
  }
  ?>
</body>
</html>