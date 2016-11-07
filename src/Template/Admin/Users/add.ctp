<section class="content">
<?php echo $this->Html->getCrumbs(' > ', [ 'text' => __('List Users'), 'url' => ['action' => 'index'],  'escape' => false,'class'=>'AjaxLink']);?>
    <div class="row">
    <!-- left column -->
        <div class="col-md-offset-3 col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title"><?= __('Add User') ?></h3>
                </div>

                <div class="blogPosts form large-9 medium-8 columns content">
                    <?= $this->Form->create($user,['role'=>'form','type'=>'file']) ?>
                    <div class="box-body">
                    <div class="form-group"> <?= $this->Form->input('username',['class'=>'form-control']) ?></div>
			        <div class="form-group"> <?= $this->Form->input('password',['class'=>'form-control']) ?></div>
			        <div class="form-group">
                            <?php echo $this->Form->input('image',['type'=>'file','label'=>['text'=>'Profile Pic']]);?>
                    </div>  
			        <div class="form-group"> <?= $this->Form->input('role', [
			            'options' => ['admin' => 'Admin', 'author' => 'Author'],
			            'class' => 'form-control'
			        ]) ?>
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