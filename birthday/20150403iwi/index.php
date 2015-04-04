<?php
require_once '../../parts_func.php';

$name = "岩井先生";
?>

<!DOCTYPE html>
<meta charset="UTF-8" />
<title><?=$name?>HappyBirthday</title>
<!-- reset css -->
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.0.0/build/cssreset/reset-min.css" />

<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.min.css" />
<!-- my css -->
<link rel="stylesheet" type="text/css" href="./style.css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<style>
    body {
        font-size: 500%;
    }
    #c {
        font-size: 500px;
    }
    .progress {
        height: 200px;
    }

</style>

<script language="javascript" type="text/javascript">
    $(document).ready(function(){
        //create a new WebSocket object.
        var wsUri = "ws://192.168.1.21:9000/happy/server.php";
        var pre_x = 0;
        var res = 0;
        window.addEventListener("devicemotion", function(event1) {
            var x = event1.accelerationIncludingGravity.x;
            var y = event1.accelerationIncludingGravity.y;
            var z = event1.accelerationIncludingGravity.z;
            if (x == null) {
                return;
            }

            var sum = x + y + z;
            $('.pt').html(sum);
            if (!(sum - pre_x < -20.0 || sum - pre_x > 20.0)) {
                return;
            }
            var color = Math.floor(Math.random() * 0xFFFFFF).toString(16);	//#RRGGBBを取得
            for (count = color.length; count < 6; count++) {
                color = "0" + color;     				//上位に0を補完する
            }
            color = "#" + color;
            $.ajax({
                type: "POST",
                url: '../../server.php',
                data: {c: '<?= $_GET['c'] ?>'}
            });
            res += 5;
            $('#pro').css('background', color);
            if (res == 100) {
                $('#hide-message').show();
                $('#pro').hide();
                $('body').css('background-image', '../../img/shan.jpg');
            }
            $('#pro').css('width', res + "%");
        }, true);



});
    setInterval("hyoji", 1);
    function hyoji()
    {
        console.log('hoge');
        //表示する文字
        var str = "一文字ずつ表示します。";

        //テキストボックスの文字数
        var cnt = document.timer.moji.value.length;

        var messe = '';
        $.ajax({
            type: "POST",
            url: '../../server_get.php',
            success: function(data) {
                messe = data;
                $('#c').html(":" + messe);
            }
        });

        //setTimeout()を含む関数を呼び出す
        setTimeout("hyoji()",1000);
    }
</script>

<?php tag_navbar($name); ?>
<div class="container" id="content-main">
    <h2 class="sub-title">振って</h2>
    <div class="progress">
        <div id="pro" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
            <span class="sr-only"></span>
        </div>
    </div>
    <div class="row" id="hide-message" style="display: none">
        <h2 id="c"><?= $_GET['c'] ?></h2>
        <img src="../../img/clack.jpg">
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-offset-1 col-md-5" id="powered-by">
            powered by
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="name">elzup</span>
                    <span class="comment">おめでとうございます！</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="./script.js"></script>
