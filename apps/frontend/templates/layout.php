<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
  <div id="root">
  <div id="header">
	  <ul class="menu">
		  <li><a href="http://demo.wp-templates.ru/">Главная</a></li>
		  <li class="page_item page-item-4"><a href="http://demo.wp-templates.ru/kontakty/" title="Контакты">Контакты</a></li>
		  <li class="page_item page-item-2"><a href="http://demo.wp-templates.ru/about/" title="О сайте">О сайте</a></li>
		  <li class="page_item page-item-6"><a href="http://demo.wp-templates.ru/ot-avtora/" title="От автора">От автора</a></li>
		  <li class="page_item page-item-5"><a href="http://demo.wp-templates.ru/pomoshh/" title="Помощь">Помощь</a></li>
	  </ul>
	  <form action="http://demo.wp-templates.ru/" id="searchform"><div class="search"><label for="s">Поиск:</label><input type="text" class="text" value="" name="s" id="s"><input class="button" type="submit" value="Ок!"></div></form>
	  <div id="heading">
		  <h1><a href="http://demo.wp-templates.ru/">WP-Templates.ru</a></h1>
		  <div class="description">Предпросмотр шаблонов для WordPress</div>
	  </div>
	  <div id="about">
		  <h3>О сайте:</h3>
		  <p>Тут может быть несколько строк о вашем проекте. Чтобы изменить текст, отредактируйте файл abuot_text.txt. В этом же файле вы сможете удалить картинку с подпсью или заменить ее на свою.</p>
		  <p class="signature"><img src="/uploads/tmp/john-smith.gif" alt=""></p>            </div>
  </div><!--#header-->
  <div id="main">
  <div id="left-block">
	  <div class="box">
		  <h3>Рубрики:</h3>
		  <ul class="categories">
			  <li class="cat-item cat-item-3"><a href="http://demo.wp-templates.ru/category/rubrika-1/" title="Просмотреть все записи в рубрике «Рубрика 1»">Рубрика 1</a>
			  </li>
			  <li class="cat-item cat-item-4"><a href="http://demo.wp-templates.ru/category/rubrika-2/" title="Просмотреть все записи в рубрике «Рубрика 2»">Рубрика 2</a>
			  </li>
			  <li class="cat-item cat-item-5"><a href="http://demo.wp-templates.ru/category/rubrika-3/" title="Просмотреть все записи в рубрике «Рубрика 3»">Рубрика 3</a>
			  </li>
			  <li class="cat-item cat-item-6"><a href="http://demo.wp-templates.ru/category/rubrika-4/" title="Просмотреть все записи в рубрике «Рубрика 4»">Рубрика 4</a>
			  </li>
			  <li class="cat-item cat-item-7"><a href="http://demo.wp-templates.ru/category/rubrika-5/" title="Просмотреть все записи в рубрике «Рубрика 5»">Рубрика 5</a>
				  <ul class="children">
					  <li class="cat-item cat-item-9"><a href="http://demo.wp-templates.ru/category/rubrika-5/podrubrika-1/" title="Просмотреть все записи в рубрике «Подрубрика 1»">Подрубрика 1</a>
					  </li>
				  </ul>
			  </li>
			  <li class="cat-item cat-item-8"><a href="http://demo.wp-templates.ru/category/rubrika-6/" title="Просмотреть все записи в рубрике «Рубрика 6»">Рубрика 6</a>
			  </li>
		  </ul>
	  </div>
	  <div class="box">
		  <h3>Архивы:</h3>
		  <ul class="archive">
			  <li><a href="http://demo.wp-templates.ru/2011/01/" title="Январь 2011">Январь 2011</a></li>
			  <li><a href="http://demo.wp-templates.ru/2010/12/" title="Декабрь 2010">Декабрь 2010</a></li>
			  <li><a href="http://demo.wp-templates.ru/2010/11/" title="Ноябрь 2010">Ноябрь 2010</a></li>
			  <li><a href="http://demo.wp-templates.ru/2010/10/" title="Октябрь 2010">Октябрь 2010</a></li>
			  <li><a href="http://demo.wp-templates.ru/2010/09/" title="Сентябрь 2010">Сентябрь 2010</a></li>
			  <li><a href="http://demo.wp-templates.ru/2010/08/" title="Август 2010">Август 2010</a></li>
		  </ul>
	  </div>
	  <div class="box">
		  <h3>Ссылки:</h3>
		  <ul class="blogroll">
			  <li><a href="http://wordpress.org/development/">Development Blog</a></li>
			  <li><a href="http://codex.wordpress.org/">Documentation</a></li>
			  <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
			  <li><a href="http://wordpress.org/extend/ideas/">Suggest Ideas</a></li>
			  <li><a href="http://wordpress.org/support/">Support Forum</a></li>
			  <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
			  <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
		  </ul>
	  </div>
  </div><!--#left-block--><div id="main-block">
  <div id="content">
	  <?php echo $sf_content ?>
  </div>
  <div id="recent">
	  <div class="posts">
		  <h3>Новое на сайте</h3>
		  <ul>
			  <li>
				  <div class="date">01-24-2011</div>
				  <div class="title"><a href="http://demo.wp-templates.ru/privetsvuem-vas/" rel="bookmark" title="Постоянная ссылка: Приветствуем Вас!">Приветствуем Вас!</a></div>
			  </li>
			  <li>
				  <div class="date">12-24-2010</div>
				  <div class="title"><a href="http://demo.wp-templates.ru/ustanovka-shablonov-wordpress/" rel="bookmark" title="Постоянная ссылка: Установка шаблонов WordPress">Установка шаблонов WordPress</a></div>
			  </li>
			  <li>
				  <div class="date">11-24-2010</div>
				  <div class="title"><a href="http://demo.wp-templates.ru/kak-vybrat-shablon-wordpress/" rel="bookmark" title="Постоянная ссылка: Как выбрать шаблон WordPress?">Как выбрать шаблон WordPress?</a></div>
			  </li>
			  <li>
				  <div class="date">10-24-2010</div>
				  <div class="title"><a href="http://demo.wp-templates.ru/plaginy-dlya-wordpress/" rel="bookmark" title="Постоянная ссылка: Плагины для WordPress.">Плагины для WordPress.</a></div>
			  </li>
			  <li>
				  <div class="date">10-24-2010</div>
				  <div class="title"><a href="http://demo.wp-templates.ru/postoyannye-ssylki-v-wordpress/" rel="bookmark" title="Постоянная ссылка: Постоянные ссылки в WordPress">Постоянные ссылки в WordPress</a></div>
			  </li>
		  </ul>
	  </div>

	  <div class="comments">
		  <h3>Свежие комментарии</h3>
		  <ul>
			  <li><div class="author"><a href="http://demo.wp-templates.ru/privetsvuem-vas/#comment-3" title="на Приветствуем Вас!">Шаблоны</a></div><div class="comment">Пример как выглядит комментарий №2.
					  Удачной Работы!...</div></li>
			  <li><div class="author"><a href="http://demo.wp-templates.ru/privetsvuem-vas/#comment-2" title="на Приветствуем Вас!">WP-Templates.ru</a></div><div class="comment">Пример как выглядит комментарий....</div></li>
		  </ul>        </div>
  </div><!--#recent-->

  <div id="footer">
	  <span class="copyright"></span>
                        <span class="links">
                            <!--<a href="http://demo.wp-templates.ru/feed/" title="Синдикация через RSS" class="rss">Публикации RSS</a>
                            <a href="http://demo.wp-templates.ru/comments/feed/" title="Комментарии ко всем записям через RSS" class="rss">Комментарии RSS</a>
                            <a href="http://demo.wp-templates.ru/wp-admin/" class="login" title="Войдите для публикации статей">Войти</a>
                            <a href="http://www.aoemedia.de/" class="powered"><img src="cubes.gif" alt="Open Source CMS"></a>-->
                        </span>
  </div><!--#footer-->
  <!--#do not delete this part#-->
  </div><!--#main-block-->
  </div><!--#main-->
  </div><!--#root-->
  </body>
</html>
