<section class="content">
<?php echo $this->Html->getCrumbs(' > ', [ 'text' => __('List Blog Posts'), 'url' => ['action' => 'index'],  'escape' => false,'class'=>'AjaxLink']);?>
    <div class="row">
    <!-- left column -->
        <div class="col-md-offset-3 col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title"><?= __('Add Blog Post') ?></h3>
                </div>

                <div class="blogPosts form large-9 medium-8 columns content">
                    <?= $this->Form->create($blogPost,['role'=>'form']) ?>
                    <div class="box-body">
                        <div class="form-group">
                            <?=  $this->Form->input('name',['class'=>'form-control']);?>
                        </div>
                        <div class="form-group">
                            <?=  $this->Form->input('description',['class'=>'form-control','rows'=>'3']);?>
                        </div>
                        <div class="form-group">
                            <?=  $this->Form->input('post_no',['class'=>'form-control']);?>
                        </div>
                        <div class="form-group">
                            <?=  $this->Form->input('flag',['class'=>'form-control']);?>
                        </div>  
                    </div>
                    <div class="box-footer">
                        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</section>

