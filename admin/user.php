<?php
include '../koneksi.php';
?>
<h2>Data User</h2>
<a href="index.php?halaman=tambahuser" class="btn btn-outline-primary">Tambah Data</a><br>
<table class="table table-bordered table-hover mt-3">
    <tr>
        <td>No</td>
        <td>Nama lengkap</td>
        <td>email</td>
        <td>aksi</td>
    </tr>
    <?php
    $query = "SELECT*FROM tb_user";
    $no = 1;
    $sql = mysqli_query($koneksi, $query);
    while ($data = mysqli_fetch_array($sql)) {

    ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data['fullname'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td>
                <a href="index.php?halaman=edituser&id=<?php echo $data['id'] ?>" class="btn btn-outline-success">Edit</a>
                <a href="index.php?halaman=hapususer&id=<?php echo $data['id'] ?>" class="btn btn-outline-danger">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    } ?>
</table>