<?php
	header('Content-Type: application/json');
	
	include '../koneksi.php';
	
	$sql = "SELECT * FROM tb_mahasiswa";
	$result = mysqli_query($conn, $sql);
	
	$data = array();
	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}
	
	echo json_encode($data, JSON_PRETTY_PRINT);
	
	mysqli_close($conn);
?>