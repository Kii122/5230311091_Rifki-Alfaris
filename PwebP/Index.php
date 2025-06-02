<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <?php
    include 'koneksi.php';
    $hasil = mysqli_query($connection, "SELECT * FROM tb_mahasiswa");
    echo "<h1>Data Mahasiswa</h1>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>No</th><th>Nama Mahasiswa</th><th>Jurusan</th><th>Semester</th><th>Aksi</th></tr>";
    $no = 1;
    while ($data = mysqli_fetch_array($hasil)) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data['Nama_Mahasiswa']."</td>";
        echo "<td>".$data['Prodi_Mahasiswa']."</td>";
        echo "<td>".$data['Semester_Mahasiswa']."</td>";
        echo "<td>
                <a href='edit.php?id=".$data['Id_Mahasiswa']."'>Edit</a> | 
                <a href='hapus.php?id=".$data['Id_Mahasiswa']."' onclick=\"return confirm('Yakin ingin hapus data ini?')\">Hapus</a>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <h2>Tambah Data Mahasiswa</h2>
    <form action="tambah.php" method="post">
        <label for="nama">Nama Mahasiswa</label><br>
        <input type="text" name="Nama_Mahasiswa" required><br>
        <label for="prodi">Jurusan</label><br>
        <input type="text" name="Prodi_Mahasiswa" required><br>
        <label for="semester">Semester</label><br>
        <input type="number" name="Semester_Mahasiswa" required><br>
        <input type="submit" value="Tambah Data">
        <input type="reset" value="Reset">
    </form>

    <h2>Cari Data Mahasiswa</h2>
    <form action="cari.php" method="post">
        <label for="cari">Cari Mahasiswa</label><br>
        <input type="text" name="Nama_Mahasiswa" required><br>
        <input type="submit" value="Cari">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
