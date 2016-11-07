<section class="content">
<?php echo $this->Html->getCrumbs(' > ', [ 'text' => __('List Products'), 'url' => ['action' => 'index'],  'escape' => false,'class'=>'AjaxLink']);?>
    <div class="row">
    <!-- left column -->
        <div class="col-md-offset-3 col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title"><?= __('Add New Product') ?></h3>
                </div>

                <div class="blogPosts form large-9 medium-8 columns content">
                    <?= $this->Form->create($product,['type'=>'file','role'=>'form']) ?>
                    <div class="box-body">
                        <div class="form-group">
                            <?php echo $this->Form->input('name',array('class'=>'form-control'));?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('description',array('class'=>'form-control'));?>
                        </div>   
                        <div class="form-group">
                            <?php echo $this->Form->input('dp',array('type'=>'file','label'=>['text'=>'Display Pic']));?>
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
