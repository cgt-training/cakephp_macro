<?php echo $this->Html->getCrumbs(' > ', [ 'text' => __('List Enquiry'), 'url' => ['action' => 'index'],  'escape' => false,'class'=>'AjaxLink']);?>
<div class="enquiry form large-9 medium-8 columns content">
    <?= $this->Form->create($enquiry) ?>
    <fieldset>
        <legend><?= __('Add Enquiry') ?></legend>
        <div class="form-group">
          <?php echo $this->Form->input('name',['class'=>'form-control']);?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('phone_no',['class'=>'form-control']);?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('email',['class'=>'form-control']);?>
        </div>
        <div class="form-group">
          <?php echo $this->Form->input('query',['class'=>'form-control']);?>
        </div>        
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
