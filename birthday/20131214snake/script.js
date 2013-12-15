


rand_url = "http://pd.appbank.net/m";
rand_max = 993 + 1;

$(function() {

    $('button#rand').click(function() {
        var num = ("0000" + Math.floor(Math.random() * rand_max)).slice(-3);
        window.open(rand_url + num);
    });
});
