<?php

require_once 'functions.php';

setupEncodeing();

$dir = './birthday/';
$dir2 = './day/';

$birth_folders = new FolderList($dir);
$speci_folders = new FolderList($dir2);

class Folder {
	public $folder_name;
	public $date_str;
	public $target;

	public function __construct($folder_name) {
		$this->folder_name = $folder_name;
		$this->date_str = substr($folder_name, 0, 8);
		$this->target = substr($folder_name, 8);
	}

	public function getDate() {
		$date_y = substr($this->date_str, 0, 4);
		$date_m = substr($this->date_str, 4, 2);
		$date_d = substr($this->date_str, 6, 2);
		return "{$date_y}年{$date_m}月{$date_d}日";
	}
}

class FolderList {
	public $folders = array();
	public $dir;
	public function __construct($dir) {
		$this->dir = $dir;
		$this->folders = $this->getFiles($dir);
	}

	public function getFiles ($dir) {
		$folders = array();
		if ($dh = opendir($dir)) {
			while (($file = readdir($dh)) !== false ) {
				if ($file == '.' || $file =='..') continue;
				$folders[] = new Folder($file);
			}
		}
		return $folders;
	}

	public function echoList () {
		foreach ($this->folders as $folder) {
			echo $e =<<<EOF
<li class="list-group-item">
<a href="./{$this->dir}./{$folder->folder_name}">
<span class="target">{$folder->target}</span><span class="date">{$folder->getDate()}</span>
</a>
</li>
EOF;
		}
	}
}
?>


<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>HappyDay elzzup</title>

<?php htmlIncludes('./');?>

<script src="script.js" type="text/javascript"></script>

</head>
<body>

	<?php htmlNavBar('', false)?>

	<div class="container" id="content-main">
		<div class="row">
			<div class="col-lg-12">
				<p>
					Elzzupって人が誰かをお祝いしたりしながらHTMLとかJSとかPHPとかの修行をしてる空間<br>
					<a href="https://github.com/elzzup/happy">https://github.com/elzzup/happy</a>
				</p>
			</div>
		</div>
	</div>

	<div class="container" id="content-main">
		<div class="row">
			<div class="col-lg-12">
				<h2>BirthDays</h2>
				<ul class="list-group" id="birthdays-list">
					<?=$birth_folders->echoList()?>
				</ul>

				<h2>SpecialDays</h2>
				<ul class="list-group" id="specialdays-list">
					<?=$speci_folders->echoList()?>
				</ul>

			</div>
		</div>
	</div>

</body>
</html>
