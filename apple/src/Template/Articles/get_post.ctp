<?php
  foreach($articles as $article){
?>
<div class="col-lg-3 col-md-6">
    <div class="single-blog">
        <div class="image image-div-<?=rand(1,6)?>">
            <a href="#" style="height: 188px;">
              <img style="min-height: 100%;" class="curve-top" src="<?=BASE_URL?>/img/blog/<?=$article->image_file?>" alt="image">
            </a>
            <!--div class="tag">04 December 2021</div-->
        </div>
        <div class="content blog-content-<?=rand(1,6)?>">
            <h3>
                <a href="<?=BASE_URL?>/blog/<?=$article->slug?>"><?=mb_strimwidth(ucwords(strtolower($article->title)), 0, 35, "...")?></a>
            </h3>
            <small><?=$article->author?></small>
            <!--p>
              <?=mb_strimwidth(ucwords(strtolower($article->body)), 0, 200, "...")?>
            </p><br/-->
            <div style="margin-top: 50px;">
              <?php
                foreach($article->tags as $tag){
              ?>
              <span class="tags"><?=$tag->title?></span>
              <?php
              }
              ?>
            </div>
        </div>
    </div>
  </div>

  <?php
    }
  ?>
