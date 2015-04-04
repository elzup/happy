<?php
require_once('../../lib/simple_html_dom.php');
$max_no = 718;
$no = sprintf('%03d', rand(1, $max_no));

$url_head = 'http://www.pokemon.co.jp';
$url = $url_head . '/zukan/pokemon/' .  $no . '.html';
$f = file_get_html($url);

$name = $f->find('h1', 0)->innertext;
$img_src = $url_head . $f->find('.main_img', 0)->find('img', 0)->src;
?>
<img src="<?= $img_src ?>" alt="<?= $name ?>画像" />
:::
<a href="<?= $url ?>" target="_blank"><?= "No.{$no} {$name}" ?></a>
