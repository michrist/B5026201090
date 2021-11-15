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
            }
            form {
                border: solid 3px lightgray;
                width:60%;
                padding: 20px;
                justify-content: center;
                margin: auto;
                background-color: rgb(155,183,194);
            }
            .form-control {
                border: solid 1px black;
            }
            p{
                text-align: right;
            }
        </style>
      </head>
    </head>
    <body>
        <div class="container mt-3 mb-3">
            <form action="https://id.wikipedia.org/wiki/Halaman_Utama" onsubmit="return validateForm()">
            <h2 align ="center">Registration Form</h2>
            <div class="row mt-3">
                <div class="col-sm-2">
                    <p>User id:</p>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-sm" id="userid" name="userid">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">
                    <p>Password:</p>
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-sm" id="pwd" name="pwd">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">
                    <p>Name:</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="name" name="name">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">
                    <p>Address:</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="adrs" name="adrs">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">
                    <p>Country:</p>
                </div>
                <div class="col-sm-6">
                    <select class="form-control form-control-sm" id="country" name="country">
                        <option value ="" selected>(Please select a country)</option>
                        <option>Indonesia</option>
                        <option>Malaysia</option>
                        <option>Singapore</option>
                        <option>Thailand</option>
                        <option>Korea</option>
                        <option>Japan</option>
                    </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">
                    <p>ZIP Code:</p>
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control form-control-sm" id="zip" name="zip">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">
                    <p>Email:</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-sm" id="email" name="email" >
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">
                    <p>Sex:</p>
                </div>
                <div class="col-sm-10">
                    <div class="form-check-inline">
                          <input type="radio" class="form-check-input" id="male" name="female" value="Male">Male
                      </div>
                      <div class="form-check-inline">
                          <input type="radio" class="form-check-input" id="female" name="female" value="Female">Female
                      </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">
                    <p>Language:</p>
                </div>
                <div class="col-sm-10">
                    <div class="form-check-inline">
                          <input type="checkbox" class="form-check-input" id="english" name="english" value="english">English
                      </div>
                      <div class="form-check-inline">
                          <input type="checkbox" class="form-check-input" id="non" name="non" value="non">Non English
                      </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-sm-2">
                    <p>About:</p>
                </div>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="8" id="about" name="about"></textarea>
                </div>
            </div>
            <div class="container text-center mt-3">
                <button type="submit">Submit</button>
            </div>
            </form>
        </div>
        <script>
            function validateForm(){
                const uid = document.getElementById("userid").value;
                const password = document.getElementById("pwd").value;
                const nama = document.getElementById("name").value;
                const zipcode = document.getElementById("zip").value;
                const email = document.getElementById("email").value;

                if(uid == ""){
                    alert("User id wajib di isi");
                    return false;
                }
                if(uid.length < 5 || uid.length >= 12){
                    alert("Jumlah karakter yang diperbolehkan untuk user id 5 sampai 12 karakter");
                    return false;
                }
                if(password == ""){
                    alert("Password wajib di isi");
                    return false;
                }
                if(password.length < 7 || password.length >= 12){
                    alert("Jumlah karakter yang diperbolehkan untuk password 7 sampai 12 karakter");
                    return false;
                }
                if(nama == ""){
                    alert("Nama wajib di isi");
                    return false;
                }
                var huruf = /^[A-Za-z\s]+$/;
                if(!nama.match(huruf)){
                    alert("Gunakan hanya alphabet dan spasi saat mengisi nama!");
                    return false;
                }
                if(document.getElementById("country").selectedIndex == 0){
                    alert("Pilih negara!");
                    return false;
                }
                if(zipcode == ""){
                    alert("ZIP Code wajib di isi");
                    return false;
                }
                var angka = /^[0-9]+$/;
                if(!zipcode.match(angka)){
                    alert("Gunakan hanya angka saat mengisi ZIP Code!");
                    return false;
                }
                if(email == ""){
                    alert("Email wajib di isi");
                    return false;
                }
                var foremail = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(!email.match(foremail)){
                    alert("Gunakan format email yang tepat!");
                    return false;
                }
                if(document.getElementById("male").checked == false && document.getElementById("female").checked == false){
                    alert("Pilih jenis kelamin!");
                    return false;
                }
                if(document.getElementById("english").checked == false && document.getElementById("non").checked == false){
                    alert("Pilih bahasa!");
                    return false;
                }
            }
        </script>
    </body>
</html>
