<?php echo $this->Html->getCrumbs(' > ', [ 'text' => __('List Blog Posts'), 'url' => ['action' => 'index'],  'escape' => false,'class'=>'AjaxLink']);?>
<div class="blogPosts form large-9 medium-8 columns content">
    <?= $this->Form->create($blogPost) ?>
    <fieldset>
        <legend><?= __('Add Blog Post') ?></legend>
         <div class="form-group"><?=  $this->Form->input('name',['class'=>'form-control']);?></div>
         <div class="form-group"><?=  $this->Form->input('description',['class'=>'form-control','rows'=>'3']);?></div>
         <div class="form-group"><?=  $this->Form->input('post_no',['class'=>'form-control']);?></div>
         <div class="form-group"><?=  $this->Form->input('flag',['class'=>'form-control']);?></div>        
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-default']) ?>
    <?= $this->Form->end() ?>
</div>
