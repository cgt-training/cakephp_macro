<p class="text-right" style="font-size: 22px;"><?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>',
 ['action' => 'add'],['escape'=>false,'title'=>__('Add New Comment'),'class'=>'AjaxLink']) ?><p>
<div class="comment index large-9 medium-8 columns content">
    <h3><?= __('Comment') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr class="active">
                <th scope="col"><?= $this->Paginator->sort('s_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('u_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_title') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comment as $comment): ?>
            <tr>
                <td><?= $this->Number->format($comment->s_no) ?></td>
                <td><?= $this->Number->format($comment->pid) ?></td>
                <td><?= h($comment->u_name) ?></td>
                <td><?= h($comment->c_title) ?></td>
                <td class="actions">
                    <?= $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'View', $comment->pid],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                   <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $comment->pid],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                   <?= $this->Form->postLink(
                    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
                    ['action' => 'delete', $comment->pid],
                    ['confirm' => 'Are you sure?','escape'=>false,'title'=>'Delete']);
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
