<?php
include 'koneksi.php';

$nama_mahasiswa = $_POST['Nama_Mahasiswa'];
$prodi_mahasiswa = $_POST['Prodi_Mahasiswa'];
$semester_mahasiswa = $_POST['Semester_Mahasiswa'];

$query = "INSERT INTO tb_mahasiswa (`Nama_Mahasiswa`, `Prodi_Mahasiswa`, `Semester_Mahasiswa`) VALUES ('$nama_mahasiswa', '$prodi_mahasiswa', '$semester_mahasiswa')";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <?php
    if (mysqli_query($connection, $query)) {
        echo "<h2>Data berhasil ditambahkan</h2>";
    } else {
        echo "<h2>Error:</h2> " . $query . "<br>" . mysqli_error($connection);
    }
    ?>
    <br>
    <a href="index.php">Kembali ke halaman utama</a>
</body>
</html>
