<section class="content">

    <div class="row">
    <!-- left column -->
        <div class="col-md-offset-2 col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title col-md-9"><?= __('Edit Blog Post') ?></h3>
                <div class="text-right col-md-3">    
                <?= $this->Html->link('<span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>', ['action' => 'View', $blogPost->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                <?= $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'edit', $blogPost->id],['escape'=>false,'title'=>'index','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                <?= $this->Form->postLink(
                '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
                ['action' => 'delete', $blogPost->id],
                ['confirm' => 'Are you sure?','escape'=>false,'title'=>'Delete'])
                ?>
            </div>
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
                        <?= $this->Form->button(__('<i class="fa fa-credit-card"></i>  Submit'),['class'=>'btn btn-primary center-block']) ?>
                    </div>
                   
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</section>
