<p class="text-right" style="font-size: 22px;"><?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>',
 ['action' => 'add'],['escape'=>false,'title'=>__('New Blog Post')]) ?><p>
<div class="blogPosts index large-9 medium-8 columns content">
    <h3><?= __('Blog Posts') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr class="active">
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('flag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blogPosts as $blogPost): ?>
            <tr>
                <td><?= $this->Number->format($blogPost->id) ?></td>
                <td><?= h($blogPost->name) ?></td>
                <td><?= $this->Number->format($blogPost->post_no) ?></td>
                <td><?= h($blogPost->created) ?></td>
                <td><?= h($blogPost->modified) ?></td>
                <td><?= h($blogPost->flag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>'), ['action' => 'view', $blogPost->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>
                    <?= $this->Html->link(__('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>'), ['action' => 'edit', $blogPost->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?>
                    <?= $this->Form->postLink(__('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'), ['action' => 'delete', $blogPost->id], 
                    ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id),'escape'=>false,'title'=>'Delete','class'=>'AjaxLink']) ?>
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
