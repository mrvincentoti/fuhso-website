<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title">Edit</strong>
            </div>
            <div class="card-body">
            <?=$this->Flash->render()?>
                <div class="row">
                    <div class="col-md-12">
                         <?= $this->Form->create($about) ?>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Description</label>
                                <?php
                                echo $this->Form->control('description', ['class'=>'form-control','label'=>false, 'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Vision</label>
                                <?php
                                echo $this->Form->control('vision', ['class'=>'form-control','label'=>false,'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Mission</label>
                                <?php
                                echo $this->Form->control('mission', ['class'=>'form-control','label'=>false,'type'=>'textarea']);
                                ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Philosophy</label>
                                <?php
                                echo $this->Form->control('philosophy', ['class'=>'form-control','label'=>false,'type'=>'textarea']);
                                ?>
                            </div>
                            <!--div class="form-group mb-3">
                                <label for="simpleinput">Image</label>
                                <?php
                                echo $this->Form->control('image', ['class'=>'form-control','label'=>false,'type'=>'file','required'=>false]);
                                ?>
                            </div-->
                            <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div> <!-- /.col -->
                </div>
            </div>
            </div> <!-- / .card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div>

