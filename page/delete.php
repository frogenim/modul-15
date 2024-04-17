<div class="halaman">
<!-- isi halaman delete -->
<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_delete = "DELETE FROM tb_konten WHERE id_konten='$id';";
    $hasil = mysqli_query($koneksi_db,$query_delete);
    if($hasil) {
        header('Location: ?page=kelola');
    } else {
        echo "Gagal Hapus Data";
    }
?>
</div>