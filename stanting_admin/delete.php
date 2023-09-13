<?php
require_once('../connection.php');

$id_stunting = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM p_stunting WHERE id = '$id_stunting'");

header('Location: index.php');
