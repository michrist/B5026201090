<html>
    <head>
        <title>Registration Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            body {
                background-image: url(images/background.jpg);
	            background-size: cover;
	            background-repeat: no-repeat;
	            background-attachment: fixed;
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 18px;
            }
            form {
                border: solid 3px lightgray;
                width:60%;
                padding: 40px;
                justify-content: center;
                margin: auto;
                background-color: rgb(204, 219, 224);
            }
            .form-control {
                border: solid 1px black;
            }

            button{
                width: 30%;
            }
        </style>
      </head>
    </head>
    <body>
        <div class="container mt-3 mb-3">
            <form action="https://www.youtube.com/" onsubmit="return validateForm()">
            Michael Christopher Saputra <br>
            Michael<br>
            5026201090
            <br>
            <h4 align ="center">Form Input Data Barang</h4>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <p>Nama Barang</p>
                </div>
                <div class="col-sm-1">
                    <p>:</p>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control form-control-sm" id="name" name="name">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-4">
                    <p>Harga</p>
                </div>
                <div class="col-sm-1">
                    <p>:</p>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control form-control-sm" id="harga" name="harga">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-4">
                    <p>Jenis Barang</p>
                </div>
                <div class="col-sm-1">
                    <p>:</p>
                </div>
                <div class="col-sm-7">
                    <select class="form-control form-control-sm" id="jenis" name="jenis">
                        <option value ="" selected></option>
                        <option>Makanan</option>
                        <option>Minuman</option>
                        <option>Non Mamin</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-4">
                    <p>Kode Barcode</p>
                </div>
                <div class="col-sm-1">
                    <p>:</p>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control form-control-sm" id="kode" name="kode">
                </div>
            </div>
            <br>
            <div class="button text-center">
                <button class="btn-primary submit mx-3" type="submit">Kirim</button>
                <button class="btn-success mx-3" type="reset" >Reset</button>
            </div>
            </form>
        </div>
        <script>
            function validateForm(){
                const nama = document.getElementById("name").value;
                const price = document.getElementById("harga").value;
                const code = document.getElementById("kode").value;

                if(nama == ""){
                    alert("Nama Barang wajib di isi");
                    return false;
                }
                if(nama.length < 10){
                    alert("Jumlah karakter yang diperbolehkan untuk nama barang minimal 10 karakter");
                    return false;
                }
                if(price == ""){
                    alert("Harga wajib di isi");
                    return false;
                }
                var angka = /^[0-9]+$/;
                if(!price.match(angka)){
                    alert("Gunakan hanya angka saat mengisi harga!");
                    return false;
                }
                if(price<=5000){
                    alert("Minimal harga yaitu 5000")
                    return false;
                }
                if(document.getElementById("jenis").selectedIndex == 0){
                    alert("Pilih Jenis Barang!");
                    return false;
                }
                if(code == ""){
                    alert("Kode Barcode wajib di isi");
                    return false;
                }
                if(!code.match(angka)){
                    alert("Gunakan hanya angka saat mengisi kode barcode!");
                    return false;
                }
                if(code.length < 10){
                    alert("Jumlah karakter yang diperbolehkan untuk kode barcode minimal 10 karakter");
                    return false;
                }
            }
        </script>
    </body>
</html>
