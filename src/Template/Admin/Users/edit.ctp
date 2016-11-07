<section class="content">

    <div class="row">
    <!-- left column -->
        <div class="col-md-offset-2 col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title col-md-9"><?= __('Edit Blog Post') ?></h3>
                <div class="text-right col-md-3">    
                <?= $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'View', $user->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $user->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                <?= $this->Form->postLink(
                '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
                ['action' => 'delete', $user->id],
                ['confirm' => 'Are you sure?','escape'=>false,'title'=>'Delete'])
                ?>
            </div>
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
                        <?= $this->Form->button(__('<i class="fa fa-credit-card"></i>  Submit'),['class'=>'btn btn-primary center-block']) ?>
                    </div>
                   
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</section>