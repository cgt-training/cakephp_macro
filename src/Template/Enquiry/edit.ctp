<div class="text-right">    
    <?= $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'View', $enquiry->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $enquiry->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Form->postLink(
    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
    ['action' => 'delete', $enquiry->id],
    ['confirm' => 'Are you sure?','escape'=>false,'title'=>'Delete'])
    ?>
</div>
<div class="enquiry form large-9 medium-8 columns content">
    <?= $this->Form->create($enquiry) ?>
    <fieldset>
        <legend><?= __('Edit Enquiry') ?></legend>
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
