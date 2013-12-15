<?php
require_once '../../functions.php';

setupEncodeing();

?>



<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>Yutaki HappyBirthday</title>

<?php htmlIncludes();?>
</head>
<body>

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Happy Yutakiya Birthday</a>
        <!--a href="./" class="navbar-brand">JNote-TDU</a-->
        <!--button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
        </button-->
      </div>
      <!--div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" id="other">その他<span class="caret"></span>
          </a>
            <ul class="dropdown-menu" aria-labelledby="cource">
              <li><a tabindex="-1" href="./bb?id=10000">報告・提案</a></li>
              <li><a tabindex="-1" href="./bb?id=10001">更新ログ</a></li>
              <li><a tabindex="-1" href="http://twitter.com/arzzup" target="_blank">作者Twitter</a></li>
            </ul>
          </li>
          <li><a href="./prev">過去のノート</a></li>
        </ul>
      </div-->
    </div>
  </div>

  <div class="container" id="content-main">
    <div class="row">
      <div class="col-lg-12">

        <div class="container" id="chars-div">
          <div class="row">
            <div class="col-lg-12">
              <div id="plates">
                <div class="charbox" id="time_1">誕</div>
                <div class="charbox" id="time_2">生</div>
                <div class="charbox" id="time_3">日</div>
                <div class="charbox" id="time_4">お</div>
                <div class="charbox" id="time_5">め</div>
                <div class="charbox" id="time_6">で</div>
                <div class="charbox" id="time_7">と</div>
                <div class="charbox" id="time_8">う</div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6" id="pict-main">
          <img class="full" src="yutaki-hd.png" alt="" />

        </div>

        <div class="col-lg-4">
          <ul class="list-group">
          powered by
            <li class="list-group-item"><span class="name">elzzup</span><span class="comment">久々に絵書いた、おめでとう</span>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
