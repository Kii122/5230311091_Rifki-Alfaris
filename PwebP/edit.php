<?php
include 'koneksi.php';

// Ambil ID dari parameter URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Query data mahasiswa berdasarkan ID
    $query = "SELECT * FROM tb_mahasiswa WHERE Id_Mahasiswa='$id'";
    $hasil = mysqli_query($connection, $query);

    if ($hasil && mysqli_num_rows($hasil) > 0) {
        $data = mysqli_fetch_assoc($hasil);
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="Id_Mahasiswa" value="<?php echo $data['Id_Mahasiswa']; ?>">
        <label for="Nama_Mahasiswa">Nama Mahasiswa:</label><br>
        <input type="text" name="Nama_Mahasiswa" value="<?php echo $data['Nama_Mahasiswa']; ?>" required><br>
        <label for="Prodi_Mahasiswa">Jurusan:</label><br>
        <input type="text" name="Prodi_Mahasiswa" value="<?php echo $data['Prodi_Mahasiswa']; ?>" required><br>
        <label for="Semester_Mahasiswa">Semester:</label><br>
        <input type="number" name="Semester_Mahasiswa" value="<?php echo $data['Semester_Mahasiswa']; ?>" required><br><br>
        <input type="submit" value="Update">
    </form>
    <br>
    <a href="index.php">Kembali ke halaman utama</a>
</body>
</html>
