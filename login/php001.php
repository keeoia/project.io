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
                            <a href="HTML001.php" style="color: black;">??????????????????????????????????????? HTML</a><br>
                            <a href="HTML002.php" style="color: black;">????????????????????????????????????????????????</a><br>
                            <a href="HTML003.php" style="color: black;">????????????????????????????????????????????????</a><br>
                            <a href="HTML004.php" style="color: black;">?????????????????????????????????????????????????????????????????????????????????????????????</a><br>
                            <a href="HTML005.php" style="color: black;">???????????????????????????????????????</a><br>
                            <a href="HTML006.php" style="color: black;">?????????????????????????????????????????????????????????????????????</a><br>
                            <a href="HTML007.php" style="color: black;">???????????????????????????????????????</a><br>
                        </div>
                    </li>
                    <div>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">PHP</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="php001.php" style="color: black;">???????????????????????????????????????????????? PHP</a><br>
                                <a href="php002.php" style="color: black;">???????????????????????????????????????????????????????????????</a><br>
                                <a href="php003.php" style="color: black;">?????????????????? ???????????????????????? ?????????????????????</a><br>
                                <a href="php004.php" style="color: black;">?????????????????????????????????????????????????????????</a><br>
                                <a href="php005.php" style="color: black;">???????????? ?????????????????? PHP</a><br>
                                <a href="php006.php" style="color: black;">??????????????????????????????????????? ?????????????????? PHP</a><br>
                            </div>

                    </div>
        </nav>


        <body>
            <h2>???????????????????????????????????????????????? PHP</h2>
            <br>
            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Simple program</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">echo "Hello World";</p>
                <p style="text-align:center;"> ?&gt;</p>
                </p>


            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Comment</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;"># This is my frist program in PHP</p>
                <p style="text-align:center;">echo "Hello PHP language!\n";</p>
                <br>
                <p style="text-align:center;"># Displaying the site name and year</p>
                <p style="text-align:center;">echo "Marcuscode.com\n";</p>
                <p style="text-align:center;">echo "2016"</p>
                <p style="text-align:center;"> ?&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Semicolon</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">// Initializing variables</p>
                <p style="text-align:center;">$a = 1;</p>
                <p style="text-align:center;">$b = 2; $c = 3;</p>
                <br>
                <p style="text-align:center;">// Display the summation of these variables</p>
                <p style="text-align:center;">echo "a + b + c = ", $a + $b + $c;</p>
                <p style="text-align:center;"> ?&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>While space</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">$name = "PHP";</p>
                <p style="text-align:center;">$name="PHP";</p>
                <p style="text-align:center;">$name= "PHP" ;</p>
                <p style="text-align:center;">?&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Literals</h5>
                <br>
                <p style="text-align:center;">$day = 1;</p>
                <p style="text-align:center;">$month = "December";</p>
                <p style="text-align:center;">$weight = 67.3;</p>
                <p style="text-align:center;">$$meter = 10e3;</p>
                <p style="text-align:center;">$loaded = true;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Literals</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">$a = 2;</p>
                <p style="text-align:center;">$b = 3 + 5;</p>
                <p style="text-align:center;">$c = $a - $b;</p>
                <p style="text-align:center;">$d = ($a * $a) + ($b * $b);</p>
                <p style="text-align:center;">$e = !(1 == 1);</p>
                <p style="text-align:center;">$f = (true && true);</p>
                <p style="text-align:center;">?&gt;</p>
            </div>
            <br>

</html>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</center>
</body>

</html>