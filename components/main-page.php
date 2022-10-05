<main class="main-page">
	<div class="container">
		<section class="main-page__blog blog-main-page">
			<h1 class="main-page__title">Блог</h1>
			<ul class="main-page__articles">
				<li class="main-page__article">
					<a href="article.php?article_id=1">Статья1</a>
				</li>
				<li class="main-page__article">
					<a href="article.php?article_id=2">Статья2</a>
				</li>
				<li class="main-page__article">
					<a href="article.php?article_id=3">Статья3</a>
				</li>
			</ul>
		</section>
		<section class="main-page__subscription">
			<form class="form-main-page" action="form.php" method="post">
				<legend class="form-main-page__title">Подпишитесь на нашу рассылку</legend>
				<input class="form-main-page__field" name="email" type="email" placeholder="Введите вашу почту" required>
				<input class="form-main-page__button" type="submit" value="Подписаться">
			</form>
		</section>
	</div>
</main>