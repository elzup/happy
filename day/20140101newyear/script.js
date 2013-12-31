$(function() {
    $('button.btn-draw').click(drawing);
    $('[id^=result]').hide();
});

var total = 0;
function drawing() {
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

    rankField.html(rank);

    $(this).attr('disabled', true);
}
