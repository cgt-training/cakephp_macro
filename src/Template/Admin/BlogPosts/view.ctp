<div class="text-right">
    <?= $this->Html->link('<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>', ['action' => 'index'],['escape'=>false,'title'=>__('List Blog Post'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>', ['action' => 'add'],['escape'=>false,'title'=>__('New Blog Post'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $blogPost->id],['escape'=>false,'title'=>__('Edit Blog Post'),'class'=>'AjaxLink']); ?>&nbsp;&nbsp;
    <?= $this->Form->postLink(
    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
    ['action' => 'delete', $blogPost->id],
    ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete Blog Post')])
    ?>
</div>
<div class="blogPosts view large-9 medium-8 columns content">
    <h3><?= h($blogPost->name) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($blogPost->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flag') ?></th>
            <td><?= h($blogPost->flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($blogPost->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post No') ?></th>
            <td><?= $this->Number->format($blogPost->post_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($blogPost->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($blogPost->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h3><?= __('Description') ?></h3>
        <?= $this->Text->autoParagraph(h($blogPost->description)); ?>
    </div>
</div>
