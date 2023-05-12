<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.add.css">
    <title>Tambah Mahasiswa</title>
</head>
<body>
<div class="container">
		<h1>Tambah Data Mahasiswa</h1>
		<form action="add_mahasiswa.php" method="POST">
			<div class="form-group">
				<label for="nama">Nama:</label>
				<input type="text" name="nama" id="nama" required>
			</div>
			<div class="form-group">
				<label for="no_telp">No. Telepon:</label>
				<input type="tel" name="no_telp" id="no_telp" required>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat:</label>
				<input type="text" name="alamat" id="alamat" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" required>
			</div>
			<input type="submit" value="Simpan">
		</form>
	</div>

    <?php
        include '../koneksi.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
            $no_telp = isset($_POST['no_telp']) ? $_POST['no_telp'] : '';
            $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $created_date = date('Y-m-d H:i:s');
            $status = 'aktif';

            $sql = "INSERT INTO tb_mahasiswa (Nama_mhs, No_telp, Alamat, Email, Created_date, Status)
                VALUES ('$nama', '$no_telp', '$alamat', '$email', '$created_date', '$status')";

            if (mysqli_query($conn, $sql)) {
                echo "<br> Data berhasil disimpan";
                echo "<br><br> <a href='../index.php'>Kembali</a>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);
        }
    ?>
</body>
</html>