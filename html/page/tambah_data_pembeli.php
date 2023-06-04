<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data pengguna</title>
</head>

<body>
    <?php
    include '../../html/include/header.php';
    ?>
    <div class="container margin">
        <div>
            <p class="label-form-tambah-data">Form Tambah Data Pengguna</p>
        </div>
        <div class="card">
            <div class="container padding">
                <form>
                    <div class="mb-3">
                        <label for="InputNama" class="form-label">Nama Pembeli</label>
                        <input type="text" name="Nama" class="form-control" id="Nama_id">
                    </div>
                    <div class="mb-3">
                        <label for="InputAlamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="Alamat" id="Alamat_id" cols="30" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="InputTelepon" class="form-label">Nomor Telepon</label>
                        <input type="text" name="Telepon" class="form-control" id="Telepon_id">
                    </div>
                    <div class="mb-3">
                        <label for="InputTipe" class="form-label">tanggal pembelian</label>
                        <input type="date" name="Tanggal_Beli" class="form-control" id="tgl_beli_id">
                    </div>
                    <button type="submit" class="btn btn-primary simpandata">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<script>
    // native js
    function simpandata() {

    }
    // jquery (frameworknya si js)
    $("form").submit(function (event) {
        event.preventDefault();
        let nama = $("#Nama_id").val();
        let alamat = $("#Alamat_id").val();
        let telepon = $("#Telepon_id").val();
        let tanggalBeli = $("#tgl_beli_id").val();
        $.ajax({
            url: "http://localhost/web_bengkel/API/server.php?dbs=masukkan_data_pengguna",
            type: "post",
            data: {
                Nama: nama,
                Alamat: alamat,
                Telepon: telepon,
                Tanggal_Beli: tanggalBeli
            },
            success: function (res) {
                console.log('Data pengguna yang tersimpan', res)
                if (res.kode == 200) {
                    window.location.href = 'http://localhost/web_bengkel/index.php'
                } else if (res.kode == 110) {
                    alert(res.Message)
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
</script>
</body>

</html>