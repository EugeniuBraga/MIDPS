$$r(function start() {
    $$i({
        create:'script',
        attribute: {
            'type':'text/javascript',
            'src':'http://timechat.ru/js/sound.js'
        },
        insert:$$().body,
        onready:function() {//выполняю только после загрузки скрипта
            //создаю экземпляр обьекта
            var s=new sound();
            s.start({
                'music':'http://timechat.ru/music/Lostprophets-Wake-Up-Make-A-Move.mp3',
                'player':'http://timechat.ru/js/player_mod.swf'
            });
        }
    });
});