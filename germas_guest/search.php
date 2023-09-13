<?php
include('../connection.php');

if (isset($_GET['query'])) {
    $search_query = mysqli_real_escape_string($conn, $_GET['query']);
    $get_data = mysqli_query($conn, "SELECT * FROM p_germas WHERE judul LIKE '%$search_query%' OR author LIKE '%$search_query%' OR text LIKE '%$search_query%' OR data LIKE '%$search_query%' OR tanggal LIKE '%$search_query%'");
} else {
    $get_data = mysqli_query($conn, "SELECT * FROM p_germas");
}

$no = 1;
?>
<tbody class="table-border-bottom-0">
    <?php while ($data = mysqli_fetch_array($get_data)) { ?>
        <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $data['judul']; ?></strong></td>
            <td><?= $data['author']; ?></td>
            <td><?= $data['text']; ?></td>
            <td><?= $data['data']; ?></td>
            <td><?= $data['tanggal']; ?></td>
            <td>
                <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-sm rounded-pill btn-warning mr-1">Edit</a>
                <a href="detail.php?id=<?= $data['id']; ?>" class="btn btn-sm rounded-pill btn-info mr-1">Detail</a>
                <a href="delete.php?id=<?= $data['id']; ?>" class="btn btn-sm rounded-pill btn-danger mr-1" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
    <?php } ?>
</tbody>