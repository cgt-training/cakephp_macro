<div class="text-right">    
    <?= $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'View', $user->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $user->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Form->postLink(
    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
    ['action' => 'delete', $user->id],
    ['confirm' => 'Are you sure?','escape'=>false,'title'=>'Delete'])
    ?>
</div>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <div class="form-group"> <?= $this->Form->input('username',['class'=>'form-control']) ?></div>
        <div class="form-group"> <?= $this->Form->input('password',['class'=>'form-control']) ?></div>
        <div class="form-group"> <?= $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author'],
            'class' => 'form-control'
        ]) ?></div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
