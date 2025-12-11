<?php
/**
 * Theme functions and definitions
 */

// テーマのセットアップ
function theme_setup() {
  // タイトルタグのサポート
  add_theme_support('title-tag');
  
  // アイキャッチ画像のサポート
  add_theme_support('post-thumbnails');
  
  // HTML5のサポート
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'theme_setup');

// スタイル/スクリプトの読み込み
function theme_enqueue_assets() {
  // 開発判定: WP_ENVIRONMENT_TYPE=local か WP_DEBUG=true
  $is_dev = (defined('WP_ENVIRONMENT_TYPE') && WP_ENVIRONMENT_TYPE === 'local')
    || (defined('WP_DEBUG') && WP_DEBUG);

  if ($is_dev) {
    // type="module" を付与
    add_filter('script_loader_tag', 'theme_add_type_module', 10, 3);

    // Vite HMRクライアント
    wp_enqueue_script(
      'vite-client',
      'http://localhost:5173/@vite/client',
      array(),
      null,
      false
    );

    // 開発エントリ（JSがSCSSをimport）
    wp_enqueue_script(
      'vite-main',
      'http://localhost:5173/wp-content/themes/vite/main.js',
      array(),
      null,
      true
    );
  } else {
    // 本番: ビルド済みCSSとJSを読み込む
    wp_enqueue_style(
      'theme-style',
      get_template_directory_uri() . '/dist/assets/css/style.css',
      array(),
      wp_get_theme()->get('Version')
    );
    add_filter('script_loader_tag', 'theme_add_type_module', 10, 3);
    wp_enqueue_script(
      'theme-main',
      get_template_directory_uri() . '/dist/assets/js/main.js',
      array(),
      wp_get_theme()->get('Version'),
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

// モジュールスクリプト化
function theme_add_type_module($tag, $handle, $src) {
  if (in_array($handle, array('vite-client', 'vite-main', 'theme-main'), true)) {
    return '<script type="module" src="' . esc_url($src) . '"></script>';
  }
  return $tag;
}

