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
    <link type="text/css" rel="stylesheet" href="//s.platformalp.ru/assets/2.5/default.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <style>

        #container {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .main-background div.back-image {
            position: absolute;
            width: 100%;
            height: 100%;
            background-image: url(img/354f603c06e0767dce06acf04b765952.jpg); /* Путь к фоновому изображению */
        }

        .main-background div.back-color {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #000000;
            opacity: 0.45;
        }


        .pos_absolute {
            position: absolute;
        }


        /*.container{*/
            /*position: relative;*/
        /*}*/

        .header_left {
            left: 5%;
            top: 9%;
        }

        .header_cent {
            left: 36%;
            margin-left: -64px;
            top: 8%;
        }

        .header_right {
            right: 5%;
            top: 5%;
        }

        .titer_left {
            left: 5%;
            margin-top: -0.625em;
            top: 40%;
        }

        .wisher_left {
            left: 5%;
            top: 62%;
        }

        .wisher_right {
            right: 5%;
            top: 55%;
        }

    </style>

    <div id="container" style='display: inline-block;'>

        <div class="main-background">
            <div class="back-image"></div>
            <div class="back-color"></div>
        </div>

        <div class="wrapper" style="background-position: center; background-repeat: no-repeat; background-size: cover; color: rgb(255, 255, 255); background-image: url(&quot;//u8.platformalp.ru/s/842hjek061/c47656f52e10d1f9ff93623c6d8ff801/354f603c06e0767dce06acf04b765952.jpg&quot;);">

            <div class="header_left pos_absolute" style="display: inline-block; text-align: center;">
                <img class="" alt="" src="//u8.platformalp.ru/s/69d343051/c47656f52e10d1f9ff93623c6d8ff801/a043de523ece568799670606f27f0af6.png" style="width: 102.2px;">
                <p><span style="font-size: 14px;"><em>e-mail: web.dn.content@mail.ru</em></span></p>
            </div>

            <div class="header_cent pos_absolute" style="display: block; text-align: center;">
                <p><span style="font-size: 20px;"><strong>Студия качественного копирайтинга «Web-DN»</strong></p>
                <p><span style="font-size: 12px;"><strong>Быстро. Граммотно. Доступно.</strong></span></p>
            </div>

            <div class="header_right pos_absolute" style="display: inline-block;">
                <h1><span style="text-align: left;"><span style="font-size: 35%;">
                <strong>Admin panel:</strong></span></h1>
                <p><span style="font-size: 12px;">- концепция -</span></p>
                <p><span style="font-size: 12px;">- задачи -</span></p>
                <p><span style="font-size: 12px;">- решения -</span></p>
                <p><span style="font-size: 12px;">- темы -</span></p>
                <p><span style="font-size: 12px;">- работы -</span></p>
                <p><span style="font-size: 12px;">- оформление -</span></p>
                <p><span style="font-size: 12px;">- отслеживание -</span></p>
                <p><span style="font-size: 12px;">- сопровождение -</span></p>
                <p><span style="font-size: 12px;">- заказчики -</span></p>
                <p><span style="font-size: 12px;">- отзывы -</span></p>
                <p><span style="font-size: 12px;">- расписание -</span></p>
                <p><span style="font-size: 12px;">- контакты -</span></p>
            </div>

            <div class="titer_left pos_absolute" style="display: inline-block;">
                <h1><span style="text-align: left;"><span style="font-size: 100%;">
                    <strong>ПЕРВЫЙ В МИРЕ КОНВЕЕР ТЕКСТОВ</strong></span></h1>
                <p><span style="font-size: 14px;"><strong>Статьи на любой вкус по приемлимым ценам</strong></span></p>
                <div class="line" style="width: 100%; border-top: 3px solid rgb(255, 255, 255);"></div>
            </div>

            <div class="wisher_left pos_absolute" style="display: inline-block;">
                <h1><span style="text-align: left;"><span style="font-size: 50%;">
                    <strong>НАШИ ПРЕИМУЩЕСТВА:</strong></span></h1>
                <p>Оперативная поставка в указанные сроки</p>
                <p>Проверка текста редакторами</p>
                <p>Статьи для блогов и сайтов</p>
                <p>Описание блока товаров</p>
            </div>

            <div class="wisher_right pos_absolute" style="display: inline-block;">
                <div class="head_gradient" style="background-color: rgb(16, 125, 50); border-color: rgb(9, 75, 70); border-top-left-radius: 3px; border-top-right-radius: 3px;">
                    <div class="discount" style="text-align: center;">
                        <h2><span style="font-size: 14px;">При заказе за 7 дней до сдачи - скидка 5%</span></h2>
                        <div class="entry_wind" style="background-color: rgb(234, 241, 236); border-color: rgb(206, 222, 211); color: rgb(38, 57, 44); border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;">
                            <form action="/" class="text-left" method="post" style="width: 500px; height: 294px; margin: 5px;">
                                <div class="fields">
                                    <div class="field" data-type="name">
                                        <div class="name">Имя *</div>
                                        <div class="input"><input type="text" name="<?= FeedbackForm::class ?>[full_name]" class="form-control text" style="border-radius: 4px;"></div>
                                    </div>
                                    <div class="field" data-type="text">
                                        <div class="name">E-mail<span class="required">&nbsp;*</span></div>
                                        <div class="input"><input required type="email" name="<?= FeedbackForm::class ?>[email]" class="form-control text" style="border-radius: 4px;"></div>
                                    </div>
                                    <div class="field form-group field-modal-form-model-message">
                                        <div class="name">Сообщение<span class="required">&nbsp;*</span></div>
                                        <div>
                                            <textarea required id="modal-form-model-message" class="form-control font-open-sans select_form2 inline_block" name="<?= FeedbackForm::class ?>[message]" placeholder=""></textarea>
                                        </div>
                                        <div class='label_error' style='display: block;'>
                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>
                                    Введите цифры * <input type="text" name="<?= FeedbackForm::class ?>[captcha]"/><img src="/captcha.php" alt="" id="captcha" />
                                    <span style="border-bottom: 1px dashed #f00; color: #f00; cursor: pointer;" onclick="document.getElementById('captcha').src = 'captcha.php?' + Math.random()">обновить.</span>
                                </div><br />
                                <div class="macros-button">
                                    <div class="btn-out full xs-none">
                                        <style>#uid2 { background-color: rgb(18, 147, 58);border-top-left-radius: 4px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;border-style: solid;border-top-width: 1px;border-bottom-width: 3px;border-left-width: 1px;border-right-width: 1px;border-color: rgb(15, 117, 47);padding-top: 8px;padding-bottom: 8px;padding-left: 16px;padding-right: 16px;font-size: 18px;color: rgb(255, 255, 255);box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25); } #uid2:hover, #uid2.hover { background-color: rgb(17, 132, 52);border-color: rgb(12, 94, 37);color: rgb(255, 255, 255); } #uid2:active, #uid2.active { background-color: rgb(17, 132, 52);border-color: rgb(13, 106, 42);border-top-width: 3px;border-bottom-width: 1px;color: rgb(255, 255, 255);box-shadow: inset 0px 2px 5px 0px rgba(0, 0, 0, 0.25); } #uid2:before { } #uid2:active:before, #uid2.active:before { background-color: rgb(17, 132, 52);box-shadow: inset 1px 2px 5px 1px rgba(0, 0, 0, 0.25); } #uid2 .fa { font-size: 23px; }</style>
                                        <div class="btn-inner">
                                            <button class="btn font-text submit" id="uid2" data-ym_goal="" data-ga_category="" data-ga_action=""><span class="text">Отправьте заказ!</span><input type="submit"></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>

<script>
   $(window).load(function () {
       var width = $(window).width();
       var height = $(window).height();
       var container = $("#container");
       container.css('min-width', width);
       container.css('min-height', height);
       console.info('---замена размеров главного блока', width, height);
   });
























</script>

</body>
</html>





