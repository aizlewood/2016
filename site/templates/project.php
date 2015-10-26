    <?php snippet('header') ?>


      <main class="projects" role="main">

         <?php if($page->bgblock() != ''): ?>
          <div class="intro" style="background-color:<?php echo $page->bgblock()?>;'">

          <?php else : ?>

          <?php $firstimage = $page->images()->get('artboard.jpg')?>
          <div class="intro single" style="background-image:url('<?php echo $firstimage->url()?>')">

        <?php endif ?>

          <?php foreach(page('projects')->children()->visible()->limit(1) as $project): ?>
              <h1 class="animated fadeIn"><?php echo $page->title()->html() ?></h1>
              <p class="lede"><?php echo $page->lede()->html() ?></p>
          <?php endforeach ?>      

        </div>

      <article>

      <figure class="hero animated fadeIn">
        <img src="<?php echo $page->hero()->html() ?>">

      </figure>


    <?php
    $images = array();
    foreach($page->children() as $child) {
      foreach($child->images() as $image) {
        $images[] = $image;
      }
    }

    shuffle($images);

    ?>
    <?php if (!empty ($images )) : ?>
    <ul class="gallery">
      <?php foreach($images as $image): ?>
        <li class="item">
          <img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" />
        </li>
      <?php endforeach ?>
    </ul> 
    <?php endif ?>          

        <div class="row">
          <?php echo $page->text()->kirbytext() ?>
        </div>

          <?php foreach($page->children() as $subpage): ?>

            <div class="row--full" style="background-color:<?php echo $subpage->rowcolour()?>;">

              <h2 style="color:<?php echo $subpage->textcolour()?>;"><?php echo html($subpage->title()) ?></h2>
              <p style="color:<?php echo $subpage->textcolour()?>;"><?php echo html($subpage->text()) ?></p>
                  <?php if($subpage->imagery() != ''): ?>
                    <img src="<?php echo html($subpage->imagery()) ?>">
                  <?php endif ?>

            </div>        
          <?php endforeach ?>        
    

    <div class="segue">
          <?php if($next = $page->nextVisible()): ?>
          <a href="<?php echo $next->url() ?>">Next: <?php echo $next->title() ?></a>
          <?php else : ?>
          <?php endif ?>
    </div>

    </article>

      </main>

    <?php snippet('footer') ?>