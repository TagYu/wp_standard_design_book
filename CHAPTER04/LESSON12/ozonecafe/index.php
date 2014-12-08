<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ブログ記事一覧 | OzoneCafe</title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="keywords" content="大曽根,カフェ,名古屋,老舗,コーヒーショップ">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

  </head>

  <body class="blog archive">

    <!-- ヘッダー -->
    <header id="masthead" class="header">

      <div class="container">

        <!-- ロゴ -->
        <div class="header-logo">
          <a href="<?php echo site_url(); ?>/index.html">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="OzoneCafe">
          </a>
          <!-- /ロゴ -->
        </div>

        <!-- グローバルナビゲーション -->
        <nav class="header-navigation">

          <ul class="nav-menu">

            <li>
              <a href="<?php echo site_url(); ?>/index.html">HOME</a>
            </li>

            <li>
              <a href="<?php echo site_url(); ?>/shop/index.html">SHOP</a>
              <ul class="sub-menu">
                <li><a href="<?php echo site_url(); ?>/shop/taste.html">こだわり</a>
                </li>
                <li><a href="<?php echo site_url(); ?>/shop/history.html">歴史</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="<?php echo site_url(); ?>/menus/index.html">MENUS</a>
            </li>

            <li>
              <a href="<?php echo site_url(); ?>/recruit/index.html">RECRUIT</a>
              <ul class="sub-menu">
                <li><a href="<?php echo site_url(); ?>/recruit/form.html">応募フォーム</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="<?php echo site_url(); ?>/blog/index.html">BLOG</a>
            </li>

          </ul>
          <!-- /グローバルナビゲーション -->
        </nav>

      </div>
      <!-- /ヘッダーここまで -->
    </header>

    <div id="main" class="l-two-column">

      <div class="container">

        <!-- メインカラム -->
        <div id="main-content" class="l-main site-main">

          <div class="content-area posts">
            <div class="site-content" role="main">

              <section class="post blog-archive">

                <!-- 記事 - ヘッダー -->
                <header class="entry-header">
                  <h1 class="entry-title archive-title">
                    ブログ記事一覧
                  </h1>
                </header>

                <!-- 記事 - コンテンツ -->
                <div class="entry-content">
                  <article id="post-1" class="post hentry">

                    <header class="entry-header">

                      <h1 class="entry-title"><a href="<?php echo site_url(); ?>/blog/article01.html">サイトをオープンしました。</a>
                      </h1>

                      <div class="entry-meta">

                        <span class="date"><time class="entry-date">2014年9月22日</time></span>

                        <span class="categories-links info"><a href="#" rel="category">新着情報</a></span>
                      </div>
                    </header>

                    <div class="entry-content">
                      <div class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog01-thumbnail01.png" alt="サイト公開しました。">
                      </div>

                      <p>2015年2月10日に本Webサイトをオープンしました。
                        <br> WordCafe 最新情報、お役立ち情報を随時掲載していきます。</p>
                      </p>

                    </div>

                  </article>

                  <article id="post-2" class="post hentry">

                    <header class="entry-header">

                      <h1 class="entry-title"><a href="<?php echo site_url(); ?>/">季節のショートケーキを発売します。</a>
                      </h1>

                      <div class="entry-meta">

                        <span class="date"><time class="entry-date">2014年9月22日</time></span>

                        <span class="categories-links limited"><a href="#" rel="category">期間限定</a></span>
                      </div>

                    </header>

                    <div class="entry-content">
                      <div class="thumbnail">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/menu08-thumbnail01.png" alt="季節のショートケーキ">
                      </div>

                      <p>
                        2015年3月10日から4月10日までの1ヶ月間限定として、季節のショートケーキを販売致します。
                        <br> 通常のチーズケーキより、約2倍チーズを使用しお作りするスベシャルメニューです。
                      </p>

                    </div>

                  </article>

                  <nav class="navigation paging-navigation" role="navigation">
                    <div class="nav-links">
                      <div class="nav-previous">
                        <a href="<?php echo site_url(); ?>/"><span class="meta-nav">←</span> 古い投稿</a>
                      </div>
                      <div class="nav-next">
                        <a href="<?php echo site_url(); ?>/">新しい投稿 <span class="meta-nav">→</span></a>
                      </div>
                    </div>
                  </nav>

                </div>

              </section>
            </div>
          </div>

          <!-- /メインカラム -->
        </div>

        <!-- サイドバー -->
        <aside id="secondary" class="l-sidebar">

          <!-- サイドバー - 検索 -->
          <div class="widget widget_search">
            <div class="search form-control">
              <input type="search" name="s" id="s" class="search-input" value="">
              <input type="submit" value="検索" class="search-submit">
            </div>
          </div>

          <!-- サイドバー - バナー -->
          <div class="banner">

            <p>
              <a href="<?php echo site_url(); ?>/recruit/form.html">
                <img src="<?php echo get_template_directory_uri(); ?>/images/banner-contact.png" alt="お問い合わせ">
              </a>
            </p>

            <p>
              <a href="<?php echo site_url(); ?>/shop/index.html#access">
                <img src="<?php echo get_template_directory_uri(); ?>/images/banner-access.png" alt="アクセス">
              </a>
            </p>

            <p>
              <a href="<?php echo site_url(); ?>/blog/index.html">
                <img src="<?php echo get_template_directory_uri(); ?>/images/banner-blog.png" alt="ブログ">
              </a>
            </p>

          </div>

          <!-- サイドバー - カテゴリー -->
          <div class="widget widget_category">

            <h2 class="widget-title">
              メニューカテゴリー
            </h2>

            <ul>
              <li>
                <a href="<?php echo site_url(); ?>/menu/index.html">アイスドリンク</a>
              </li>
              <li>
                <a href="<?php echo site_url(); ?>/menu/index.html">ホットドリンク</a>
              </li>
              <li>
                <a href="<?php echo site_url(); ?>/menu/index.html">フード</a>
              </li>
              <li>
                <a href="<?php echo site_url(); ?>/menu/index.html">スイーツ</a>
              </li>
            </ul>

          </div>

          <!-- /サイドバー -->
        </aside>

      </div>

    </div>

    <!-- フッター -->
    <footer id="colophon" class="footer text-center">

      <div class="container">

        <div class="footer-logo">
          <a href="<?php echo site_url(); ?>/index.html">
            <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="OzoneCafe">
          </a>
          <p>"一杯"に込める思い。OzoneCafe</p>
        </div>

        <div class="footer-navigation">
          <ul>
            <li>
              <a href="<?php echo site_url(); ?>/">トップページ</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/shop/index.html">店舗案内</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/menus/index.html">メニュー</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/blog/index.html">ブログ</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/recruit/index.html">スタッフ募集</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/recruit/form.html">求人応募</a>
            </li>
            <li>
              <a href="<?php echo site_url(); ?>/sitemap.html">サイトマップ</a>
            </li>

          </ul>
        </div>

        <div class="footer-copyright">
          <p>copyright © 2014 Ozone Cafe All Right Reserved.</p>
        </div>

      </div>
      <!-- /フッターここまで -->
    </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <?php wp_footer(); ?>

  </body>

</html>