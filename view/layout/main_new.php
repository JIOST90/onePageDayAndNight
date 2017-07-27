<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<style>
    .main_background div.back-image{
        position: absolute;
        width: 100%;
        height: 100%;
        background-image: url(img/354f603c06e0767dce06acf04b765952.jpg); /* Путь к фоновому изображению */
    }
    /*.container{*/
        /*position: relative;*/
    /*}*/
    .header-left {
        position: fixed;
        left: 0;
        margin: 80px 116px 0 80px;
    }

    .header-center{
        position: fixed;
        left: 50%;
        margin-left: -64px;
        top: 10%;
    }

    .header-right{
        position: fixed;
        right: 0;
        margin: 80px 116px 0 -10px;
    }

    .center-big {
        position: fixed;
        left: 0;
        margin: 300px 116px 0 80px;
    }

    .center-small {
        position: fixed;
        left: 0;
        margin: 400px 116px 0 80px;
    }

    .body-left {
        position: fixed;
        left: 0;
        margin: 500px 116px 0 80px;
    }

    .body-right {
        position: fixed;
        right: 0;
        margin: 500px 116px 0 -10px;
    }

</style>

<div class="main_background">
    <div class="back-image"></div>
</div>


<div class="header" style="display: inline-flex;">
    <div class="header-left">
        PICTURE left
    </div>
    <div class="header-center">
        text center left
    </div>
    <div class="header-right">
        text right
    </div>
</div><br />

<div class="center" style="display: inline-flex;">
    <div class="center-big">
        TEXT BIG
    </div>
        <div class="center-small">
        text small
    </div>
</div><br />

<div class="body" style="display: inline-flex;">
    <div class="body-left">
        text lower left
    </div>
    <div class="body-right">
        text lower right
    </div>
</div><br />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>

</body>
</html>





