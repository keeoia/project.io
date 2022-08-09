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
    <title>php002</title>
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
            <h2>คลาส ในภาษา PHP</h2>
            <br>
            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>คลาสคืออะไร</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">class User {</p>
                <p style="text-align:center;">public $firstName;</p>
                <p style="text-align:center;"> public $homeTown;</p>
                <p style="text-align:center;"> private $birthYear;</p>
                <br>
                <p style="text-align:center;">public function indroduce() {</p>
                <p style="text-align:center;">echo "I'm $this->firstName $this->lastName\n";</p>
                <p style="text-align:center;"> echo "I live in $this->homeTown\n";</p>
                <p style="text-align:center;">}</p>
                <p style="text-align:center;">public function setBirthYear($birthYear) {</p>
                <p style="text-align:center;">$this->birthYear = $birthYear;</p>
                <p style="text-align:center;"> }</p>
                <p style="text-align:center;">public function getAge() {</p>
                <p style="text-align:center;"> $currentYear = 2017;</p>
                <p style="text-align:center;"> $age = $currentYear - $this->birthYear;</p>
                <p style="text-align:center;">return $age;</p>
                <p style="text-align:center;"> }</p>
                <p style="text-align:center;">}</p>
                <p style="text-align:center;">?&gt;</p>
                </p>


            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
            <h5>Constructor และ Destructor</h5>
                <br><br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">class User {</p>
                <p style="text-align:center;">public $firstName;</p>
                <p style="text-align:center;">public $lastName;</p>
                <p style="text-align:center;"> public $homeTown;</p>
                <p style="text-align:center;"> private $birthYear;</p>
                <br>
                <p style="text-align:center;">   public function __construct($firstName, $lastName) {</p>
                <p style="text-align:center;"> $this->firstName = $firstName;</p>
                <p style="text-align:center;"> $this->lastName = $lastName;</p>
                <p style="text-align:center;"> }</p>
                <p style="text-align:center;"> public function __destruct() {</p>
                <p style="text-align:center;">  // code when object is destroyed</p>
                <p style="text-align:center;">}</p>
                <p style="text-align:center;"> public function indroduce() {</p>
                <p style="text-align:center;">echo "Hello, my $this->firstName $this->lastName.";</p>
                <p style="text-align:center;">echo "I live in $this->homeTown.";</p>
                <p style="text-align:center;"> }</p>
                <p style="text-align:center;">public function setBirthYear($birthYear) {</p>
                <p style="text-align:center;"> $this->birthYear = $birthYear;</p>
                <p style="text-align:center;"> }</p>
                <p style="text-align:center;">public function getAge() {</p>
                <p style="text-align:center;">$currentYear = 2017;</p>
                <p style="text-align:center;">  $age = $currentYear - $this->birthYear; </p>
                <p style="text-align:center;"> return $age;</p>
                <p style="text-align:center;">}</p>
                <p style="text-align:center;">}</p>
                <p style="text-align:center;">?&gt;</p>

            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Semicolon</h5>
                <br>
                <p style="text-align:center;">$n = 1;</p>
                <p style="text-align:center;" $n=3.25;</p>
                <p style="text-align:center;" $n="PHP" ;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>ฟังก์ชันเกี่ยวกับตัวแปร</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">$site = "MarcusCode";</p>
                <p style="text-align:center;">$year = 2016;</p>
                <p style="text-align:center;">$pi = 3.14;</p>
                <br>
                <p style="text-align:center;">echo var_dump($site);</p>
                <p style="text-align:center;">echo var_dump($year);</p>
                <p style="text-align:center;">echo var_dump($pi);</p>
                <br>
                <p style="text-align:center;">echo isset($site), "\n";</p>
                <p style="text-align:center;">unset($site);</p>
                <p style="text-align:center;">echo isset($site), "\n";</p>
                <p style="text-align:center;">?&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Boolean</h5>
                <br>
                <p style="text-align:center;">$male = true;</p>
                <p style="text-align:center;">$is_rain = false;</p>
                <p style="text-align:center;">$is_even_number = (5 % 2 == 0);</p>
                <p style="text-align:center;">$is_odd_number = !$is_even_number;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>คลาส ในภาษา PHP</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">$apple = 3;</p>
                <p style="text-align:center;">$score = -10;</p>
                <p style="text-align:center;">echo "I have $apple apples in the basket.\n";</p>
                <p style="text-align:center;">echo "Your score is $score .\n";</p>
                <br>
                <p style="text-align:center;">$minute = 5;</p>
                <p style="text-align:center;">$second = 30;</p>
                <p style="text-align:center;">$total_second = ($minute * 60) + $second;</p>
                <p style="text-align:center;">echo "There are $total_second seconds left.\n";</p>
                <p style="text-align:center;">?&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Float</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">$temperature = -10.3;</p>
                <p style="text-align:center;">$height = 6.1;</p>
                <p style="text-align:center;">$pi = 22 / 7;</p>
                <p style="text-align:center;">$distance = 149.6E6;</p>
                <p style="text-align:center;">$atom_size = 0.5E-10;</p>
                <br>
                <p style="text-align:center;">echo "Temperature is $temperature Celsius degree.\n";</p>
                <p style="text-align:center;">echo "He has $height inches height.\n";</p>
                <p style="text-align:center;">echo "PI value is $pi.\n";</p>
                <p style="text-align:center;">echo "Distance between the earth and the sun $distance km.\n";</p>
                <p style="text-align:center;">echo "Atom's size is about $atom_size meter(s)."</p>
                <p style="text-align:center;">?&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>String</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">$country = "United Kingdom";</p>
                <p style="text-align:center;">$fruit = "Apple";</p>
                <p style="text-align:center;">$name = "Marcus";</p>
                <p style="text-align:center;">$date = "November 8, 2016";</p>
                <p style="text-align:center;">?&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Array</h5>
                <br>
                <p style="text-align:center;">&$name = ["Thomas", "Danny", "John", "Lisa", "Sophia"];</p>
                <p style="text-align:center;">print_r($name);</p>
                <br>
                <p style="text-align:center;">$score = [30, 70, 80, 70, 90];</p>
                <p style="text-align:center;">print_r($score);</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Null</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">$var = NULL;</p>
                <p style="text-align:center;">$name;</p>
                <p style="text-align:center;">$a = array();</p>
                <p style="text-align:center;">?&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>การแปลงข้อมูลในภาษา PHP</h5>
                <br>
                <p style="text-align:center;">$floatValue = 1.53;</p>
                <p style="text-align:center;">$intValue = (int)$floatValue;</p>
                <p style="text-align:center;">echo var_dump($floatValue);</p>
                <p style="text-align:center;">echo var_dump($intValue);</p>
            </div>
            <br>

</html>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</center>
</body>

</html>