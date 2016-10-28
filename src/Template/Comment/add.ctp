<?php echo $this->Html->getCrumbs(' > ', [ 'text' => __('List Products'), 'url' => ['action' => 'index'],  'escape' => false]);?>
<div class="comment form large-9 medium-8 columns content">
    <?= $this->Form->create($comment) ?>
    <fieldset>
        <legend><?= __('Add Comment') ?></legend>
         <div class="form-group">
          <?php echo $this->Form->input('s_no',['class'=>'form-control']);?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('pid',['class'=>'form-control']);?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('u_name',['class'=>'form-control']);?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('c_title',['class'=>'form-control']);?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('comment',['class'=>'form-control']);?>
        </div>   
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
