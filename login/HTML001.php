<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equi v="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>html001</title>
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="stylesheet" href="./Style/game.css">
    <script src="./Style/game.js" defer></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
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



        <br>
        <h2>โครงสร้างภาษา HTML</h2>
        <br>
        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <br><br>
            <h5>1.ความรู้เบื้องต้นเกี่ยวกับภาษา HTML</h5>
            <div align="center">
                <p style="text-align:center;">1. Text หมายถึง ข้อควา่มทั่วไปที่สื่อสารกับผู้เข้าชมเว็บเพจ</p>
                <p style="text-align:center;">2. Tag หมายถึง คําสั่งที่ใช้ในภาษา HTML อยู่ในเครื่องหมาย </p>

                <br>
                <p style="text-align:center;">&lt;h1&gt;…&lt;/h1&gt; ใช้เน้นหัวข้อเรื่อง</p>
                <p style="text-align:center;">&lt;p&gt;…&lt;/p&gt; ใช้จัดพารากราฟ</p>
                <p style="text-align:center;">&lt;b&gt;…&lt;/b&gt; ใช้กำหนดให้ตัวอักษรเป็นตัวหนา</p>
                <p style="text-align:center;">&lt;hr&gt; ใช้สร้างเส้นคั่น </p>
                <p style="text-align:center;">&lt;br&gt; ใช้สําหรับการขึ้นบรรทัดใหม่</p>
            </div>
        </div>
        <br>

        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <br><br>
            <p style="text-align:center;">3.Attribute
            <p>&lt;p align="center"&gt;ข้อความในพารากราฟนี้จัดวางอยู่กึ่งกลางหน้าจอ &lt;/p&gt;</p>
            <p>&lt;hr width="200" color="red" noshade&gt; ใช้สร้างเส้นคั่นยาว 200 pixel สีแดงทึบ</p>
        </div>
        <br>

        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <br><br>
            <p style="text-align:center;">4. Webpage หมายถึง หน้าต่างที่สามารถแสดงข้อมูลตัวเลข ตัวอักษร รูปภาพ เพลง หรือวีดีโอ
                โดยในทุกหน้างต่างที่มีข้อมูลเหล่านี้ภายในเว็บไซต์นั้น</p>
        </div>
        <br>

        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <br><br>
            <p style="text-align:center;">5. Homepage หมายถึง คำที่ใช้เรียกหน้าแรกของเว็บไซต์ โดยเป็นทางเข้าหลักของเว็บไซต์</p>
        </div>
        <br>

        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <br><br>
            <p style="text-align:center;">6. Website หมายถึง หน้าเว็บเพจที่จัดทำขึ้น เพื่อนำเสนอข้อมูลต่างๆ</p>
        </div>
        <br>

        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <br><br>
            <h5>2.โครงสร้างภาษา HTML</h5>
            <p style="text-align:center;">โครงสร้างของไฟล์ภาษา HTML มี 2 ส่วน คือ</p>
            <p style="text-align:center;">1) ส่วนที่เป็นข้อมูลที่ต้องการแสดง </p>
            <p style="text-align:center;">2) ส่วนที่เป็นคำสั่งแท็ก</p>
        </div>
        <br>

        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <br><br>
            <h5>2.1 ส่วนหัวเรื่องเอกสารเว็บ (Head Section)</h5>
            <p style="text-align:center;">&lt;HEAD&gt;</p>
            <p style="text-align:center;">&lt;TITLE&gt;เรียนรู้ HTML&lt;/TITLE&gt;</p>
            <p style="text-align:center;">&lt;META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=TIS-620"&gt;</p>
            <p style="text-align:center;">&lt;META NAME="Author" CONTENT="ชื่อผู้พัฒนาเว็บ"&gt;&lt;META NAME="KeyWords"
                CONTENT="ข้อความ 1, ข้อความ 2, …"&gt;</p>
            <p style="text-align:center;">&lt;/HEAD&gt;</p>
        </div>
        <br>

        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <br><br>
            <h5>2.2 ส่วนเนื้อหาเอกสารเว็บ (Body Section)</h5>
            <p style="text-align:center;">&lt;HTML&gt;</p>
            <p style="text-align:center;">&lt;HEAD&gt;</p>
            <p style="text-align:center;">&lt;TITLE&gt;เรียนรู้ HTML&lt;/TITLE&gt;</p>
            <p style="text-align:center;">&lt;META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=TIS-620"&gt;</p>
            <p style="text-align:center;">&lt;META NAME="Author" CONTENT="ชื่อผู้พัฒนาเว็บ"&gt;&lt;META NAME="KeyWords"
                CONTENT="ข้อความ 1, ข้อความ 2, …"&gt;</p>
            <p style="text-align:center;">&lt;/HEAD&gt;</p>
            <p style="text-align:center;">&lt;BODY&gt;</p>
            <p style="text-align:center;">ข้อความ รูปภาพ หรือภาพเคลื่อนไหวที่ต้องการแสดง</p>
            <p style="text-align:center;">&lt;/BODY&gt;</p>
            <p style="text-align:center;">&lt;/HTML&gt;</p>
        </div>
        <br>

        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <br><br>
            <h6>คำสั่งในการเริ่มต้นในการสร้างเว็บเพจ</h6>
            <h6>คำสั่งเริ่มต้น</h6>
            <p style="text-align:center;">&lt;HTML&gt;………&lt;/HTML&gt;</p>
        </div>
        <br>

        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <br><br>
            <h6>ส่วนหัวของโปรแกรม</h6>
            <p style="text-align:center;">&lt;HEAD&gt;………&lt;/HEAD&gt;</p>
            <p style="text-indent: 2.5em;">คำสั่ง
                &lt;HEAD&gt; เป็นคำสั่งที่ใช้กำหนดข้อความในส่วนที่เป็นชื่อเรื่องของไฟล์ HTML และภายในคำสั่ง
                &lt;HEAD&gt;…&lt;/HEAD&gt; จะมีคำสั่งย่อยอีกคำสั่งหนึ่งคือ &lt;TITLE&gt;……..&lt;/TITLE&gt;</p>
        </div>
        <br>

        <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <br><br>
            <h6>กำหนดข้อความในส่วนหัวของโปรแกรมหรือไตเติลบาร์</h6>
            <p style="text-align:center;">&lt;TITLE&gt;………&lt;/TITLE&gt;</p>
            <h6>ส่วนเนื้อหาของโปรแกรม</h6>
            <p style="text-align:center;">&lt;BODY&gt;………&lt;/BODY&gt;</p>
        </div>

      


        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </center>
</body>

</html>