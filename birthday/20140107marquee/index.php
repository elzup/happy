<?php
require_once '../../functions.php';
$name = "まーきー";

setupEncodeing();

?>



<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title><?=$name?>HappyBirthday</title>

<?php htmlIncludes('../../', './style.less');?>
<script src="./script.js"></script>
</head>
<body>

	<?php htmlNavBar($name);?>

	<div class="container" id="content-main">
		<div class="row">
			<div class="col-lg-12" id="anime-kuji">2014年冬アニメくじ<br />
			<button id="btn-4" class="btn">木</button>
			<div id="res-4"></div>
			<button id="btn-5" class="btn">金</button>
			<div id="res-5"></div>
			<button id="btn-6" class="btn">土</button>
			<div id="res-6"></div>
			<button id="btn-0" class="btn">日</button>
			<div id="res-0"></div>
			<button id="btn-1" class="btn">月</button>
			<div id="res-1"></div>
			<button id="btn-2" class="btn">火</button>
			<div id="res-2"></div>
			<button id="btn-3" class="btn">水</button>
			<div id="res-3"></div>

			</div>
		</div>
		<div class="row">
			<div class="col-lg-5" id="powered-by">
				powered by
				<ul class="list-group">
					<li class="list-group-item">
						<span class="name">elzzup</span>
						<span class="comment">20歳おめでとおお！</span>
					</li>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>
