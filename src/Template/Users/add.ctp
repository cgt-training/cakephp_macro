<?php echo $this->Html->getCrumbs(' > ', [ 'text' => __('List Users'), 'url' => ['action' => 'index'],  'escape' => false,'class'=>'AjaxLink']);?>
<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <div class="form-group"> <?= $this->Form->input('username',['class'=>'form-control']) ?></div>
        <div class="form-group"> <?= $this->Form->input('password',['class'=>'form-control']) ?></div>
        <div class="form-group"> <?= $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author'],
            'class' => 'form-control'
        ]) ?></div>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>
