<?php echo $this->Html->getCrumbs(' > ', [ 'text' => __('List Products'), 'url' => ['action' => 'index'],  'escape' => false,'class'=>'AjaxLink']);?>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product,['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <div class="form-group">
            <?php echo $this->Form->input('name',array('class'=>'form-control'));?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('description',array('class'=>'form-control'));?>
        </div>   
        <div class="form-group">
            <?php echo $this->Form->input('dp',array('type'=>'file','label'=>['text'=>'Display Pic']));?>
        </div>       
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
