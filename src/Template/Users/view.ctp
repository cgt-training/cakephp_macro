<div class="text-right">
    <?= $this->Html->link('<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>', ['action' => 'index'],['escape'=>false,'title'=>__('List Users'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>', ['action' => 'add'],['escape'=>false,'title'=>__('New User'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $user->id],['escape'=>false,'title'=>__('Edit User'),'class'=>'AjaxLink']); ?>&nbsp;&nbsp;
    <?= $this->Form->postLink(
    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
    ['action' => 'delete', $user->id],
    ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete User')])
    ?>
</div>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= $this->Time->format(h($user->created), 'dd-MM-YYYY HH:mm:ss') ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= $this->Time->format(h($user->modified), 'dd-MM-YYYY HH:mm:ss') ?></td>
        </tr>
    </table>
</div>
