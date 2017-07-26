<?php

use Models\SendModel;
use Models\FeedbackForm;

?>

<?php if(SendModel::check($status, SendModel::STATUS_SEND)){ ?>
    <div class="my-modal-w"><div class="sweet-overlay" tabindex="-1" style="opacity: 1.1; display: block;"></div><div class="sweet-alert showSweetAlert visible" tabindex="-1" data-has-cancel-button="false" data-allow-ouside-click="false" data-has-done-function="false" data-timer="null" style="display: block; margin-top: -228px;"><div class="icon error" style="display: none;"><span class="x-mark"><span class="line left"></span><span class="line right"></span></span></div><div class="icon warning" style="display: none;"> <span class="body"></span> <span class="dot"></span> </div> <div class="icon info" style="display: none;"></div> <div class="icon success animate" style="display: block;"> <span class="line tip animateSuccessTip"></span> <span class="line long animateSuccessLong"></span> <div class="placeholder"></div> <div class="fix"></div> </div> <div class="icon custom" style="display: none;"></div> <h2>Спасибо!<br>Ваша заявка отправлена.<br>В ближайшее время мы с Вами свяжемся!</h2><p style="display: block;"></p><button class="cancel" tabindex="2" style="display: none; box-shadow: none;">Cancel</button><button class="confirm" tabindex="1" style="background-color: rgb(174, 222, 244); box-shadow: rgba(174, 222, 244, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.0470588) 0px 0px 0px 1px inset;">OK</button></div></div>
<?php } elseif(SendModel::check($status, SendModel::STATUS_NOT_SEND)){ ?>
    <div class="my-modal-w"><div class="sweet-overlay" tabindex="-1" style="opacity: 1.09; display: block;"></div><div class="sweet-alert showSweetAlert visible" tabindex="-1" data-has-cancel-button="false" data-allow-ouside-click="false" data-has-done-function="false" data-timer="null" style="display: block; margin-top: -179px;"><div class="icon error animateErrorIcon" style="display: block;"><span class="x-mark animateXMark"><span class="line left"></span><span class="line right"></span></span></div><div class="icon warning" style="display: none;"> <span class="body"></span> <span class="dot"></span> </div> <div class="icon info" style="display: none;"></div> <div class="icon success" style="display: none;"> <span class="line tip"></span> <span class="line long"></span> <div class="placeholder"></div> <div class="fix"></div> </div> <div class="icon custom" style="display: none;"></div> <h2>Неправильно заполнены поля:</h2><p style="display: block;">Поле «Текст» обязательно для заполнения.</p><button class="cancel" tabindex="2" style="display: none; box-shadow: none;">Cancel</button><button class="confirm" tabindex="1" style="background-color: rgb(174, 222, 244); box-shadow: rgba(174, 222, 244, 0.8) 0px 0px 2px, rgba(0, 0, 0, 0.0470588) 0px 0px 0px 1px inset;">OK</button></div></div>
<?php } ?>

<div class="inner">
    <div class="vertical simple-color size-default">
        <div class="head gradient" style="background-color: rgb(16, 125, 50); border-color: rgb(9, 75, 30); border-top-left-radius: 3px; border-top-right-radius: 3px;">
            <div class="textable">
                <p style="text-align: center;">
                    <span style="font-family: Arial;">При заказе за 7 дней до сдачи - скидка 5%&nbsp;</span>
                </p>
            </div>
        </div>
        <div class="body" style="background-color: rgb(234, 241, 236); border-color: rgb(206, 222, 211); color: rgb(38, 57, 44); border-bottom-left-radius: 3px; border-bottom-right-radius: 3px;">
            <div class="cont"></div>

            <form action="/" class="text-left" method="post">

                <div class="fields">

                    <div class="field" data-type="name">
                        <div class="name">Имя *</div>
                        <div class="input">
                            <input type="text" name="<?= FeedbackForm::class ?>[full_name]" class="form-control text" style="border-radius: 4px;"></div>
                    </div>

                    <div class="field" data-type="text">
                        <div class="name">E-mail<span class="required">&nbsp;*</span></div>
                        <div class="input">
                            <input required type="email" name="<?= FeedbackForm::class ?>[email]" class="form-control text" style="border-radius: 4px;">
                        </div>
                    </div>

                    <div class="field form-group field-modalformmodel-message">
                        <div class="name">Сообщение<span class="required">&nbsp;*</span></div>
                        <div class='label_error' style='display: block;'>
                            <p class="help-block help-block-error"></p>
                        </div>
                        <div>
                            <textarea required id="modalformmodel-message" class="form-control font_opensans select_form2 inline_block" name="<?= FeedbackForm::class ?>[message]" placeholder=""></textarea>
                        </div>
                    </div>

                    Введите ключ: * <input type="text" name="<?= FeedbackForm::class ?>[captcha]" />
                    <img src="/captcha.php" alt="" id="captcha" />
                    <span style="border-bottom: 1px dashed #f00; color: #f00; cursor: pointer;" onclick="document.getElementById('captcha').src = 'captcha.php?' + Math.random()">обновить</span>

                </div><br />

                <div class="macros-button">
                    <div class="btn-out full xs-none">
                        <style>#uid2 { background-color: rgb(18, 147, 58);border-top-left-radius: 4px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;border-style: solid;border-top-width: 1px;border-bottom-width: 3px;border-left-width: 1px;border-right-width: 1px;border-color: rgb(15, 117, 47);padding-top: 8px;padding-bottom: 8px;padding-left: 16px;padding-right: 16px;font-size: 18px;color: rgb(255, 255, 255);box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25); } #uid2:hover, #uid2.hover { background-color: rgb(17, 132, 52);border-color: rgb(12, 94, 37);color: rgb(255, 255, 255); } #uid2:active, #uid2.active { background-color: rgb(17, 132, 52);border-color: rgb(13, 106, 42);border-top-width: 3px;border-bottom-width: 1px;color: rgb(255, 255, 255);box-shadow: inset 0px 2px 5px 0px rgba(0, 0, 0, 0.25); } #uid2:before { } #uid2:active:before, #uid2.active:before { background-color: rgb(17, 132, 52);box-shadow: inset 0px 2px 5px 0px rgba(0, 0, 0, 0.25); } #uid2 .fa { font-size: 23px; } </style>
                        <div class="btn-inner">
                            <button class="btn font-text submit" id="uid2" data-ym_goal="" data-ga_category="" data-ga_action=""><span class="text">Отправьте заказ!</span><input type="submit"></button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="cont"></div>
        </div>
    </div>
</div>

<script>

    $('.confirm').on('click', function () {
        $('.my-modal-w').css('display', 'none');
    });

</script>
