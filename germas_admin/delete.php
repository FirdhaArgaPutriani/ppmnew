<?php
require_once('../connection.php');

$id_germas = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM p_germas WHERE id = '$id_germas'");

header('Location: index.php');
