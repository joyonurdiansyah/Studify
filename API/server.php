<?php
// buat input data
//file_get_contents('php://input');

require_once '../koneksi.php';

if (function_exists($_GET['dbs'])) {
    $_GET['dbs']();
}

function data_kendaraan()
{
    global $conn;

    $query = $conn->query("SELECT * FROM kendaraan ORDER BY ID DESC");
    $dataKendaraan = array();
    while ($row = mysqli_fetch_array($query)) {
        $dataKendaraan[] = $row;
    }
    $responses = array(
        'kode' => 200,
        'Message' => 'Sukses',
        'data' => $dataKendaraan
    );

    header('Content-Type: application/json');
    echo json_encode($responses);
}

function masukkan_data_kendaraan() {
    global $conn;
    //$request_json = file_get_contents('php://input');
    $request_json['Tipe'] = $_POST['Tipe'];
    $request_json['Merk'] = $_POST['Merk'];
    $request_json['Harga'] = $_POST['Harga'];
    $request_json['Warna'] = $_POST['Warna'];
    $request_json['Tahun'] = $_POST['Tahun'];
    $request_json['tgl'] = $_POST['tgl'];
    $request_json['keterangan'] = $_POST['keterangan'];
    $datapost_array1 = json_encode($request_json);
    $datapost_array = json_decode($datapost_array1,true);
    $tglinput = date('Y-m-h h:i:s');
    $simpandata = mysqli_query($conn,"INSERT INTO kendaraan (
        Merk, 
        Tipe, 
        Harga, 
        Warna, 
        Tahun, 
        tgl, 
        keterangan, 
        created_date) VALUES (
            '".$datapost_array['Merk']."',
            '".$datapost_array['Tipe']."',
            '".$datapost_array['Harga']."',
            '".$datapost_array['Warna']."',
            '".$datapost_array['Tahun']."',
            '".$datapost_array['tgl']."',
            '".$datapost_array['keterangan']."',
            '".$tglinput."'
            )");

            if($datapost_array['Merk']==""){
                $responses = array(
                    'kode' => 110,
                    'field' => 'Merk',
                    'Message' => 'Merek harus dan wajib diisi',
                );

            } else if($simpandata){
                $responses = array(
                    'kode' => 200,
                    'Message' => 'Simpan Sukses',
                );
            } else {
                $responses = array(
                    'kode' => 100,
                    'Message' => 'Simpan Gagal',
                );
            }
            header('Content-Type: application/json');
            echo json_encode($responses);

            // bikin 1 table, function baru, buat api nya
    
        }
    // api tambah data pembeli start
    
    // api tambah data pembeli end

    // api ubah data start
    function ubah_data() {
      $id_kent = $_GET['id_kendaraan'];
      //echo $id_kent;

      global $conn;

    $query = $conn->query("SELECT * FROM kendaraan WHERE ID=$id_kent ORDER BY ID DESC");
    $dataKendaraan = mysqli_fetch_object($query);
   
    $responses = array(
        
        'kode' => 200,
        'Message' => 'Sukses',
        'data' => $dataKendaraan
    );

    header('Content-Type: application/json');
    echo json_encode($responses);
    }

    


