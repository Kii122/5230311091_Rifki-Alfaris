<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM tb_mahasiswa WHERE Id_Mahasiswa='$id'";

    if (mysqli_query($connection, $query)) {
        echo "<p>Data berhasil dihapus.</p>";
    } else {
        echo "<p>Error: " . $query . "<br>" . mysqli_error($connection) . "</p>";
    }

    echo "<a href='index.php' class='back-link'>Kembali ke halaman utama</a>";
} else {
    echo "<p>ID tidak ditemukan.</p>";
    echo "<a href='index.php' class='back-link'>Kembali ke halaman utama</a>";
}
?>
</body>
</html>
