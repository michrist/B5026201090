
<html>
    <head>
        <title>Factorial Calculator</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            body {
                background-image: url(images/background2.jpg);
	            background-size: cover;
	            background-repeat: no-repeat;
	            background-attachment: fixed;
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                font-size: 18px;
            }
            form {
                border: solid 3px lightgray;
                width:60%;
                padding: 20px;
                justify-content: center;
                margin: auto;
                background-color: rgb(204, 219, 224);
            }
            .form-control {
                border: solid 1px black;
            }
        </style>
      </head>
    </head>
    <body>
        <div class="container mt-3 mb-3">
            <form action="factorialphp" method="post" onsubmit="return validateForm()">
                @csrf
            <h4 align ="center">Factorial Calculator</h4>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <p>Input Number</p>
                </div>
                <div class="col-sm-1">
                    <p>:</p>
                </div>
                <div class="col-sm-7">
                    <input type="text" class="form-control form-control-sm" id="angka" name="angka">
                </div>
            </div>
            <div class="container text-center mt-3">
                <button type="submit">Submit</button>
            </div>
            </form>
        </div>
        <script>
            function validateForm(){
                var angkafac = document.getElementById("angka").value;

                if(angkafac == ""){
                    alert("Angka wajib di isi");
                    return false;
                }
                var domangka = /^[0-9]+$/;
                if(!angkafac.match(domangka)){
                    alert("Gunakan hanya angka positif saat mengisi Angka!");
                    return false;
                }
            }
        </script>
    </body>
</html>
