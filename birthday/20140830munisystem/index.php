<?php
require_once '../../parts_func.php';

$name = "むにたん";
$parts = explode(',', "(,ﾉ,),・,ω,・,(,ヾ,)");
shuffle($parts);
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
        <h2 class="sub-title">むにむにを作れ！</h2>
<?php 
foreach ($parts as $peace) {
    echo '<button class="btn btn-lg btn-munipiece">' . $peace . '</button>';
}
?>
        <div class="" id="comp-puzzle"></div>
        <div class="" style="display:none;" id="happy">誕生日おめでとう！<br />o&lt; ´・ω・` &gt;oﾋﾞﾛｰﾝ</div>
        <div class="" id="result-box"></div>
    </div>
    <div class="row">
        <div class="col-md-offset-1 col-md-5" style="display:none;" id="powered-by">
            powered by
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="name">elzup</span>
                    <span class="comment">おめでとう催眠</span>
                </li>
            </ul>
        </div>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="./script.js"></script>
