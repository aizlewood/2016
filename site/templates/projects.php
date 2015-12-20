<?php snippet('header') ?>

  <main class="main" role="main">

	<!-- <?php snippet('status') ?> -->

	<ul class="teaser projects-list">
	  <?php foreach(page('projects')->children()->visible()->limit(100) as $project): ?>
	  
	  <li>

	    <div class="projects">
	          
	    <div class="project-info">
	  
	          <h1 class="animated fadeIn"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h1>
	    </div>

	    </div>
	    
	  </li>
	  <?php endforeach ?>
	</ul>

  </main>

<?php snippet('footer') ?>