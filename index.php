<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>m.rizky</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/820c64184d.js" crossorigin="anonymous"></script>
    <!-- Akhir Awesome-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="menu-toggle" onclick="toggleMenu()">
        <div class="menu-icon"></div>
        <div class="menu-icon"></div>
        <div class="menu-icon"></div>
    </div>
    <div id="menuContent" class="menu-content">
        <a href="#">Beranda</a>
        <a href="#tentang">Tentang</a>
        <a href="#hobi">Hobi</a>
        <a href="#kontak">Kontak</a>
    </div>
    <div class="container">
        <h1>Portofolio</h1>
        <img src="rizky.jpg" width="15%" alt="Foto Rizky">
        <br>
        <p>Nama: Muhammad Rizky Ramadhan</p>
        <p>NIM: 2300018297</p>
        <br> 
        <p>Saya adalah seorang mahasiswa di Universitas Ahmad Dahlan</p>
        <p>Selamat datang di website saya...</p>
    </div>

    <div id="tentang" class="section">
        <h2>Tentang Saya</h2>
        <p>Halo, nama saya Muhammad Rizky Ramadhan atau bisa dipanggil Rizky.
        <br>Saya lahir di Majalengka pada tanggal 08-November-2004.
        <br>Saya adalah seorang mahasiswa dari Universitas Ahmad Dahlan. 
        <br>Website ini merupakan tugas dari mata kuliah Pemrograman Web.
        <br>Di dalam website ini, Anda dapat mengetahui identitas saya beserta hobi saya.</p>
    </div>

    <div id="hobi" class="section">
        <h2>Hobi</h2>
        <p>Hobi saya adalah bermain game dan fotografi.</p>
        <img src="game.jpg" width="20%" alt="Bermain game">
        <br>
        <img src="foto.jpg" width="20%" alt="Fotografi">
    </div>

    <div id="kontak" class="section">
        <h2>Kontak</h2>
        <?php include 'contact.php'; ?>
    </div>

    <footer>
        <p>© 2024 Portofolio Rizky</p>
    </footer>

    <script src="script.js"></script>
    <!-- Debug Path -->
    <?php echo '<p>Current path: ' . __DIR__ . '</p>'; ?>
</body>
</html>
