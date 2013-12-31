$(function() {
    $('button.btn-draw').click(drawing);
    $('[id^=result]').hide();
    $('#tweet-button-div').hide();
});

var total = 0;
var c = 0;
var wr = "";
var mr = "";
var lr = "";
var wrt = 0;
var mrt = 0;
var lrt = 0;
function drawing() {
    c++;
    var type = $(this).attr('typed');
    console.log();
    var msec = new Date().getMilliseconds() % 100;
    var resultDiv = $('div#result-' + type + '-div');
    resultDiv.slideDown('slow');
    var resultP = resultDiv.children(".panel-body").children('p');
    var timeField = resultP.children('span.msec');
    var rankField = resultP.children('span.rank');
    timeField.html("." + ('00'+msec).slice(-2));

//    $(this).hide();
    // ----------------- rank calc start ----------------- //
    var luckeyNum = [0,1,8,99,77];
    var rank = ((luckeyNum.indexOf(msec) >= 0 )? "大大吉" :
            ((msec % 10 == 0) ? "大吉" :
            ((msec % 3 == 0) ? "吉" :
            ((msec % 2 == 0) ? "中吉" :
            ((msec < 50) ? "小吉" : "末吉" )))));

    // ----------------- rank calc end ----------------- //
    if (total == 2 && rank != "大大吉") rank = "大吉";
    if (rank == "小吉" || rank == "末吉")total++;

    if (type == "w") {
        wrt = ('00'+msec).slice(-2);
        wr  = rank;
    }
    if (type == "m") {
        mrt = ('00'+msec).slice(-2);
        mr  = rank;
    }
    if (type == "l") {
        lrt = ('00'+msec).slice(-2);
        lr  = rank;
    }
    rankField.html(rank);
    $(this).attr('disabled', true);

    if (c == 3) setTweetButton();
}

var enc_jikuu = "%8e%9e%8b%f3%82%a8%82%dd%82%ad%82%b6";
var enc_ken = "%0d%0a%8c%92%8dN%89%5e";
var enc_oka = "%0d%0a%8b%e0%89%5e";
var enc_ren = "%0d%0a%97%f6%88%a4%89%5e";

var url = "https://twitter.com/intent/tweet?hashtags=" + enc_jikuu + "&source=tweetbutton&text="
var site_url = "http://goo.gl/vpQ2hy";

//"http://elzzup.yuta-ri.net/happy/day/20140101newyear/"

function setTweetButton(){
    var text = url + "時空おみくじ"+ "\n";
    text += "健康運[." + wrt + "]: " + wr + "\n";
    text += "金運　[." + mrt + "]: " + mr + "\n";
    text += "恋愛運[." + lrt + "]: " + lr + "\n";
    text += site_url;
    var text_url = encodeURI(text); 
    console.log(text_url);

    var tweetbuttonDiv = $('#tweet-button-div').show();
    var tweetbutton = $('button#tweet-button');
    tweetbutton.click(function () {
        window.open(text_url, "");
    });
}


