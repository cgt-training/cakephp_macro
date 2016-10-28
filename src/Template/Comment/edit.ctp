<div class="text-right">    
    <?= $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'View', $comment->pid],['escape'=>false,'title'=>'View']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $comment->pid],['escape'=>false,'title'=>'Edit']) ?>&nbsp;&nbsp;
    <?= $this->Form->postLink(
    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
    ['action' => 'delete', $comment->pid],
    ['confirm' => 'Are you sure?','escape'=>false,'title'=>'Delete'])
    ?>
</div>
<div class="comment form large-9 medium-8 columns content">
    <?= $this->Form->create($comment) ?>
    <fieldset>
        <legend><?= __('Edit Comment') ?></legend>
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
