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
  
  <?php // echo webmentions() ?>

  </main>
  <br><br>  
  
  </footer>
<?php echo js('assets/js/main.js') ?>
<script>
  var nav = responsiveNav(".nav-collapse");
</script>
<script>
var myElement = document.querySelector("header");
var headroom  = new Headroom(myElement);
headroom.init(); 
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1256664-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
  var __rodeo_config = {
    'clientId': 'a1df01acea8ffacc8839fb8e0c428bf1216429c4b0e54cc2c1bee53d5379f468',
    'theme': 'slack'
  };

  var d = document.getElementsByTagName('head')[0],
  s = document.createElement('script');

  s.type = 'text/javascript';
  s.src = '//cdn.emoji.rodeo/dist.js';
  d.appendChild(s);
</script>

</body>
</html>