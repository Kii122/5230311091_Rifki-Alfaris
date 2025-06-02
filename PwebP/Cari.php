<?php
include 'koneksi.php';

$nama_mahasiswa = $_POST['Nama_Mahasiswa'];
$sql = "SELECT * FROM tb_mahasiswa WHERE Nama_Mahasiswa LIKE '%$nama_mahasiswa%'";
$hasil = mysqli_query($connection, $sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pencarian Mahasiswa</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <h1>Hasil Pencarian Mahasiswa</h1>
    <?php
    if (mysqli_num_rows($hasil) > 0) {
        while ($data = mysqli_fetch_array($hasil)) {
            echo "<div class='mahasiswa-card'>";
            echo "<p><strong>Nama Mahasiswa:</strong> " . $data['Nama_Mahasiswa'] . "</p>";
            echo "<p><strong>Jurusan:</strong> " . $data['Prodi_Mahasiswa'] . "</p>";
            echo "<p><strong>Semester:</strong> " . $data['Semester_Mahasiswa'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Tidak ada data mahasiswa yang ditemukan.</p>";
    }
    ?>
    <br>
    <a href="Index.php" class="back-link">Kembali ke halaman utama</a>
</body>
</html>
