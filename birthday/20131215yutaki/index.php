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

<?php htmlNavBar('Yutakiya');?>

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
