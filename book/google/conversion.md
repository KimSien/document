

```
sem click計測

//リンクのクリック計測
    $('a[href^="/"]').click(function(){
        var id = $(this).closest('[id]').attr('id');
        var href = $(this).attr('href');
        var label = $(this).find('img').attr('alt');
        if(label === undefined){
            var label = $(this).html();
        }
        ga('send', 'event', 'リンク', $('title').html() +' '+ decodeURIComponent(location.pathname), '#'+ id +', '+ href +', '+ label, 1);
        ga('send', 'event', 'ページ', href, $('title').html() +' '+ decodeURIComponent(location.pathname) +' #'+ id +', '+ label,  1);
    });

    //電話のクリック計測
    $('a[href^="tel:"]').click(function(){
        var id = $(this).closest('[id]').attr('id');
        var href = $(this).attr('href');
        $.each(consts, function (key, data) {
            if(href === data){
                label = key;
            }
        });

        if( isMobile() ){
            ga('send', 'event', '電話', $('title').html() +' '+ decodeURIComponent(location.pathname), '#'+ id +', '+ label, 1);
        }
    });

    //ラインのクリック計測
    $('a[href*="line.me"]').click(function(){
        var id = $(this).closest('[id]').attr('id');
        var href = $(this).attr('href');
        $.each(consts, function (key, data) {
            if(href === data){
                label = key;
            }
        });
        ga('send', 'event', 'ライン', $('title').html() +' '+ decodeURIComponent(location.pathname), '#'+ id +', '+ label, 1);
    });

    //フォームの計測
    $('#southern_form button[type="submit"]').click(function(){
        var previous_page = decodeURIComponent( document.referrer );
        var requirement_val = $('#southern_form input[type="radio"]:checked').val();
        switch (requirement_val) {
            case '2':
                var requirement = '出張買取';
                break;
            case '3':
                var requirement = '宅配キット';
                break;
            case '1':
                var requirement = '無料査定';
                break;
            case '6':
                var requirement = '査定質問・その他';
                break;
            default:
                var requirement = '選択なし';
        }
        ga('send', 'event', 'フォーム', $('title').html() +' '+ decodeURIComponent(location.pathname), requirement +'　前のページ:'+ previous_page, 1);
    });

```
