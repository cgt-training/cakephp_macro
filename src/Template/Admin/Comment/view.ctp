<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->pid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->pid], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->pid)]) ?> </li>
        <li><?= $this->Html->link(__('List Comment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comment view large-9 medium-8 columns content">
    <h3><?= h($comment->pid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('U Name') ?></th>
            <td><?= h($comment->u_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Title') ?></th>
            <td><?= h($comment->c_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S No') ?></th>
            <td><?= $this->Number->format($comment->s_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pid') ?></th>
            <td><?= $this->Number->format($comment->pid) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($comment->comment)); ?>
    </div>
</div>
