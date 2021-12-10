<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>

</head>
<style>
    body {
    transition: background-color .5s;
    }
    .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    }
    .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
    }
    .sidenav a:hover {
    color: #f1f1f1;
    }
    .sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    }
    #main {
    transition: margin-left .5s;
    padding: 16px;
    }
    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }
</style>
<body class="container mt-3">
    <div id="mySidenav" class="sidenav" style="margin-top:70px">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="img bg-wrap text-center py-4" >
        <img src="{{URL::asset('/images/foto.jpg')}}" class="img-fluid rounded-circle mt-1" alt="profile Pic" width="50%">
        <h5 class="text-light mt-3">Michael Christopher</h5>
        <h6 class="text-light">5026201090</h6>
        </div>
        <a href="/pegawai">Pegawai</a>
        <a href="/absen">Absen</a>
        <a href="/tugas">Tugas</a>
        <a href="/vga">VGA</a>
      </div>

      <div id="main">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <span class="navbar-brand container-fluid" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        </nav>
        <div class="container-fluid" style="margin-top:70px; margin-bottom:30px">
        <h1>@yield('judulhalaman')</h1>
        @section('isikonten')
        @show
        </div>
        <footer>
            <div class="text-center mx-auto p-2">
                Hak Cipta Oleh 5026201090 - Michael Christopher © 2021
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
      <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
        }
        </script>
    <script>
        $(function () {
            $.extend(true, $.fn.datetimepicker.defaults, {
                icons: {
                    time: 'far fa-clock',
                    date: 'far fa-calendar',
                    up: 'fas fa-arrow-up',
                    down: 'fas fa-arrow-down',
                    previous: 'fas fa-chevron-left',
                    next: 'fas fa-chevron-right',
                    today: 'far fa-calendar-check-o',
                    clear: 'far fa-trash',
                    close: 'far fa-times'
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
        });
    </script>
</body>
</html>
