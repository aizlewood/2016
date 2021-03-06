<?php snippet('header') ?>

  <main class="home main" role="main">

	<!-- <?php snippet('status') ?> -->

	<ul class="teaser cf animated fadeIn">

	  <?php foreach(page('projects')->children()->visible()->limit(100) as $project): ?>
	  
	  <li>

	    <div class="intro hub animated fadeIn <?php echo $project->slug() ?>">
	          
	    <div class="project-info">
	    
	          <p class="lede explanation"><?php echo $project->lede()->html() ?></p>
	          <h1 class="animated fadeIn"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a><a class="cta" href="<?php echo $project->url() ?>">&nbsp;<img src="<?php echo url('assets/img/arrow-right.svg') ?>"></a></h1>
	          <p class="blurb font-neuton-regular"><?php echo $project->summary()->html() ?></p>				

	    </div>

	    </div>
	    
	  </li>
	  <?php endforeach ?>
	</ul>

  </main>
<script>'a1df01acea8ffacc8839fb8e0c428bf1216429c4b0e54cc2c1bee53d5379f468'</script>
<?php snippet('footer') ?>