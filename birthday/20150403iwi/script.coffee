
$ ->
    $('.monsterball-wrap').click ->
        $c = $(@)
        $.ajax(
            type: "POST",
            url: "get_pkemon.php",
            data: '',
            success: (res) ->
                console.log res
                ar = res.split(':::')
                $c.html(ar[0])
                $c.addClass('opened')
                $c.parent().find('p', 0).html(ar[1])
            error: ->
                console.log 'check error'
        )
        return false

    $('a').click (e) ->
        e.stopPropagation()
