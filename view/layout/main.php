<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        window.plp = {
            "page_id":932395,
            "content_id":1104140,
            "lang":"ru",
            "time":1500049935,
            "screens":"screens-xs-md-lg",
            "animations":{"section":{"type":"scroll"},
                "widget":{"type":"scroll"}}};
        window.plp_page_id = 932395;
        window.plp_content_id = 1104140;
        window.plp_lang = "ru";
        window.error_handler = function (e, fn_id) {window.console && console.log && console.log(fn_id);
            window['error_handler_' + fn_id] && eval(window['error_handler_' + fn_id]);
            window.trackJs && trackJs.track(e);
            window.console && console.error && console.error(e.message);};
    </script>

    <link type="text/css" rel="stylesheet" href="//s.platformalp.ru/assets/2.5/default.css">

    <script type="text/javascript">
        window._trackJs = { token: "4fd557ccb06a4bd28e7b90da188cd54b",
            application: "production",
            enabled: location.href.indexOf("notrackjs") < 0,};
    </script>

</head>

<body class="area ">
<div class="area font-text-opensanslight font-header-opensans screen-lg">

    <script>
        if (plp.screens === 'screens-xs') plp.screen = 'xs';
        else if (plp.screens === 'screens-sm') plp.screen = 'sm';
        else if (plp.screens === 'screens-md') plp.screen = 'md';
        else if (plp.screens === 'screens-lg') plp.screen = 'lg';
        else if (plp.screens === 'screens-xs-sm') {
            if (document.body.clientWidth >= 768) plp.screen = 'sm';
            else if (document.body.clientWidth <= 767) plp.screen = 'xs';
        } else if (plp.screens === 'screens-xs-md') {
            if (document.body.clientWidth >= 992) plp.screen = 'md';
            else if (document.body.clientWidth <= 991) plp.screen = 'xs';
        } else if (plp.screens === 'screens-xs-lg') {
            if (document.body.clientWidth >= 1200) plp.screen = 'lg';
            else if (document.body.clientWidth <= 1199) plp.screen = 'xs';
        } else if (plp.screens === 'screens-sm-md') {
            if (document.body.clientWidth >= 992) plp.screen = 'md';
            else if (document.body.clientWidth <= 991) plp.screen = 'sm';
        } else if (plp.screens === 'screens-sm-lg') {
            if (document.body.clientWidth >= 1200) plp.screen = 'lg';
            else if (document.body.clientWidth <= 1199) plp.screen = 'sm';
        } else if (plp.screens === 'screens-md-lg') {
            if (document.body.clientWidth >= 1200) plp.screen = 'lg';
            else if (document.body.clientWidth <= 1199) plp.screen = 'md';
        } else if (plp.screens === 'screens-xs-sm-md') {
            if (document.body.clientWidth >= 992) plp.screen = 'md';
            else if (document.body.clientWidth >= 768 && document.body.clientWidth <= 991) plp.screen = 'sm';
            else if (document.body.clientWidth <= 767) plp.screen = 'xs';
        } else if (plp.screens === 'screens-xs-sm-lg') {
            if (document.body.clientWidth >= 1200) plp.screen = 'lg';
            else if (document.body.clientWidth >= 768 && document.body.clientWidth <= 1199) plp.screen = 'sm';
            else if (document.body.clientWidth <= 767) plp.screen = 'xs';
        } else if (plp.screens === 'screens-xs-md-lg') {
            if (document.body.clientWidth >= 1200) plp.screen = 'lg';
            else if (document.body.clientWidth >= 992 && document.body.clientWidth <= 1199) plp.screen = 'md';
            else if (document.body.clientWidth <= 991) plp.screen = 'xs';
        } else if (plp.screens === 'screens-sm-md-lg') {
            if (document.body.clientWidth >= 1200) plp.screen = 'lg';
            else if (document.body.clientWidth >= 992 && document.body.clientWidth <= 1199) plp.screen = 'md';
            else if (document.body.clientWidth <= 991) plp.screen = 'sm';
        } else if (plp.screens === 'screens-xs-sm-md-lg') {
            if (document.body.clientWidth >= 1200) plp.screen = 'lg';
            else if (document.body.clientWidth >= 992 && document.body.clientWidth <= 1199) plp.screen = 'md';
            else if (document.body.clientWidth >= 768 && document.body.clientWidth <= 991) plp.screen = 'sm';
            else if (document.body.clientWidth <= 767) plp.screen = 'xs';
        }
        [].slice.call(document.body.childNodes).forEach(function (el) {
            if (el.className && el.className.indexOf('area') >= 0) {
                el.classList.add('screen-' + plp.screen);
            }
        });
    </script>

    <div class="node node0 section section-clear"><style>.node0 a { color: rgb(25, 37, 230); }</style>
        <div class="wrapper1" style="background-position: center center; background-repeat: no-repeat; background-size: cover; color: rgb(255, 255, 255); background-image: url(&quot;//u8.platformalp.ru/s/842hjek061/c47656f52e10d1f9ff93623c6d8ff801/354f603c06e0767dce06acf04b765952.jpg&quot;);">
            <div class="wrapper2" style="background-color: rgba(0, 0, 0, 0.42);">
                <div class="container noanimate" style="height: 30px;"></div>

                <?php $this->render('layout/body', ['status' => $status]); ?>

                <span class="plplink"></span>
                <div class="container noanimate" style="height: 30px;"></div>
            </div>
        </div>
    </div>

    <?php $this->render('blocks/block_modals'); ?>
    <?php $this->render('layout/after'); ?>

</div>
</body>
</html>






