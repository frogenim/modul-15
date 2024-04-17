<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_level'])) {
    header('Location: login.php');
    exit();
}

// Tambahkan file koneksi.php dan sesuaikan dengan kebutuhan Anda
include "koneksi.php";

// Gantilah ini dengan logika sesuai dengan kebutuhan Anda
if ($_SESSION['user_level'] == 'admin') {
    // Jika tingkat akses adalah 'admin', tampilkan data siswa dan link untuk kelola data
    $query = "SELECT * FROM `siswa` WHERE 1";
    $hasil = mysqli_query($koneksi_db, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>
<body>
    <h2>Dashboard Admin</h2>

    <!-- Tampilkan tabel data siswa -->
    <table border="1">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Umur</th>
            <!-- Tambahkan kolom-kolom lainnya sesuai dengan tabel siswa -->
        </tr>

        <?php
        while ($data = mysqli_fetch_array($hasil)) {
            echo "<tr>";
            echo "<td>" . $data[`NIS`] . "</td>";
            echo "<td>" . $data[`nama`] . "</td>";
            echo "<td>" . $data[`umur`] . "</td>";
            // Tambahkan kolom-kolom lainnya sesuai dengan tabel siswa
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Link untuk kelola data siswa -->
    <br>
    <a href="kelola.php">Kelola Data Siswa</a>
    
    <!-- Tombol Logout -->
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php
} else if ($_SESSION['user_level'] == 'user') {
    // Jika tingkat akses adalah 'user', tampilkan pesan dan tombol Logout
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard User</title>
    </head>
    <body>
        <h2>Dashboard User</h2>
        
        <p>Anda memiliki hak akses sebagai User.</p>
        
        <!-- Tombol Logout -->
        <br>
        <a href="logout.php">Logout</a>
    </body>
    </html>
    <?php
}
?>
