<?php
require_once '../../functions.php';
$name = "ゆうDさん";

setupEncodeing();

?>



<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title><?=$name?>HappyBirthday</title>

<?php htmlIncludes('../../', './style.less');?>
<!--  ./../lib/ohsnap/ohsnap.js"></script-->
<script src="../../lib/animatescroll/animatescroll.js"></script>
<script src="./script.js"></script>

</head>
<body>

	<?php htmlNavBar($name);?>

	<div class="container" id="content-main">
		<div class="row">
			<div id="img-button">
				<img src="./gita-.gif" alt="" id="gita-btn" />
			</div>
			<div class="col-lg-12" id="paper">
			<div class="emp"></div>
			<div class="emp"></div>
			<div class="emp"></div>
			<div class="emp"></div>
			<div class="emp"></div>
			<div class="emp"></div>
			<div class="emp"></div>
			<div class="emp"></div>
			<div class="emp"></div>
			<div class="emp"></div>
			<div class="emp"></div>
			<?php
			$k = array('s', 'm', 'l');
			for ($i = 0; $i < 100; $i++) {
				echo (rand(0, 4) == 0) ? '<div class="emp"></div>': '<img src="back' .((rand(0,1) == 0) ? "2" :"").'.gif" class="mmm m-'.$k[rand(0, 2)].'" />';
			}

			?>
			</div>
			<div class="col-lg-5">
				<span class="messe">おめでとう！</span>
			</div>
			<div class="col-lg-5" id="powered-by">
				powered by
				<ul class="list-group">
					<li class="list-group-item">
						<span class="name">elzzup</span>
						<span class="comment">おめでとうございます！</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
