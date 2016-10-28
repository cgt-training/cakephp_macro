<div class="text-right">
    <?= $this->Html->link('<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>', ['action' => 'index'],['escape'=>false,'title'=>__('List Enquiry'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>', ['action' => 'add'],['escape'=>false,'title'=>__('New Enquiry'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $enquiry->id],['escape'=>false,'title'=>__('Edit Enquiry'),'class'=>'AjaxLink']); ?>&nbsp;&nbsp;
    <?= $this->Form->postLink(
    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
    ['action' => 'delete', $enquiry->id],
    ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete Enquiry')])
    ?>
</div>
<div class="enquiry view large-9 medium-8 columns content">
    <h3><?= h($enquiry->name) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($enquiry->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone No') ?></th>
            <td><?= h($enquiry->phone_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($enquiry->email) ?></td>
        </tr>        
    </table>
    <div class="row">
        <h3><?= __('Query') ?></h3>
        <?= $this->Text->autoParagraph(h($enquiry->query)); ?>
    </div>
</div>
