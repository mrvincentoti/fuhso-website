<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<!--nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articles view large-9 medium-8 columns content">
    <h3><?= h($article->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $article->has('user') ? $this->Html->link($article->user->id, ['controller' => 'Users', 'action' => 'view', $article->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($article->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($article->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author') ?></th>
            <td><?= h($article->author) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image File') ?></th>
            <td><?= h($article->image_file) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($article->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($article->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($article->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Published') ?></th>
            <td><?= $article->published ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($article->body)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tags') ?></h4>
        <?php if (!empty($article->tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($article->tags as $tags): ?>
            <tr>
                <td><?= h($tags->id) ?></td>
                <td><?= h($tags->title) ?></td>
                <td><?= h($tags->created) ?></td>
                <td><?= h($tags->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div-->


<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
              <div>
                <img src="<?=BASE_URL?>/img/blog/<?=$article->image_file?>" style="border-radius: 35px; max-height: 100%;"/>
              </div>
            </div>

            <div class="col-lg-5 col-md-12">
              <div class="tagcloud">
                  <?php
                    foreach($article->tags as $tags){
                  ?>
                  <a href="#"><?=$tags->title?></a>
                  <?php
                    }
                  ?>
              </div>
              <h1 class="item-title"><?=$article->title?></h1>
              <span style="font-weight: 800;"><?=$article->author?></span><br/>
              <span style="font-size: 15px; font-weight: 400;"><?=date("d M, Y", strtotime($article->created))?> - 0 Comment(s)</span>
            </div>
        </div><!--/end row-->
        <div class="row" style="padding-top: 50px;">
            <div class="col-lg-6 offset-lg-3">
              <p>
                <?=$article->body?>
              </p>
              <!-- Add font awesome icons -->
            </div>

        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-3" style="text-align: right;">
            <?php if($neighbors['prev']['id'] != "" || $neighbors['prev']['id'] != NULL){?>
            <section class="nextprev-older post tag-story tag-creative tag-hash-post-card-pool featured">
              <a href="<?=BASE_URL?>/blog/<?=$neighbors['prev']['slug']?>" class="global-link" aria-label="Don’t be afraid"></a>
              <div>
                <small><i class="flaticon-left-arrow"></i> Newer post</small>
                <h3><a href="<?=BASE_URL?>/blog/<?=$neighbors['prev']['slug']?>"><?=$neighbors['prev']['title']?></a></h3>
              </div>
              <!--a href="/dont-be-afraid/" class="nextprev-image global-image">
                <img src="<?=BASE_URL?>/img/blog-01.jpeg" alt="Don’t be afraid">			</a-->
            </section>
          <?php }?>
          </div>
          <div class="col-3">
            <?php if($neighbors['next']['id'] != "" || $neighbors['next']['id'] != NULL){?>
            <section class="nextprev-older post tag-story tag-creative tag-hash-post-card-pool featured">
              <a href="<?=BASE_URL?>/blog/<?=$neighbors['next']['slug']?>" class="global-link" aria-label="Don’t be afraid"></a>
              <div>
                <small>Older post <i class="flaticon-right-arrow"></i></small>
                <h3><a href="<?=BASE_URL?>/blog/<?=$neighbors['next']['slug']?>"><?=$neighbors['next']['title']?></a></h3>
              </div>
              <!--a href="/dont-be-afraid/" class="nextprev-image global-image">
                <img src="/content/images/size/w400/2020/11/photo-1557800636-894a64c1696f.jpeg" alt="Don’t be afraid"></a-->
            </section>
            <?php }?>
          </div>
        </div>
    </div><!--/end container-->
</section>
<!-- End Blog Details Area -->
