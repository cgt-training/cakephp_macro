<p class="text-right" style="font-size: 22px;"><?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>',
 ['action' => 'add'],['escape'=>false,'title'=>__('New User'),'class'=>'AjaxLink']) ?><p>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr class="active">
                <th scope="col"><?= __('Sno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <!--th scope="col"><?= $this->Paginator->sort('password') ?></th-->
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <!--th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th-->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
       
            <?php 
             $S_no=1;   
            foreach ($users as $user): ?>
            <tr>
                <td><?= $S_no++;?></td>
                <td><?= h($user->username) ?></td>
                <!--td><?= h($user->password) ?></td-->
                <td><?= h($user->role) ?></td>
                <!--td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td-->
                <td class="actions">                   
                <?=  $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'View', $user->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                   
                   <?php
                     if($this->request->Session()->read('Auth.User')) 
                    {
                  echo   $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $user->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']);
                    }
                    else
                    {
                 echo   $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['controller'=>'Users','action' => 'login'],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']);
                    } 
                    ?>&nbsp;&nbsp;
                   <?= $this->Form->postLink(
                    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
                    ['action' => 'delete', $user->id],
                    ['confirm' => 'Are you sure?','escape'=>false,'title'=>'Delete','class'=>'AjaxLink']);
                   ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>