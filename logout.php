<?php
session_start();
unset($_SESSION['nama_peserta']);
header('location:index.php');
?>
