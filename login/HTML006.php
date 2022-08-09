<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>html006</title>
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
                </ul>

            </div>
        </nav>

        <body>
            <h2>การเชื่อมโยงหน้าเว็บเพจ</h2>
            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>1. สร้าง hyperlink</h5>
                <p style="text-align:center;">รูปแบบของ hyperlink ภายใน directory เดียวกัน</p>
                <p style="text-align:center;">&lt;a href='ชื่อไฟล์ที่ต้องการลิงค์'&gt; ตัวอักษรที่จะใช้แสดง &lt;/a&gt;</p>
                <p style="text-align:center;">รูปแบบของ hyperlink จาก directory ที่ต่ำกว่า 1 ขั้น</p>
                <p style="text-align:center;">&lt;a href='ชื่อ directory ที่เก็บไฟล์ไว้/ชื่อไฟล์ที่ต้องการลิงค์'&gt;
                    ตัวอักษรที่จะใช้แสดง &lt;/a&gt;</p>
                <p style="text-align:center;">รูปแบบของ hyperlink จาก directory ที่สูงกว่า</p>
                <p style="text-align:center;">&lt;a href='../ชื่อไฟล์ที่ต้องการลิงค์'&gt; ตัวอักษรที่จะใช้แสดง &lt;/a&gt;</p>
                <h6> ลิงค์กับเว็บภายนอก</h6>
                <p style="text-align:center;">&lt;a href='http://domain name'&gt; ตัวอักษรที่จะใช้แสดง &lt;/a&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>2. สร้าง hyperlink ด้วยรูปภาพ </h5>
                <p style="text-align:center;">&lt;a href='หน้าที่ต้องการเชื่อมโยง'&gt;
                    &lt;img border = '0' src ='ที่อยู่ภาพ/ชื่อภาพ'&gt;
                    &lt;/a&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>3. สร้าง hyperlink ในหน้าเดียวกัน </h5>
                <p style="text-align:center;">สร้างจุดที่ต้องการจะลิงก์ไป</p>
                <p style="text-align:center;">&lt;a name='ชื่อจุดลิงค์'&gt; &lt;/a&gt;</p>
                <p style="text-align:center;">สร้างลิงก์</p>
                <p style="text-align:center;">&lt;a href='#ชื่อจุดลิงค์'&gt; ตัวอักษรที่ต้องการแสดง &lt;/a&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>4. เปิด browser ใหม่เมื่อคลิกที่ลิงก์</h5>
                <p style="text-align:center;">การสร้าง link ให้เปิด browser ใหม่เราจะใช้ Attributes โดยพิมพ์ target="_blank" ใน a
                    tag</p>
                <p style="text-align:center;">&lt;a href="เป้าหมาย" target="_blank"&gt;ตัวอักษรที่ใช้แสดง&lt;/a&gt;</p>
            </div>
            <br>

            <script src="script.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </center>
</body>

</html>