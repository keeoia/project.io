<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>html002</title>
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300&display=swap" rel="stylesheet">
    
<style>
        body{
            font-family: 'IBM Plex Sans Thai', sans-serif;
        }
</style>

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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">HTML

                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="HTML001.php" style="color: black;">โครงสร้างภาษา HTML</a><br>
                <a href="HTML002.php" style="color: black;">การจัดการข้อความ</a><br>
                <a href="HTML003.php" style="color: black;">การตกแต่งข้อความ</a><br>
                <a href="HTML004.php" style="color: black;">การแสดงรายการกับการจัดการรูปภาพ</a><br>
                <a href="HTML005.php" style="color: black;">การสร้างตาราง</a><br>
                <a href="HTML006.php" style="color: black;">การเชื่อมโยงหน้าเว็บเพจ</a><br>
                <a href="HTML007.php" style="color: black;">การสร้างฟอร์ม</a><br>
                 </div>

                 <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">PHP</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a href="php001.php" style="color: black;">โครงสร้างของภาษา PHP</a><br>
                            <a href="HTML002.php" style="color: black;">ตัวแปรและประเภทข้อมูล</a><br>
                            <a href="HTML003.php" style="color: black;">อินพุต เอาต์พุต พื้นฐาน</a><br>
                            <a href="HTML004.php" style="color: black;">คำสั่งเลือกเงื่อนไข</a><br>
                            <a href="HTML005.php" style="color: black;">คลาส ในภาษา PHP</a><br>
                            <a href="HTML006.php" style="color: black;">วันที่และเวลา ในภาษา PHP</a><br>
                        </div>
                </nav>

   
    <h2>การตกแต่งข้อความ</h2>
    <br>
    <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
    <br><br>
    <h5>คำสั่งการกำหนดขนาดตัวอักษร</h5>
    <p style="text-align:center;"> การกำหนดหัวเรื่อง สามารถกำหนดได้ โดยใช้คำสั่งดังนี้</p>
    <p style="text-align:center;">&lt;h1&gt;หัวเรื่องขนาดใหญ่ 1&lt;/h1&gt;</p>
    <p style="text-align:center;">&lt;h2&gt;หัวเรื่องขนาดใหญ่ 2&lt;/h2&gt;</p>
    <p style="text-align:center;">&lt;h3&gt;หัวเรื่องขนาดใหญ่ 3&lt;/h3&gt;</p>
    <p style="text-align:center;"> &lt;h4&gt;หัวเรื่องขนาดใหญ่ 4&lt;/h4&gt;</p>
    <p style="text-align:center;">&lt;h5&gt;หัวเรื่องขนาดใหญ่ 5&lt;/h5&gt;</p>
    <p style="text-align:center;"> &lt;h6&gt;หัวเรื่องขนาดใหญ่ 6&lt;/h6&gt;</p>
    </div>
    <br>

    <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
    <br><br>
    <h5>คำสั่งที่กำหนดสีตัวอักษร</h5>
    <p style="text-align:center;"> 1. กำหนดโดยใช้ชื่อสี เช่น red, yellow, blue หรือ pink เป็นต้น </p>
    <p style="text-align:center;"> 2. การกำหนดสีโดยระบุชื่อสีแบบนี้จะมีข้อจำกัดมาก
        เพราะไม่สามารถใช้โทนสีได้มากเท่าที่ใจต้องการ (จะใช้ได้ประมาณ 16 สี)</p>
    
    <p style="text-align:center;"> &lt;font&gt; color="ชื่อสี หรือ code สี ที่ต้องการ">..........&lt;/font&gt;</p>
    </div>
    <br>
    
    <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
    <br><br>
    <h4>การจัดวางตำแหน่งข้อความ</h4>
    <p style="text-align:center;">&lt;p align = "ตำแหน่ง"&gt; ...ข้อความ...&lt;/p&gt;</p>
    <p style="text-align:center;">ตำแหน่งที่สามารถระบุได้ คือ left center หรือ right</p>
    </div>
    <br>

    <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
    <br><br>
    <h5>คำสั่งสำหรับกำหนดสีพื้นหลังของเอกสาร</h5>
    <p style="text-align:center;"> &lt;BODY BGCOLOR = รหัสสี&gt; … &lt;/BODY&gt;</p>
    </div>
    <br>

    <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
    <br><br>
    <h5>คำสั่งสำหรับกำหนดให้ตัวอักษรเคลื่อนที่</h5>
        <p style="text-align:center;">ทิศทางการวิ่งมี 4 อย่าง คือ </p>
        <p style="text-align:center;">1.&lt;marquee direction="left"&gt;ข้อความวิ่งจากขวาไปซ้าย&lt;/marquee&gt;</p>
        <p style="text-align:center;">2.&lt;marquee direction="right"&gt;ข้อความวิ่งจากซ้ายไปขวา&lt;/marquee&gt; </p>
        <p style="text-align:center;">3.&lt;marquee direction="up"&gt;ข้อความวิ่งจากล่างขึ้นบน&lt;/marquee&gt;</p>
        <p style="text-align:center;">4.&lt;marquee direction="down"&gt;ข้อความวิ่งจากบนลงล่าง&lt;/marquee&gt;</p>
    </div>



   
        <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </center>
</body>
</html>