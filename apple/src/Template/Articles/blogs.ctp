<section class="blog-area pt-100 pb-100">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 hosting-content">
            <h6>Featured</h6>
            <div class="bar"></div>
          </div>

          <?php
            $count = 0;
            foreach($features as $feature){
            $count = $count + 1;
          ?>
          <div class="col-lg-3 col-md-6">
              <div class="single-blog">
                  <div class="image image-div-<?=$count?>">
                      <a href="<?=BASE_URL?>/blog/<?=$feature->slug?>" style="padding: 12px;">
                        <img class="div-image-<?=$count?>" src="<?=BASE_URL?>/img/blog/<?=$feature->image_file?>" alt="image">
                      </a>
                      <!--div class="tag">04 December 2021</div-->
                  </div>
                  <div class="content blog-content-<?=$count?>">
                      <h3>
                          <a href="<?=BASE_URL?>/blog/<?=$feature->slug?>"><?=mb_strimwidth(ucwords(strtolower($feature->title)), 0, 40, "...")?></a>
                      </h3>
                      <!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a href="#" class="blog-btn">Read More +</a-->
                  </div>
              </div>
            </div>
            <?php
              }
            ?>

        </div><!-- /end row -->

        <div class="row" style="padding-top: 50px;">
          <div class="col-lg-12 hosting-content">
            <h6>Latest</h6>
            <div class="bar"></div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="image-cont">
              <img src="<?=BASE_URL?>/img/blog/<?=$latests->image_file?>" style="border-radius: 30px;"/>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <?php
              foreach($latests->tags as $tag){
            ?>
            <span class="tags pt-100"><?=$tag->title?></span>
            <?php
            }
            ?>
            <div class="hosting-content" style="text-align: left; padding: 10px; margin-bottom: 0px;">
                  <h2><?=$latests->title?></h2>
                  <div class="bar"></div>
            </div>
            <div class="content-0">
                <?=mb_strimwidth(ucwords(strtolower($latests->body)), 0, 600, "...")?>
            </div>
            <div class="affiliate-btn">
                <a href="<?=BASE_URL?>/blog/<?=$latests->slug?>" class="default-btn">
                    Read more
                     <i class="flaticon-right-arrow"></i>
                    <span style="top: 171.2px; left: 120.4px;"></span>
                </a>
            </div>
          </div>
        </div>

        <div class="row" style="padding-top: 50px;" id="postData">
          <div class="col-lg-12 hosting-content">
            <h6>All</h6>
            <div class="bar"></div>
          </div>
          <!--/load post-->

          <!--/end load post-->
        </div><!-- /end row -->
        <div class="row">
          <!--div class='loader-image' style='display:none;text-align:center;'>
            <img src='<?=BASE_URL?>/img/loading.gif' style="width:150px; height:150px; margin-top:-20px" />
          </div-->
          <div id="moreBtn" style="text-align:center">
            <button type='button' id='moreB' class='default-btn'>Load more</button>
          </div>
          <div id="loadBtn" style="text-align:center">

          </div>
        </div>
    </div>
</section>
