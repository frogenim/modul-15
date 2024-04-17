<div class="halaman">
<!-- isi halaman Insert -->
<h2>Tambah data</h2>
<form method="POST" action="">
    <table border="1" align="center">
        <tr><input type="hidden" name="id_konten"></tr>
        <tr>
            <td>Kategori Berita</td><td>:</td><td><input type="text" name="kategori"></td>
        </tr>
        <tr>
            <td>Isi Berita</td><td>:</td><td><textarea name="isi"></textarea></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" name="submit" value="TAMBAH"></td>
        </tr>
    </table>
</form>
<a href="?page=kelola">Kembali Kelola</a>
</div>
<?php
//proses update
    include "koneksi.php";
    @$id_konten = $_POST['id_konten'];
    @$kategori = $_POST['kategori'];
    @$isi = $_POST['isi'];
    @$submit = $_POST['submit'];
    if($submit) {
        $query_insert = "INSERT INTO tb_konten VALUES ('','$kategori','$isi');";
        $hasil = mysqli_query($koneksi_db,$query_insert) or die ("ERROR INSERT DATA");
            if ($hasil) {
                //jika berhasil insert kembali ke halaman kelola
                header('Location:?page=kelola');
            }
    }
?>