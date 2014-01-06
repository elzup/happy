
var lib = [
    [
        ["ノブナガン"                             , "http://vap.co.jp/nobunagun/"]                            , 
        ["皆集まれ！ファルコム学園"               , "http://www.fal-gaku.com/"]                               , 
        ["ウィッチクラフトワークス"               , "http://www.witch-cw-anime.jp/"]                          , 
        ["スペース☆ダンディ"                     , "http://space-dandy.com/"]                                , 
        ["ノラガミ"                               , "http://noragami-anime.net/"]                             , 
        ["バディ・コンプレックス"                 , "http://buddy-complex.jp/"]                               , 
        ["ノブナガ・ザ・フール"                   , "http://www.nobunaga.tv/"]                                , 
        ["咲-Saki-全国編"                         , "http://www.saki-anime.com/"]                             , 
        ["となりの関くん"                         , "http://t-sekikun.jp/"]                                   , 
        ["ウィザード・バリスターズ～弁護士セシル" , "http://wizardbarristers.com/"]                           , 
        ["ハピネスチャージプリキュア！"           , "http://www.toei-anim.co.jp/tv/happinesscharge_precure/"] , 
    ], 
    [
        ["おにくだいすき！ゼウシくん"   , "http://zeushi-kun.jp/"]                 , 
        ["そにアニ"                     , "http://soniani.jp/"]                    , 
        ["とある飛行士への恋歌"         , "http://koiuta.tv/"]                     , 
        ["攻殻機動隊入門あらいず"       , "http://news.kokaku-a.jp/entries/1397/"] , 
        ["地下すぎアイドルあかえちゃん" , "http://web.music-ru.com/akaechan/"]     , 
        ["ディーふらぐ！"               , "http://www.d-fragments.net/"]           , 
    ], 
    [
        ["うーさーのその日暮らし 覚醒編(第2期)" , "http://hamatorapj.com/animation.html"] , 
        ["ハマトラ"                             , "http://wooser.tv/"]                    , 
    ], 
    [
        ["妖怪ウォッチ"                 , "http://www.tv-tokyo.co.jp/anime/youkai-watch/"] , 
        ["中二病でも恋がしたい！戀"     , "http://www.anime-chu-2.com/"]                   , 
        ["未確認で進行形"               , "http://mikakunin.jp/"]                          , 
        ["おねえちゃんが来た"           , "http://www.takeshobo.co.jp/sp/tv_oneechan/"]    , 
        ["いなり、こんこん、恋いろは。" , "http://inarikonkon.jp/"]                        , 
        ["マケン姫っ！通"               , "http://maken-ki-two.com/"]                      , 
    ], 
    [
        ["めいたんてい ラスカル" , "http://www.araiguma-rascal.com/meitantei/"]      , 
        ["銀の匙"                , "http://www.ginsaji-anime.com/"]                  , 
        ["ストレンジ・プラス"    , "http://www.dreamcreation.co.jp/stpl/index.html"] , 
        ["Go!Go!575"             , "http://gogo575.sega.jp/"]                        , 
        ["魔法戦争"              , "http://www.tbs.co.jp/anime/mahosen/"]            , 
        ["鬼灯の冷徹"            , "http://hozukino-reitetsu.com/"]                  , 
        ["桜Trick"               , "http://www.tbs.co.jp/anime/sakura/"]             , 
        ["Z/X(ゼクス) IGNITION"  , "http://zxignition.tv/"]                          , 
        ["pupa -ピューパ-"       , "http://www.pupa-anime.com/"]                     , 
    ], 
    [
        ["のうりん"       , "http://www.no-rin.tv/"]  , 
        ["Wake Up Grils!" , "http://wakeupgirls.jp/"] , 
    ], 
    [
        ["ニセコイ"                                 , "http://www.nisekoi.jp/"]                        , 
        ["世界征服～謀略のズヴィズダー～"           , "http://www.ntv.co.jp/inuneko/"]                 , 
        ["犬猫アワー(47都道府犬R&にゃ～めん)"       , "http://www.ntv.co.jp/inuneko/"]                 , 
        ["てさぐれ！部活もの あんこーる"            , "http://www.ntv.co.jp/tesabu/"]                  , 
        ["ロボットガールズZ"                        , "http://www.robot-girlsz.com/"]                  , 
        ["生徒会役員共＊ 第二期"                    , "http://www.starchild.co.jp/special/seitokai2/"] , 
        ["最近、妹の様子がちょっとおかしいんだが。" , "http://www.imocyo-anime.com/"]                  , 
        ["蟲師 特別編"                              , "http://www.mushishi-anime.com/"]                , 
        ["フューチャーカード バディファイト"        , "http://www.tv-aichi.co.jp/fc-buddyfight/"]      , 
    ], 
];
$(function() {
    $('[id*=btn-]').click(function() {
        var num = $(this).attr("id").substr(4, 1);
        var li = lib[num][Math.round(Math.random() * lib[num].length)];
        console.log(li);
        var text = '<a href="' + li[1] + '" target="_blank">' + li[0] + '</a>';
        $('div#res-' + num).html(text);
    });
});
