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
            <h2>??????????????????????????????????????? ?????????????????? PHP</h2>
            <br>
            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>????????????????????????????????????????????????????????????????????????????????????</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">echo "UTC Time\n";</p>
                <p style="text-align:center;">$date1 = new DateTime();</p>
                <p style="text-align:center;">echo $date1->format(DateTime::RFC1123) . "\n";</p>
                <br>
                <p style="text-align:center;">echo "Time in Bangkok\n";</p>
                <p style="text-align:center;">$date2 = new DateTime();</p>
                <p style="text-align:center;">$date2->setTimezone(new DateTimeZone('Asia/Bangkok'));</p>
                <p style="text-align:center;">echo $date2->format(DateTime::RFC1123) . "\n";</p>
                <p style="text-align:center;">?&gt;</p>
                </p>


            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <h5>?????????????????????????????????????????????????????????????????????????????????????????????????????????</h5>
                <br><br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">// ISO 8601</p>
                <p style="text-align:center;">$date1 = new DateTime("2020-10-24T05:28:00+0000"); </p>
                <p style="text-align:center;">$date2 = new DateTime("2020-10-24T05:28:00+0700");</p>
                <p style="text-align:center;"> // RFC 1123</p>
                <p style="text-align:center;">$date3 = new DateTime("Sat, 24 Oct 2020 05:28:00 +0700");</p>
                <p style="text-align:center;"> // RFC 850</p>
                <p style="text-align:center;">$date4 = new DateTime("Saturday, 24-Oct-20 05:28:00 GMT+0700");</p>
                <br>
                <p style="text-align:center;">echo $date1->format(DateTime::RFC1123) . "\n";</p>
                <p style="text-align:center;">echo $date2->format(DateTime::RFC1123) . "\n";</p>
                <p style="text-align:center;">echo $date3->format(DateTime::RFC1123) . "\n";</p>
                <p style="text-align:center;">echo $date4->format(DateTime::RFC1123) . "\n";</p>
                <p style="text-align:center;">?&gt;</p>

            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>???????????????????????????????????????????????????????????????????????????</h5>
                <br>
                <p style="text-align:center;">&lt;?php</p>
                <p style="text-align:center;">date_default_timezone_set('UTC');</p>
                <p style="text-align:center;">$date = new DateTime();</p>
                <br>
                <p style="text-align:center;">echo $date->format(DateTime::ATOM) . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::COOKIE) . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::ISO8601) . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::RFC822) . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::RFC850) . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::RFC1036) . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::RFC1123) . "\n";</p>

                <p style="text-align:center;">echo $date->format(DateTime::RFC7231) . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::RFC2822) . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::RFC3339) . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::RFC3339_EXTENDED) . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::RSS) . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::W3C) . "\n";</p>
                <p style="text-align:center;">?&gt;</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Timestamp</h5>
                <br>
                <p style="text-align:center;">$now = time();</p>
                <p style="text-align:center;">echo $now . ' seconds since January 1 1970 00:00:00 GMT';</p>
            </div>
            <br>

            <div style="border: 2px dashed #000000; overflow: auto; width: 450px; height: auto; text-align: center;">
                <br><br>
                <h5>Time zone</h5>
                <br>
                <p style="text-align:center;">$date = new DateTime();</p>
                <p style="text-align:center;">$timezone = $date->getTimezone();</p>
                <br>
                <p style="text-align:center;">echo $timezone->getName() . "\n";</p>
                <p style="text-align:center;">echo $date->format(DateTime::RFC1123) . "\n";</p>
                <p style="text-align:center;">echo "Default Time zone: " . date_default_timezone_get() . "\n";</p>
            </div>
            <br>

           

</html>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</center>
</body>

</html>