<div class="halaman">
<!-- isi halaman tutorial -->
<?php
    include "koneksi.php";
    $query = "SELECT *FROM tb_konten WHERE kategori='tutorial'";
    $hasil = mysqli_query($koneksi_db,$query);
    $data = mysqli_fetch_array($hasil);

    if(!$data) {
        echo "Data Kosong";
    } else {
        echo "<h3>Halaman : ".$data['kategori']."</h3><br>";
        echo $data['isi'];
    }
?>
</div>