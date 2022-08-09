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

                <li>
                <h2>การจัดการข้อความ</h2>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
            <br><br>
            <h5>คำสั่งกำหนดลักษณะหัวเรื่อง</h5>
            <p style="text-align:center;">ข้อความลักษณะหัวเรื่อง </p>
            <p style="text-align:center;">&lt;Hn&gt;....Heading Text ... &lt;/Hn&gt;</p>
            </div>
            </li>

            <li>
            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
            <br><br>    
            <p style="text-align:center;">&lt;HTML&gt;</p>
            <p style="text-align:center;">&lt;HEAD&gt;</p>
            <p style="text-align:center;">&lt;TITLE&gt;การกำหนด Heading&lt;/TITLE&gt;</p>
            <p style="text-align:center;">&lt;/HEAD&gt;</p>
            <p style="text-align:center;">&lt;/HEAD&gt;</p>
            </div>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
            <br><br>
            <p style="text-align:center;">&lt;BODY&gt; </p>
            <p style="text-align:center;"> Computer - Default Size</p>
            <p style="text-align:center;">&lt;H1&gt;Computer - H1&lt;/H1&gt;</p>
            <p style="text-align:center;"> &lt;H2&gt;Computer - H2 &lt;/H2&gt;</p>
            <p style="text-align:center;">&lt;H3&gt;Computer - H3&lt;/H3&gt;</p>
            <p style="text-align:center;">&lt;H4&gt;Computer - H4 &lt;/H4&gt;</p>
            <p style="text-align:center;">&lt;H5&gt;Computer - H5 &lt;/H5&gt;</p>
            <p style="text-align:center;">&lt;H6&gt;Computer - H6 &lt;/H6&gt;</p>
            <p style="text-align:center;"> &lt;/BODY&gt;</p>
            <p style="text-align:center;">&lt;/HTML&gt;</p>
            </div>

        </li>
        <hr>
        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
        <br><br>  
        <h5>การขึ้นบรรทัดใหม่</h5>
        &lt;br&gt;</p>
        </div>
        <br>
    
        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
        <br><br>  
        <h5>กำหนดค่าของการจัดการจัดตำแหน่งการแสดงผล</h5>
        <p style="text-align:center;">•align = "left" การกำหนดค่าของการจัดตำแหน่งการแสดงผลอยู่ทางซ้าย</p>
        <p style="text-align:center;">•align = "right" การกำหนดค่าของการจัดตำแหน่งการแสดงผลอยู่ทางขวา</p>
        <p style="text-align:center;">•align = "center" การกำหนดค่าของการจัดตำแหน่งการแสดงผลอยู่ตรงกลาง</p>
        </div>
        <br>

        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;" >
        <br><br>  
        <h5>คำสั่งตีเส้นบรรทัดหรือเส้นคั่นแนวนอน</h5>
        <p style="text-align:center;">width เป็นการกำหนดความยาวของเส้น มีหน่วยเป็น Pixel หรือ % ก็ได้</p>
        <p style="text-align:center;">align เป็น การจัดวางตำแหน่งของเส้น</p>
        <p style="text-align:center;"> size เป็นการกำหนดขนาดความหนาของเส้นกำหนดเป็น pixel</p>
        <p style="text-align:center;">noshade ไม่ต้องแสดงเป็นแบบ 3 มิติ</p>
        <p style="text-align:center;">color เป็นการระบุสีของเส้น</p>
        <br>

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </center>
</body>

</html>