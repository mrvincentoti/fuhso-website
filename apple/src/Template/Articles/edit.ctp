<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>
<!--nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $article->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Edit Article') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('title');
            echo $this->Form->control('slug');
            echo $this->Form->control('body');
            echo $this->Form->control('published');
            echo $this->Form->control('author');
            echo $this->Form->control('image_file');
            echo $this->Form->control('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div-->


<div class="row justify-content-center">
  <div class="col-12 text-right">
    <?= $this->Html->link(__('List Articles'), ['action' => 'index'], ['class' => 'btn mb-3 btn-outline-primary']) ?>
  </div>
  <div class="col-12">
    <h2 class="page-title">Edit Article</h2>
    <div class="card shadow mb-4">
      <div class="card-header">
        <strong class="card-title"></strong>
      </div>

      <?= $this->Form->create($article, ['type'=>'file']) ?>

      <div class="card-body">
        <div class="row">
          <!--div class="col-md-12">
            <div class="form-group mb-3">
              <label for="simpleinput">User</label>
              <?php
                  echo $this->Form->control('user_id', ['options' => $users, 'label'=>false, 'class'=>'form-control']);
              ?>
             </div>
          </div-->
          <div class="col-md-12">
            <div class="form-group mb-3">
              <label for="simpleinput">Title</label>
              <?php
                  echo $this->Form->control('title', ['label'=>false, 'class'=>'form-control']);
              ?>
             </div>
             <div class="form-group mb-3">
               <label for="simpleinput">Slug</label>
               <?php
                   echo $this->Form->control('slug', ['label'=>false, 'class'=>'form-control']);
               ?>
              </div>


              <div class="form-group mb-3">
                <a href="#" class="btn btn-sm btn-danger pull-right upload-img-btn" data-toggle="modal" data-target="#myModal">upload image</a>
                <!-- Input to browse your machine and select image to upload -->
                <input type="file" id="image-input" name="image-input" style="display: none;">
                <!--?=
                  $this->Form->control('image-input', ['id','image-input','type'=>'file','style'=>'display: none;'])
                ?-->
                <div class="form-group">
                  <?=
                      $this->Form->control('body', ['type'=>'textarea','class'=>'form-control ckeditor','placeholder'=>'Decription', 'label'=>false]);
                  ?>
                </div>
              </div>

              <div class="form-group mb-3">
                <label for="example-select">Publish</label>
                <?php
                  echo $this->Form->control('published', ['label'=>false, 'class'=>'']);
                ?>
              </div>

              <div class="form-group mb-3">
                <label for="simpleinput">Author</label>
                <?php
                    echo $this->Form->control('author', ['label'=>false, 'class'=>'form-control']);
                ?>
               </div>

               <div class="form-group mb-3">
                <label for="example-fileinput">Image</label>
                <?php
                    echo $this->Form->control('image_file', ['label'=>false, 'class'=>'form-control', 'type'=>'file']);
                ?>
                <input type="hidden" value="<?php echo $article->image_file?>" name="imagex"/>
              </div>

              <div class="form-group mb-3">
                <img style="width: 200px;" src="<?=BASE_URL?>/img/blog/<?=$article->image_file?>">
              </div>

              <div class="form-group mb-3">
                <label for="example-multiselect">Tags</label>
                <?php
                    echo $this->Form->control('tags._ids', ['options' => $tags, 'class'=>'form-control', 'label'=>false]);
                ?>
              </div>

          </div> <!-- /.col -->
        </div>
        <?= $this->Form->button(__('Submit'), ['class'=>'btn mb-3 btn-primary']) ?>
        <?= $this->Form->end() ?>
      </div>
    </div> <!-- / .card -->

  </div> <!-- .col-12 -->
</div> <!-- .row -->

<!-- Pop-up Modal to display image URL -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title-1" id="myModalLabel">Click below to copy image url</h4>
      </div>
      <div class="modal-body">
    <!-- returned image url will be displayed here -->
    <input
      type="text"
      id="post_image_url"
      onclick="return copyUrl()"
      class="form-control"
      >
    <p id="feedback_msg" style="color: green; display: none;"><b>Image url copied to clipboard</b></p>
      </div>
    </div>
  </div>
</div>
