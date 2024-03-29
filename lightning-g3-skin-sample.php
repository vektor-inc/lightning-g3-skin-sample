<?php
/**
 * Plugin Name:     Lightning G3 Skin Sample（プラグインの名前）
 * Plugin URI:      （プラグインの解説ページのURL）
 * Description:     （プラグインの説明）
 * Author:          （作者名）
 * Author URI:      （作者のサイトのURL）
 * Text Domain:     lightning-g3-skin-sample（プラグイン固有の識別名）
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         LIGHTNING_G3_SKIN_SAMPLE（プラグイン固有の識別名）
 */

$current_theme = get_template();
if ( 'lightning' !== $current_theme ) {
	return;
}
if ( 'g3' !== get_option( 'lightning_theme_generation' ) ) {
	return;
}

/**
 * Undocumented function
 *
 * @param array $skins テーマや他のプラグインによって生成されたされたスキン情報の配列.
 * @return array
 */
function ltg3_add_skin_sample( $skins ) {

	$data = get_file_data( __FILE__, array( 'version' => 'Version' ) );

	// sample の部分が識別名です。好きな名前に変更してください.
	$skins['sample'] = array(
		// label が Lightning デザイン設定 のスキン選択プルダウンに表示される名称.
		'label'          => __( 'Sample Skin G3', 'lightning-g3-skin-sample' ),
		'css_url'        => plugin_dir_url( __FILE__ ) . 'css/style.css',
		'css_path'       => plugin_dir_path( __FILE__ ) . 'css/style.css',
		'editor_css_url' => plugin_dir_url( __FILE__ ) . 'css/editor.css',
		'version'        => $data['version'],
		// スキン固有の処理を入れる場合（非推奨）.
		'php_path'       => plugin_dir_path( __FILE__ ) . '/functions.php',
		// スキン固有の処理を入れる場合（非推奨）.
		'js_url'         => plugin_dir_url( __FILE__ ) . '/js/script.js',
	);
	return $skins;
}
add_filter( 'lightning_g3_skins', 'ltg3_add_skin_sample' );
