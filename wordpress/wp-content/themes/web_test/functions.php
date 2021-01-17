<?php
//カスタムメニュー
register_nav_menus( //メニュー機能をオンにする
    array(
        'place_global' => 'グローバル', //“メニュー英語名” =>”メニュー名”,
        'place_utility' => 'ユーティリティ',
        'place_sidebar' => 'サイドメニュー',
        'place_footer' => 'フッター',
    )
); ?>