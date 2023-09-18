<?php
require_once('../connection.php');

$id_sdg = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM p_sdg WHERE id = '$id_sdg'");

header('Location: index.php');
