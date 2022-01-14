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
define( 'DB_NAME', 'LAA1342508-catbell' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'LAA1342508' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'ichiro4920' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql147.phy.lolipop.lan' );

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
 * @since 2.6.0ss
 */
define( 'AUTH_KEY',         'udlLHzI[eCbPDbV44TOKZ^pvhXAym0}Q?(E4vb[xW&(2,z9iU-9&_/?`0gWNx3sr' );
define( 'SECURE_AUTH_KEY',  'eviN<$`LaW2aF1(RXfoec b4g8V7Cr0Cq<3-8ndTxtlqJm,SJH, ,TAicD&BNKjw' );
define( 'LOGGED_IN_KEY',    'S_<3)u_BUiiuRJB*>q%4/12z(J@KwE$AD`vzv#_$-yf @/A|pPW(+xBV-KyaqN%p' );
define( 'NONCE_KEY',        'CP2F?HOTC`I-Nl94QLtxSfc N;SgnrPxB~?|E ~CH}S;:S8v[D)fO>zXa`sL%D]D' );
define( 'AUTH_SALT',        '65G+&oUvhwYaY*B%;zw)w$1c{xi+m5o7bt}Xw62|WDL$bMlVjAHQ*$WzI<!QcD|h' );
define( 'SECURE_AUTH_SALT', 'QI_g;VF:^?y3/->Z;)IirnAF>a,hHc+/tQG`d[*M=kKfdz[m65(MQO+||L&rga7X' );
define( 'LOGGED_IN_SALT',   '/{W(3LY3lZLp5EA]q8/[]=a$LQI*O+L7Rfi@;sU_en7Mcz;xBUR&YB-Oy_G%So49' );
define( 'NONCE_SALT',       'd88KFPYQ <42RC[lM8ls1,:MqUZ]K8-1j(n}~(u<8|uMsZiac+@twxf+~m?<3w]j' );

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
define( 'WP_DEBUG', true );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
