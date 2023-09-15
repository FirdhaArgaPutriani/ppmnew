<?php
require_once('../connection.php');

$id_atm = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM p_atm WHERE id = '$id_atm'");

header('Location: index.php');
