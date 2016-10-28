<div class="text-right">
    <?= $this->Html->link('<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>', ['action' => 'index'],['escape'=>false,'title'=>__('List Comments')]) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>', ['action' => 'add'],['escape'=>false,'title'=>__('New Comments')]) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $comment->pid],['escape'=>false,'title'=>__('Edit Comments')]); ?>&nbsp;&nbsp;
    <?= $this->Form->postLink(
    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
    ['action' => 'delete', $comment->pid],
    ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete Comments')])
    ?>
</div>
<div class="comment view large-9 medium-8 columns content">
    <h3><?= h($comment->p_id) ?></h3>
    <table class="vertical-table table">
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
    </table>
    <div class="row">
        <h3><?= __('Comment') ?></h3>
        <?= $this->Text->autoParagraph(h($comment->comment)); ?>
    </div>
</div>
