<?php

require_once 'functions.php';



$dir = './birthday/';


$folders = array();
if ($dh = opendir($dir)) {
    while (($file = readdir($dh)) !== false ) {
        if ($file == '.' || $file =='..') continue;
        $folders[] = new Folder($file);
    }
}

class Folder {
    public $folder_name;
    public $date_str;
    public $target;

    public function __construct($folder_name) {
        $this->folder_name = $folder_name;
        $this->date_str = substr($folder_name, 0, 8);
        $this->target = substr($folder_name, 8);
    }
}


?>


<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>HappyBirthday form elzzup</title>

<?php htmlIncludes('./');?>

<script src="script.js" type="text/javascript"></script>

</head>
<body>

<?php htmlNavBar('Snake')?>

  <div class="container" id="content-main">
    <div class="row">
      <div class="col-lg-12">

        <ul class="list-group">
          <?php
          foreach ($folders as $folder) {
echo $e =<<<EOF
<li class="list-group-item">
<a href="./{$dir}./{$folder->folder_name}">
<span class="target">{$folder->target}</span><span class="date">{$folder->date_str}</span>

</a>
</li>
EOF;
          }

          ?>
        </ul>

      </div>
    </div>
  </div>

</body>
</html>
