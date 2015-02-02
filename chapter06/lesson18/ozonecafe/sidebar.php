
				<!-- ▼サイドカラム : 開始-->
				<aside id="secondary" class="l-sidebar">

					<!--▼ 検索ウィジェット : 開始-->
					<div class="widget widget_search">
						<h2 class="widget-title">検索</h2>
						<div class="search form-control">
							<form action="" id="searchform">
								<input type="search" name="s" id="s" class="search-input" value="">
								<input type="submit" value="検索" id="searchsubmit">
							</form>
						</div>

					</div>
					<!--▲ 検索ウィジェット : 終了-->

					<!--▼カテゴリウィジェット : 開始-->
					<div class="widget widget_categories">

						<h2 class="widget-title">
							メニューカテゴリー
						</h2>

						<ul>
							<li>
								<a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">アイスドリンク</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">ホットドリンク</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">フード</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/menu/' ) ); ?>">スイーツ</a>
							</li>
						</ul>

					</div>
					<!--▲ カテゴリウィジェット : 終了-->

					<!--▼ サイドバーバナー : 開始-->
					<div class="widget banner">

						<p>
							<a href="<?php echo esc_url( home_url( '/recruit/form.html' ) ); ?>">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/banner-contact.png" alt="お問い合わせ">
							</a>
						</p>

						<p>
							<a href="<?php echo esc_url( home_url( '/shop/#access' ) ); ?>">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/banner-access.png" alt="アクセス">
							</a>
						</p>

						<p>
							<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/common/banner-blog.png" alt="ブログ">
							</a>
						</p>

					</div>
					<!--▲ サイドバーバナー : 終了-->

				</aside>
				<!-- ▲サイドカラム : 終了-->
