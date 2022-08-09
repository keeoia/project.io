<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <title>php001</title>
    <link rel="stylesheet" href="./Style/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'IBM Plex Sans Thai', sans-serif;
        }
    </style>


</head>

<body>
    <center>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="HOME" class="topnav-icons fa fa-home w3-left w3-bar-item w3-button" title="HOME"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">

                        <div class='btn'>
                            <a href="HTML-1.php" style="color: black;">HOME</a>
                        </div>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">HTML</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="HTML001.php" style="color: black;">โครงสร้างภาษา HTML</a><br>
                            <a href="HTML002.php" style="color: black;">การจัดการข้อความ</a><br>
                            <a href="HTML003.php" style="color: black;">การตกแต่งข้อความ</a><br>
                            <a href="HTML004.php" style="color: black;">การแสดงรายการกับการจัดการรูปภาพ</a><br>
                            <a href="HTML005.php" style="color: black;">การสร้างตาราง</a><br>
                            <a href="HTML006.php" style="color: black;">การเชื่อมโยงหน้าเว็บเพจ</a><br>
                            <a href="HTML007.php" style="color: black;">การสร้างฟอร์ม</a><br>
                        </div>
                    </li>
                    <div>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">PHP</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="php001.php" style="color: black;">โครงสร้างของภาษา PHP</a><br>
                                <a href="php002.php" style="color: black;">ตัวแปรและประเภทข้อมูล</a><br>
                                <a href="php003.php" style="color: black;">อินพุต เอาต์พุต พื้นฐาน</a><br>
                                <a href="php004.php" style="color: black;">คำสั่งเลือกเงื่อนไข</a><br>
                                <a href="php005.php" style="color: black;">คลาส ในภาษา PHP</a><br>
                                <a href="php006.php" style="color: black;">วันที่และเวลา ในภาษา PHP</a><br>
                            </div>

                    </div>
        </nav>


        <body>
            <h2>อินพุต เอาต์พุต พื้นฐาน PHP</h2>
            <br>
            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>การรับค่าบน Command line</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">$handle = fopen("php://stdin","r");</p>
                <br>
                <p style="text-align:center;">echo "What's your name? ";</p>
                <p style="text-align:center;">$line = fgets($handle);</p>
                <p style="text-align:center;">$line = trim($line);</p>
                <br>
                <p style="text-align:center;">echo "Hello $line!\n";</p>
                <p style="text-align:center;"> ?&gt;</p>
                </p>


            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>การแสดงผลด้วยคำสั่ง echo</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">echo "Bound to pass the point of contemplation.\n";</p>
                <p style="text-align:center;">echo "Mercury ", "Venus ", "Earth ", "Mars", "\n";</p>
                <br>
                <p style="text-align:center;">$lang = "PHP";</p>
                <p style="text-align:center;">echo "$lang is a language for web.\n";</p>
                <br>
                <p style="text-align:center;">$a = 10;</p>
                <p style="text-align:center;">$b = 5;</p>
                <p style="text-align:center;">echo "a + b = ", ($a + $b);</p>
                <p style="text-align:center;"> ?&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>การแสดงผลด้วยคำสั่ง print</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">print "My heart grows so cold.\n";</p>
                <br>
                <p style="text-align:center;">$lang = "PHP";</p>
                <p style="text-align:center;">print "$lang tutorial on marcuscode.com\n";</p>
                <br>
                <p style="text-align:center;">$age = 28;</p>
                <p style="text-align:center;">$age >= 18 ? print "Adult" : print "Young";</p>
                <p style="text-align:center;"> ?&gt;</p>
            </div>
            <br>

</html>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</center>
</body>

</html>