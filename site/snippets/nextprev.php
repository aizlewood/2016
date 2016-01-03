
  <div class="nextprev" role="navigation">

    <div class="inner">

          <?php if($prev = $page->prevVisible()): ?>
          <a class="prev" href="<?php echo $prev->url() ?>">Prev</a>
          <?php else : ?>
            
          <?php endif ?>

          <?php if($next = $page->nextVisible()): ?>
          <a class="next" href="<?php echo $next->url() ?>">Next</a>
          <?php else : ?>
           
          <?php endif ?>
      
      </div>
    </div>
    