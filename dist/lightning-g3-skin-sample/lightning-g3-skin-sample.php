<?php
/**
 * Plugin Name:     Lightning G3 Skin Sample
 * Plugin URI:      
 * Description:
 * Author:          
 * Author URI:      
 * Text Domain:     lightning-g3-skin-sample
 * Domain Path:     /languages
 * Version:         0.0.0
 *
 * @package         LIGHTNING_G3_SKIN_SAMPLE
 */

$current_theme = get_template();
if ( 'lightning' !== $current_theme ){
    return;
}
if ( 'g3' !== get_option( 'lightning_theme_generation' ) ){
    return;
}

$data = get_file_data( __FILE__, array( 'version' => 'Version' ) );

add_filter( 'lightning_g3_skins', 'ltg3_add_skin_sample' );
function ltg3_add_skin_sample( $skins ){
    // sample の部分が識別名です。好きな名前に変更してください。
    $skins['sample'] = [
        // label が Lightning デザイン設定 のスキン選択プルダウンに表示される名称
        'label'           => __( 'Sample Skin G3', 'lightning' ),   
        'css_url'         => plugin_dir_url( __FILE__ ) . '/css/style.css',
        'css_path'     	  => plugin_dir_path( __FILE__ ) . '/css/style.css',
        'editor_css_url'  => plugin_dir_url( __FILE__ ) . '/css/editor.css',
        // スキン固有の処理を入れる場合（非推奨）
        'php_path'        => plugin_dir_path( __FILE__ ) . '/functions.php',
        'js_path'         => '',
        'version'         => $data['version'],
        'bootstrap'       => '',
    ];
    return $skins;
}