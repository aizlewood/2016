<?php snippet('header') ?>

 <main class="main" role="main">

  <article>
    <h1 class="post-title"><?php echo html($page->title()) ?></h1>
  </article>

  <?php if(param('tag')) {

    $tag = urldecode(param('tag'));
    $articles = $pages->find('articles')
                      ->children()
                      ->visible()
                      ->filterBy('tags', urldecode(param('tag')), ',')
                      ->flip()
                      ->paginate(50);
					  echo '<article class="post"><p class="result condensed smaller">Articles tagged with “<mark>' , $tag , '</mark>”</p></article>'; 

  } else {

    $articles = $pages->find('articles')
                      ->children()
                      ->visible()
                      ->flip()
                      ->paginate(50)
                      ->sortBy('date', 'desc');
  } ?>

<?php foreach($articles as $article): ?>

	<article class="post index">
                  <time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate" class="time"><?php echo $article->date('F j, Y') ?></time>
		<h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
		<p><?php echo excerpt($article->text(), 200) ?></p>

	</article>

<?php endforeach ?>

<?php if($articles->pagination()->hasPages()): ?>

	<nav class="pagination">

	  <?php if($articles->pagination()->hasNextPage()): ?>
	  <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; Older stuff</a>
	  <?php endif ?>

	  <?php if($articles->pagination()->hasPrevPage()): ?>
	  <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">Newer stuff &rsaquo;</a>
	  <?php endif ?>

	</nav>
<?php endif ?>
</main>

<?php snippet('footer') ?>