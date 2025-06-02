<?php
include 'koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['Id_Mahasiswa'];
        $nama = $_POST['Nama_Mahasiswa'];
        $prodi = $_POST['Prodi_Mahasiswa'];
        $semester = $_POST['Semester_Mahasiswa'];

        $query = "UPDATE tb_mahasiswa 
                  SET Nama_Mahasiswa='$nama', Prodi_Mahasiswa='$prodi', Semester_Mahasiswa='$semester' 
                  WHERE Id_Mahasiswa='$id'";

        if (mysqli_query($connection, $query)) {
            echo "<h2>Data berhasil diupdate.</h2>";
        } else {
            echo "<h2>Error:</h2> " . $query . "<br>" . mysqli_error($connection);
        }

        echo "<br><a href='index.php'>Kembali ke halaman utama</a>";
    }
    ?>
</body>
</html>
