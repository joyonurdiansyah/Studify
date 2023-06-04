<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
    <style>

        body {
            background-image: url('https://e1.pxfuel.com/desktop-wallpaper/643/723/desktop-wallpaper-black-sports-cars-dark-cars.jpg'); /* Ganti dengan path menuju gambar latar belakang */
            background-size: cover;
            background-repeat: no-repeat;
        }

        .padding {
            padding: 20px;
        }

        .margin {
            margin-top: 6em;
        }

        .label-form-tambah-data {
            font-size: 50px;
            font-weight: bold;
            color: chocolate;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-align: center;
        }

        /* Menambahkan gaya untuk input */
        .form-control {
            border: 1px solid gray;
            border-radius: 4px;
            padding: 8px;
            width: 100%;
        }

        /* Menambahkan gaya untuk select */
        select.form-control {
            width: 100%;
            height: 34px;
        }

        /* Menambahkan gaya untuk submit button */
        .btn-primary {
            background-color: chocolate;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Menambahkan gaya untuk form card */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 80%;
            margin: 0 auto;
        }

        /* Menambahkan gaya untuk form card pada tampilan layar kecil */
        @media screen and (max-width: 600px) {
            .card {
                width: 100%;
                margin-bottom: 25px;
            }
        }
    </style>
</head>

<body>
    <?php
    include '../../html/include/header.php';
    ?>
    <div class="container margin">
        <div>
            <p class="label-form-tambah-data">form tambah data kendaraan</p>
        </div>
        <div class="card">
            <div class="container padding">
                <form>
                    <div class="mb-3">
                        <label for="InputMerk" class="form-label">Merk</label>
                        <input type="text" name="Merk" class="form-control" id="Merk_id">
                    </div>
                    <!-- combo box -->
                    <div class="mb-3">
                        <label for="InputTipe" class="form-label">Tipe</label>
                        <select name="Tipe" class="form-control" id="Tipe_id">
                            <option value="Toyota">Toyota</option>
                            <option value="Honda">Honda</option>
                            <option value="Suzuki">Suzuki</option>
                            <option value="BMW">BMW</option>
                            <option value="Ford">Ford</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Harga</label>
                        <input type="number" name="Harga" class="form-control" id="Harga_id">
                    </div>
                    <!-- combo box -->
                    <div class="mb-3">
                        <label for="InputTipe" class="form-label">Warna</label>
                        <select name="Warna" class="form-control" id="Warna_id">
                            <option value="putih">Putih</option>
                            <option value="merah">Merah</option>
                            <option value="silver">Silver</option>
                            <option value="doff">Doff</option>
                            <option value="abu">Abu</option>
                        </select>
                    </div>
                    <!-- combo box -->
                    <div class="mb-3">
                        <label for="InputTipe" class="form-label">Tahun</label>
                        <select name="Tahun" class="form-control" id="Tahun_id">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                    <!-- combo box -->
                    <div class="mb-3">
                        <label for="InputTipe" class="form-label">tgl</label>
                        <input type="date" name="tgl" class="form-control" id="tgl_id">
                    </div>
                    <div class="mb-3">
                        <label for="InputTipe" class="form-label">keterangan</label>
                        <textarea class="form-control" name="keterangan" id="keterangan_id" cols="30" rows="5"></textarea>
                    </div>
                    <button type="submit"  class="btn btn-primary simpandata"  >Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
<script>
    // native js
    function simpandata(){
    
    }
    // jquery (frameworknya si js)
    $(".simpandata").click(function(event){
        event.preventDefault();
        let merek = $("#Merk_id").val();
        let tipe = $("#Tipe_id").val();
        let harga = $("#Harga_id").val();
        let warna = $("#Warna_id").val();
        let tahun = $("#Tahun_id").val();
        let tgl = $("#tgl_id").val();
        let keterangan = $("#keterangan_id").val();
       
        $.ajax({
        url: "http://localhost/web_bengkel/API/server.php?dbs=masukkan_data_kendaraan",
        type: "post",
        data: {
            Merk : merek,
            Tipe : tipe,
            Harga : harga,
            Warna : warna,
            Tahun : tahun,
            tgl : tgl,
            keterangan : keterangan

        } ,
        success: function (res) {
            console.log('data yang dikirm api setelah simpan',res)
            if(res.kode==200){         
                window.location.href='http://localhost/web_bengkel/index.php'
            } else  if(res.kode==110){
                alert(res.Message)
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
    });
    

</script>