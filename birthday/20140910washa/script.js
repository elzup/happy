// Generated by CoffeeScript 1.7.1
(function() {
  $(function() {
    $('.monsterball-wrap').click(function() {
      var $c;
      $c = $(this);
      $.ajax({
        type: "POST",
        url: "get_pkemon.php",
        data: '',
        success: function(res) {
          var ar;
          console.log(res);
          ar = res.split(':::');
          $c.html(ar[0]);
          $c.addClass('opened');
          return $c.parent().find('p', 0).html(ar[1]);
        },
        error: function() {
          return console.log('check error');
        }
      });
      return false;
    });
    return $('a').click(function(e) {
      return e.stopPropagation();
    });
  });

}).call(this);
