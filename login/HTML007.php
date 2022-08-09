<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>html007</title>
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@300&display=swap" rel="stylesheet">
    
<style>
        body{
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

    <h2>การสร้างฟอร์ม</h2>
    <br>

    <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
    <br><br>
    <h5>1. กรอบข้อความ (Text fields)</h5>
    <p style="text-align:center;">&lt;html&gt;</p>
    <p style="text-align:center;">&lt;body&gt;</p>
    <p style="text-align:center;">&lt;from&gt;</p>
    <p style="text-align:center;">ชื่อ: &lt;input type="text" name="firstname"&gt;&lt;br&gt;</p>
    <p style="text-align:center;">นามสกุล: &lt;input type="text" name="lastname"&gt;</p>
    <p style="text-align:center;">&lt;/from&gt;</p>
    <p style="text-align:center;">&lt;/body&gt;</p>
    <p style="text-align:center;">&lt;/html&gt;</p>
    </div>
    <br>

    <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
    <br><br>
    <h5> 2. กรอบรหัสผ่าน (Password fields) </h5>
    <p style="text-align:center;">&lt;from&gt;</p>
    <p style="text-align:center;">รหัสผ่าน: &lt;input type="password" name="pwd"&gt;</p>
    <p style="text-align:center;">&lt;/from&gt;</p>
    </div>
    <br>

    <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
    <br><br>
    <h5> 3. กล่องเลือกทางเดียว (Radio Buttons)</h5>
    <p style="text-align:center;">&lt;from&gt;</p>
    <p style="text-align:center;">&lt;input type="radio" name="like" value="like"&gt;ชอบ&lt;br&gt;</p>
    <p style="text-align:center;">&lt;input type="radio" name="like" value="don'tlike"&gt;ไม่ชอบ</p>
    <p style="text-align:center;">&lt;/from&gt;</p>
    </div>
    <br>

    <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
    <br><br>
    <h5>4. กล่องเลือกแบบหลายทาง (Check boxes)</h5>
    <p style="text-align:center;">&lt;from&gt;</p>
    <p style="text-align:center;">&lt;input type="checkbox" name="language" value="japanese"&gt;พูดภาษาญี่ปุ่นได้<br>
    </p>
    <p style="text-align:center;">&lt;input type="checkbox" name="language" value="english"&gt;พูดภาษาอังกฤษได้</p>
    <p style="text-align:center;">&lt;/from&gt;</p>
    </div>
    <br>

    <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
    <br><br>
    <h5> 5. ปุ่มส่งข้อมูล (Submit Button)</h5>
    <p style="text-align:center;">&lt;from name="login" action="login.php" method="post"&gt;</p>
    <p style="text-align:center;">ชื่อ :&lt;input type="text" name="username"/&gt;</p>
    <p style="text-align:center;">รหัสผ่าน :&lt;input type="passwordt" name="pwd"/&gt;</p>
    <p style="text-align:center;">&lt;input type="submit" value="เข้าระบบ"/&gt;</p>
    <p style="text-align:center;">&lt;/from&gt;</p>
    <p style="text-align:center;">&lt;form&gt; กำหนดฟอร์มเพื่อส่งข้อมูลไปยังเซิร์ฟเวอร์</p>
    <p style="text-align:center;">&lt;input/&gt; กำหนดการป้อนข้อมูล</p>
    <p style="text-align:center;">&lt;textarea&gt; กำหนดการป้อนข้อความแบบหลายบรรทัด</p>
    <p style="text-align:center;">lt;label&gt; กำหนดป้ายชื่อแท็ก input</p>
    <p style="text-align:center;">&lt;fieldset&gt; กำหนดขอบเขตของการป้อนข้อมูล</p>
    <p style="text-align:center;">&lt;legend&gt; กำหนดป้ายชื่อสำหรับขอบเขตของการป้อนข้อมูล(fieldset)</p>
    <p style="text-align:center;">&lt;select&gt; กำหนดรายการที่ให้เลือก(แบบ Drop-down)</p>
    <p style="text-align:center;">&lt;optgroup&gt; กำหนดกลุ่มของตัวเลือก(options) ที่เกี่ยวข้องในรายการที่ให้เลือก</p>
    <p style="text-align:center;">&lt;option&gt; กำหนดตัวเลือกสำหรับรายการที่ให้เลือก</p>
    <p style="text-align:center;">&lt;button&gt; กำหนดปุ่มกด</p>
    </div>
    <br>

<script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </center>
</body>

</html>