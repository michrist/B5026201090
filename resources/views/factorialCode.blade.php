
<html>
    <head>
        <title>Output Factorial</title>
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
            .warna{
                background-color: rgb(204, 219, 224);
                padding: 20px;
                border: solid 3px black;
                width:60%;
            }
        </style>
      </head>
    </head>
    <body>
        <div class="container mt-3 mb-3 warna">
            <h4 align ="center">Calculator output</h4>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <p>The number you entered</p>
                </div>
                <div class="col-sm-1">
                    <p>:</p>
                </div>
                <div class="col-sm-7">
                <?php
                    $number = $_POST['angka'];
                    $factorial = 1;
                    $x = 1;
                    for ($x = 1; $x <= $number; $x++) {
                       $factorial = $factorial * $x;
                    }
                ?>
                <?php  echo $number; ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-4">
                    <?php echo "Factorial of $number" ?>
                </div>
                <div class="col-sm-1">
                    <p>:</p>
                </div>
                <div class="col-sm-7">
                    <?php echo $factorial; ?>
                </div>
            </div>
        </div>
    </body>
</html>
