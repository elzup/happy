<?php
require_once '../../functions.php';
$name = "ななめ";

setupEncodeing();

?>



<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title><?=$name?>HappyBirthday</title>

<?php htmlIncludes('../../', './style.less');?>
<script src="../../lib/snowfall/snowfall.jquery.js"></script>
<script src="./script.js"></script>
</head>
<body>

	<?php htmlNavBar($name);?>

<div class="container" id="content-main">
		<div class="row">
			<div class="col-lg-12">このページはPC推奨です</div>
		</div>
		<div class="row">
			<div class="col-lg-4" id="powered-by">
				powered by
				<ul class="list-group">
					<li class="list-group-item">
						<span class="name">elzzup</span>
						<span class="comment">誕生日おめでとう！そして誕生日を一日間違えていたことを......済まないと思っている（嘘泣）</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
