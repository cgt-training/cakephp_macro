<div class="text-right">    
    <?= $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'View', $product->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $product->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Form->postLink(
    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
    ['action' => 'delete', $product->id],
    ['confirm' => 'Are you sure?','escape'=>false,'title'=>'Delete'])
    ?>
</div>

<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product,['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
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
