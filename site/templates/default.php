<?php snippet('header') ?>

  <main class="main" role="main">
   
 <article class="post-intro">

    <h1 class="post-title">
      <div class="inner">
      <?php echo html($page->title()) ?>
      </div>
    </h1>  
  </article>

  <article class="post">
    <?php echo kirbytext($page->text()) ?>
  </article>


<?php snippet('submenu') ?>

  </main>

<?php snippet('footer') ?>