<?php snippet('header') ?>

  <main class="home main" role="main">

	<!-- <?php snippet('status') ?> -->

	<ul class="teaser cf animated fadeIn">
	  <?php foreach(page('projects')->children()->visible()->limit(100) as $project): ?>
	  
	  <li>

	    <div class="intro hub animated fadeIn <?php echo $project->slug() ?>">

	    <div class="hero-wrapper">
	    	<img src="<?php echo $project->hero()->html() ?>">
	    </div>
	          
	    <div class="project-info">
	    
	          <p class="lede explanation"><?php echo $project->lede()->html() ?></p>
	          <h1 class="animated fadeIn"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a><a class="cta" href="<?php echo $project->url() ?>">&nbsp;<img src="<?php echo url('assets/img/arrow-right.svg') ?>"></a></h1>
	          <p class="blurb"><?php echo $project->summary()->html() ?></p>				

	    </div>

	    </div>
	    
	  </li>
	  <?php endforeach ?>
	</ul>

  </main>

<?php snippet('footer') ?>