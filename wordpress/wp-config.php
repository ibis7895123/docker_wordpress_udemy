<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'wp_udemy' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'dkwpudpass' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'wordpress-mysql' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p2:SS<.A,[gXiAu!:-XXr{RGtSSA`BG:I:(v`<VEJ4{DrO`A$7JPy(Sc{Lu6*scF' );
define( 'SECURE_AUTH_KEY',  'nHUy&b&y%hZ%65f+K)#m3xE}tB4GAT4dZC_Abu?]1D$dE^_w,6j1A}-6h9buH3~e' );
define( 'LOGGED_IN_KEY',    ']y@>Ad)=qyEF9;pR*vJbEsZGwsb`<X.Kp(w=q}yp|Me|<6%9K4)`3%P8<*WK1$ND' );
define( 'NONCE_KEY',        ',aC,;Q,(2}OhX@zi!#?u&`_Tg9|4|8R?<l</jm;Pp@BqQOo[:#4LYX-NA5A1XIKA' );
define( 'AUTH_SALT',        '!ver!HtTR{Gw,-xh|/nP7_6IQ|3NusneUMOtDOft9hs<l`}Tg(V8-;w6@!Ifo+L!' );
define( 'SECURE_AUTH_SALT', 'f2~%0%}$fv!P?LZcj<.,hMCgP<-2,BW%^Y(9 zSh:h<&knP.S,FPE(4#6D$E^mCv' );
define( 'LOGGED_IN_SALT',   '1@KM1Q,sEjpqF:%yjOhZUUZ+I:k$?yz)o:~h3,A;]PW{z,)h<ipfi4fA*~wV[PAD' );
define( 'NONCE_SALT',       'Ff/I-}&(L5o0>fTQdCryn8`9eBNw*yHi0ef-RS{]`3-B2wm5sZ?[2UQRbf5HD|NY' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
