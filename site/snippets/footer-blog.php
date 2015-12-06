  <footer class="footer-blog cf" role="contentinfo">

 <main class="main blog" role="main">

  <div class="inner">
  	<div class="author">
  		<?php snippet('author') ?>	
  	</div>

	<div class="tags">
		Tagged with: <?php foreach(str::split($page->tags()) as $tag): ?>
			<a href="<?php echo url('articles/tag:' . urlencode($tag)) ?>">#<?php echo html($tag) ?></a>
		<?php endforeach ?>
	</div>  

  </div>
  
  <?php echo webmentions() ?>

  </main>
  
  </footer>
<?php echo js('assets/js/main.js') ?>
<script>
  var nav = responsiveNav(".nav-collapse");
</script>  
</body>
</html>