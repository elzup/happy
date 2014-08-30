<?php
require_once '../../functions.php';
$name = "レモンティーさん";

setupEncodeing();

?>



<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title><?=$name?>HappyBirthday</title>

<?php htmlIncludes('../../', FALSE);?>
<link rel="stylesheet" href="style.css" media="screen" />
<script src="./script.js"></script>
</head>
<body>

	<?php htmlNavBar($name);?>

	<div class="container" id="content-main">
		<div class="row">
			<div class="col-lg-12">Whitch is lomon tea.</div>
			<div id="slidedowns" class="col-lg-6">
				<div class="wrap-wrap">
					<div class="img-wrap">
						<div class="answer" style="display: none;">はずれ</div>
						<img src="./img/r02.jpg" class="tea" alt="" />
						<div class="filter"></div>
					</div>
				</div>
				<div class="wrap-wrap">
					<div class="img-wrap">
						<div class="answer" style="display: none;">はずれもんてぃー</div>
						<img src="./img/r05.jpg" class="tea" alt="" />
						<div class="filter"></div>
					</div>
				</div>
				<div class="wrap-wrap">
					<div class="img-wrap">
						<div class="answer" style="display: none;">はずれもんてぃー</div>
						<img src="./img/r04.jpg" class="tea" alt="" />
						<div class="filter"></div>
					</div>
				</div>
				<div class="wrap-wrap">
					<div class="img-wrap">
						<div class="answer answer-good" style="display: none;">誕生日おめでとうございます ！</div>
						<img src="./img/r01.jpg" class="tea" alt="" />
						<div class="filter"></div>
					</div>
				</div>
				<div class="wrap-wrap">
					<div class="img-wrap">
						<div class="answer" style="display: none;">あたらない</div>
						<img src="./img/r03.jpg" class="tea" alt="" />
						<div class="filter"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-lg-4" id="powered-by">
				powered by
				<ul class="list-group">
					<li class="list-group-item">
						<span class="name">elzzup</span>
						<span class="comment">リアルであったことないけど、おめでとうございます</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
