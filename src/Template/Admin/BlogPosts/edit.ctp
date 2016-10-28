<div class="text-right">    
    <?= $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'View', $blogPost->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $blogPost->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Form->postLink(
    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
    ['action' => 'delete', $blogPost->id],
    ['confirm' => 'Are you sure?','escape'=>false,'title'=>'Delete'])
    ?>
</div>
<div class="blogPosts form large-9 medium-8 columns content">
    <?= $this->Form->create($blogPost) ?>
    <fieldset>
        <legend><?= __('Edit Blog Post') ?></legend>
        <div class="form-group"><?=  $this->Form->input('name',['class'=>'form-control']);?></div>
         <div class="form-group"><?=  $this->Form->input('description',['class'=>'form-control','rows'=>'3']);?></div>
         <div class="form-group"><?=  $this->Form->input('post_no',['class'=>'form-control']);?></div>
         <div class="form-group"><?=  $this->Form->input('flag',['class'=>'form-control']);?></div>        
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
    <?= $this->Form->end() ?>
</div>
