
$ ->
    pieces = $('.btn-munipiece')
    comp_box = $('#comp-puzzle')
    comp_text = ''
    all_count = $('.btn-munipiece').size()
    count = 0

    pieces.click ->
        $(@).hide()
        comp_text += $(@).html()
        comp_box.html comp_text
        count++
        if count == all_count
            check()

    check = ->
        if comp_text == "(ﾉ)・ω・(ヾ)"
            game_clear()
        else
            reset()
    reset = ->
        pieces.each ->
            $(@).show()
        clone = comp_box.clone(true)
        clone.removeAttr("id")
        $('#result-box').prepend clone
        count = 0
        comp_text = ""
        comp_box.html ""

    game_clear = ->
        $('#happy').slideDown()
        comp_box.addClass("ok")
        $('#powered-by').show()

#    alert "Yahello"

