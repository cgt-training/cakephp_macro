<?php echo $this->Html->getCrumbs(' > ', 'Home');?>
<h1>Add Blog Post</h1>
<? echo $this->Form->create($post);?>
  <div class="form-group">
    <? echo $this->Form->input('title',array('class'=>'form-control'));?>
  </div>
  <div class="form-group">
    <?  echo $this->Form->input('description', ['rows' => '3','class'=>'form-control']);?>
  </div>
 
  <? echo $this->Form->button(__('Save Post'));?>

<?php echo $this->Form->end();?>