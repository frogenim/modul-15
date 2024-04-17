<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Halaman Web Dinamis Dengan PHP</title>
    <!-- menghubungkan dengan file css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- menghubungkan dengan file jquery - misalkan ada -->
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
    <div class="content">
        <header>
            <h1 class="judul">INI ADALAH HEADER</h1>
            <h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3>
        </header>
        <div class="menu">
            <ul>
                <li><a href="index.php?page=home">HOME</a></li>
                <li><a href="index.php?page=data">DATA SISWA</a></li>
                <li><a href="index.php?page=kelola">KELOLA DATA SISWA</a></li>
            </ul>
        </div>
        <div class="badan">
            <?php
            //pemanggilan halaman dengan switch...case...
            if(isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'home';
                        include "page/home.php";
                        break;
                    case 'data';
                        include "page/data.php";
                        break;
                    case 'kelola';
                        include "page/kelola.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else {
                include "page/home.php";
            }
            ?>
        </div>
        <footer>
            Ini adalah footer
        </footer>
    </div>
</body>
</html>