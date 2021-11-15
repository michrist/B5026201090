<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>My Profile in jQuery</title>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#profile").load("https://icanhazdadjoke.com/", function(responseTxt, statusTxt, jqXHR){
            if(statusTxt == "success"){
                alert("Konten berhasil diload!");
            }
            if(statusTxt == "error"){
                alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
            }
        });
    });
});
</script>
<style>
    body {
	        background-image: url(images/background1.jpg);
	        background-size: cover;
	        background-repeat: no-repeat;
	        background-attachment: fixed;
    }
</style>
</head>
<body>
    <div id="profile">
        <h1 align ="center">Jika anda bosan, baca jokes berikut</h1>
    </div>
    <center>
    <button type="button">Random Jokes</button>
    </center>
</body>
</html>
