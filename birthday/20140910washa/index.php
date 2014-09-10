<?php
require_once '../../parts_func.php';

$name = "わしゃわしゃ";
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
<?php tag_navbar($name); ?>
<div class="container" id="content-main">
    <h2 class="sub-title">ポケモンくじ</h2>
    <div class="row balls-box">
<?php 
for ($i = 0; $i < 6; $i++) {
    echo '<div class="ballbox-wrap"><div class="monsterball-wrap"><span></span></div><p></p></div>';
    //    echo '<button class="btn btn-lg btn-munipiece">' . $i . '</button>';
}
?>  </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-5" id="powered-by">
            powered by
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="name">elzup</span>
                    <span class="comment">おめでとう！</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="./script.js"></script>
