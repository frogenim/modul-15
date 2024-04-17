<div class="halaman">
<!-- isi halaman update -->
<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM `tb_konten` WHERE id_konten='$id';";
    $hasil = mysqli_query($koneksi_db,$query);
    $data = mysqli_fetch_array($hasil);
?>
<h3>Edit data</h3>
<form method="post" action="">
    <table>
        <tr><input type="hidden" name="id_konten" value="<?php echo $data['id_konten']; ?>"></tr>
        <tr>
            <td>kategori Berita</td><td>:</td>
            <td><input type="text" name="kategori" value="<?php echo $data['kategori']; ?>"></td>
        </tr>
        <tr>
            <td>Isi Berita</td><td>:</td>
            <td><textarea name="isi"><?php echo $data['isi']; ?></textarea></td>
        </tr>
        <tr colspan="3">
            <td><input type="submit" name="submit" value="UPDATE"></td>
        </tr>
    </table>
</form>
<a href="?page=kelola">Kembali Kelola</a>
</div>
<?php
//proses update
    @$id_konten = $_POST['id_konten'];
    @$kategori = $_POST['kategori'];
    @$isi = $_POST['isi'];
    @$submit = $_POST['submit'];

    if($submit) {
        $query_update = "UPDATE tb_konten SET kategori='$kategori', isi='$isi' WHERE id_konten='$id_konten';";
        $hasil = mysqli_query($koneksi_db,$query_update) or die ("ERROR UPDATE DATA");
    if ($hasil) {
        //jika berhasil update kembali ke halaman kelola 
        header('Location: ?page=kelola');
    }
    }
?>