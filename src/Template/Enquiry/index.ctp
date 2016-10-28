<p class="text-right" style="font-size: 22px;"><?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>',
 ['action' => 'add'],['escape'=>false,'title'=>__('Add New Enquiry'),'class'=>'AjaxLink']) ?><p>
<div class="enquiry index large-9 medium-8 columns content">
    <h3><?= __('Enquiry') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr class="active">
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enquiry as $enquiry): ?>
            <tr>
                <td><?= $this->Number->format($enquiry->id) ?></td>
                <td><?= h($enquiry->name) ?></td>
                <td><?= h($enquiry->phone_no) ?></td>
                <td><?= h($enquiry->email) ?></td>
                <td class="actions">
                 <?= $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'View', $enquiry->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                   <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $enquiry->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                   <?= $this->Form->postLink(
                    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
                    ['action' => 'delete', $enquiry->id],
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
