<?php
require_once '../../functions.php';

setupEncodeing();

?>



<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title>Snake HappyBirthday</title>

<?php htmlIncludes();?>

<script src="script.js" type="text/javascript"></script>

</head>
<body>

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?=top_url?>">Happy Snake Birthday</a>
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
        <div class="container" id="chars-div">
          <div class="row">
            <div class="col-lg-12">
              <div id="img-top">
                <img class="img-word" src="pazu.png" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <button type="button" id="rand" class="btn">パズドラくじ(Wikiに飛びます)</button>
        </div>
        <div class="col-lg-6 code">
          <pre>

package Snake;
/*
　　　　　　 ∴∴
　　　　　　::＊::
　　　　　　 ∵∵
　　　＿＿＿_/
　　／Happy / ＼
　 (　 Birthday )
　 |＼＿＿＿＿／|
　_|ﾐU三8三U三彡|_
（ ヽ三o三O三8ﾆノ )
　`ー――――――′
*/
public class Happy_ {
	public static void main(String... args) {
		Happy_ happy = new Happy_();
		System.out.println(happy.th_Birthday());
	}
	private int _Year() {
		return Thread.currentThread().getStackTrace()[this.getOne()].getLineNumber();
	}
	public String th_Birthday() {
		return this.getClass().getCanonicalName() + this._Year() + Thread.currentThread().getStackTrace()[this.getOne()].getMethodName();
	}
	private Byte getOne() {
		return (byte) (Math.abs(Byte.MIN_VALUE) - Byte.MAX_VALUE);
	}
}
        </pre>

        </div>

        <div class="col-lg-4">
          <ul class="list-group">
            powered by
            <li class="list-group-item"><span class="name">elzzup</span><span class="comment">C++怖い、おめでとう</span>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
