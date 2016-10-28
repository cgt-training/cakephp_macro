<div class="text-right">
    <?= $this->Html->link('<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>', ['action' => 'index'],['escape'=>false,'title'=>__('List Product'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>', ['action' => 'add'],['escape'=>false,'title'=>__('New Product'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $product->id],['escape'=>false,'title'=>__('Edit Product'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
    <?= $this->Form->postLink(
    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
    ['action' => 'delete', $product->id],
    ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete Product')])
    ?>
</div>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dp') ?></th>
            <td>
            <?php
            if(!empty($product->file))
                echo  $this->Html->image(h($product->file), ['alt' => 'CakePHP','class'=>'img-responsive','width'=>'120px']); ?>
            </td>
        </tr>
    </table>
    <div class="row">
        <h3><?= __('Description') ?></h3>
        <?= $this->Text->autoParagraph(h($product->description)); ?>
    </div>
</div>
