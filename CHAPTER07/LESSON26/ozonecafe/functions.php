<?php

//コンテンツ幅をセット
if ( ! isset( $content_width ) ) {
	$content_width = 726;
}

function custom_theme_setup() {
	//head内にフィードリンクを出力
	add_theme_support( 'automatic-feed-links' );

	//アイキャッチ画像を有効化
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 175, 175, false );
	add_image_size ( 'menu-photo', 500, 500, true );

	// カスタムメニューを有効化
	add_theme_support( 'menus' );

	// テーマの位置を定義
	register_nav_menus(
		array(
			'header' => 'グローバルナビゲーション',
			'footer' => 'フッターナビゲーション',
		)
	);

	// カスタムヘッダーを有効化
	add_theme_support( 'custom-header' );

	// エディタースタイルの有効化
	add_editor_style( 'editor-style.css' );

}
add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
 * サイドバーの登録
 */
function custom_widget_register() {
  // ウィジェットエリアの登録
  register_sidebar( array(
       'name' => 'サイドバー',
       'id' => 'sidebar-primary',
       'before_widget' => '<div class="widget widget-sidebar">',
       'after_widget' => '</div>',
       'before_title' => '<h2 class="widget-title">',
       'after_title' => '</h2>',
  ) );

}

add_action( 'widgets_init', 'custom_widget_register' );

function custom_register_post_type() {

  $args = array(
    'label' => 'メニュー',
    'hierarchical' => false, //投稿と同じように
    'public' => true, // 公開する
    'has_archive' => true, // アーカイブページをもたせる
    'supports' => array(
      'title', 'editor', 'thumbnail', // 投稿作成時に表示するフィールド
    ),
    'rewrite' => array(
      'with_front' => false, // http://localhost/wordpress/menus/ というパーマリンクに
    ),
  );
  // menus というスラッグ名でカスタム投稿タイプを登録
  register_post_type( 'menus', $args );
}
add_action( 'init', 'custom_register_post_type' );


function custom_register_taxonomy() {

  /**
   * 階層のあるカスタムタクソノミーを新たに追加
   **/

  $args = array(
    'hierarchical' => true, // 階層を利用する
    'label' => 'メニューカテゴリー', // ラベルを指定
    'rewrite' => array(
      'with_front' => false, // パーマリンクの形式を指定
    ),
  );

  // menus 投稿タイプに menucat というスラッグ名でタクソノミーを登録
  register_taxonomy( 'menucat', 'menus', $args );

}
add_action( 'init', 'custom_register_taxonomy' );
