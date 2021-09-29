<?php
    if (isset($_POST['search'])) {
        require_once 'koneksi.php';

        $no = 1;
        $search = $_POST['search'];

        $query = mysqli_query($conn, "SELECT * FROM terjemahan WHERE kata LIKE '%" . $search . "%'");
        while ($row = mysqli_fetch_object($query)) {
?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->kata; ?></td>
            <td><?= $row->arti; ?></td>
        </tr>
<?php }
} ?>