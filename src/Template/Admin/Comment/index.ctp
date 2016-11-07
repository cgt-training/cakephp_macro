<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comment index large-9 medium-8 columns content">
    <h3><?= __('Comment') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comment->pid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comment->pid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->pid)]) ?>
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
