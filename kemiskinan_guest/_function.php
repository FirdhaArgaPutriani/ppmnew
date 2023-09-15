<?php
require_once('../connection.php');


function query($sql)
{
	global $conn;

	$query = mysqli_query($conn, $sql);
	if ($query->num_rows) {
		while ($row = mysqli_fetch_assoc($query)) {
			$results[] = $row;
		}

		return $results;
	}

	return [];
}

function cek_kemiskinan($kemiskinan_id)
{
	global $conn;

	$query = mysqli_query($conn, "SELECT * FROM pm_kemiskinan WHERE produk_id = '$kemiskinan_id'");
	$result = mysqli_fetch_assoc($query);
}
