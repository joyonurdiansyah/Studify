<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.table.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Tanggal Daftar</th>
            <th>Status</th>
        </tr>
        <?php
        include '../koneksi.php';
        $sql = "SELECT * FROM tb_mahasiswa";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["Id_mhs"] . "</td>";
                echo "<td>" . $row["Nama_mhs"] . "</td>";
                echo "<td>" . $row["No_telp"] . "</td>";
                echo "<td>" . $row["Alamat"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["Created_date"] . "</td>";
                echo "<td>" . $row["Status"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "Tidak ada data";
        }
        mysqli_close($conn);
        ?>
    </table>

</body>

</html>