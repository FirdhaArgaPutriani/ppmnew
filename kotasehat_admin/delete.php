<?php
require_once('../connection.php');

$id_kotasehat = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM p_kotasehat WHERE id = '$id_kotasehat'");

header('Location: index.php');
