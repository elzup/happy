<?php
require_once '../../functions.php';

setupEncodeing();

?>



<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>HappyNewYear 2014</title>


<?php
htmlIncludes('../../', './style.less');

?>


<script src="script.js" type="text/javascript"></script>

</head>
<body>

	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?=top_url?>">Happy days</a>
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
				<div class="container col-lg-12 top-div">
					<h1>時みくじ</h1>
					<p>あなたの2014年の運勢を「時」で試します</p>
				</div>

				<div class="row">
					<div class="container col-lg-5" id="button-div">
						<button type="button" typed="w" class="btn-draw btn-lg btn btn-success">健康運</button>
						<button type="button" typed="m" class="btn-draw btn-lg btn btn-warning">&nbsp;金運&nbsp;</button>
						<button type="button" typed="l" class="btn-draw btn-lg btn btn-danger">恋愛運</button>
					</div>
					<div class="container col-lg-4" id="timer-div">
						<span id="timer-span"></span><span id="timer-m-span"></span>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 panel panel-success" id="result-w-div">
						<div class="panel-heading">
							<h3 class="panel-title">健康運</h3>
						</div>
						<div class="panel-body">
							<p>
								<span class="msec"></span> <br /> <span class="rank"></span> <br />
							</p>
						</div>
					</div>
					<div class="col-lg-3 panel panel-warning" id="result-m-div">
						<div class="panel-heading">
							<h3 class="panel-title">金運</h3>
						</div>
						<div class="panel-body">
							<p>
								<span class="msec"></span> <br /> <span class="rank"></span> <br />
							</p>
						</div>
					</div>
					<div class="col-lg-3 panel panel-danger" id="result-l-div">
						<div class="panel-heading">
							<h3 class="panel-title">恋愛運</h3>
						</div>
						<div class="panel-body">
							<p>
								<span class="msec"></span> <br /> <span class="rank"></span> <br />
							</p>
						</div>
					</div>
				</div>
				<div class="container" id="tweet-button-div">
					<button type="button" id="tweet-button" class="btn-draw btn btn-primary">Tweetする</button>
				</div>
				<div class="container col-lg-7" id="rank-discription-div">
					<p>大大吉：00,01,8,99,77</p>
					<p>大吉：10,20,30,40,50,60,70,80,90</p>
					<p>中吉：残りの3の倍数</p>
					<p>小吉：残りの2の倍数</p>
					<p>末吉：残りの50以下</p>
					<p>末吉：その他</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
