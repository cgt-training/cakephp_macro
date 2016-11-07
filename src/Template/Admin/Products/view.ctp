<section class="content">
<div class="row">
<div class="col-sm-12">
<div class="box">
            <div class="box-header with-border">
                 <h2 class="box-title col-md-9"><?= h($product->name) ?></h2>
                 <div class="text-right col-md-3">
                    <?= $this->Html->link('<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>', ['action' => 'index'],['escape'=>false,'title'=>__('List Product'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                    <?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>', ['action' => 'add'],['escape'=>false,'title'=>__('New Product'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $product->id],['escape'=>false,'title'=>__('Edit Product'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                    <?= $this->Form->postLink(
                    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
                    ['action' => 'delete', $product->id],
                    ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete Product')])
                    ?>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody> 
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
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <h3><?= __('Description') ?></h3>
                <?= $this->Text->autoParagraph(h($product->description)); ?>
                 
            </div>
          </div>
        </div>
    </div>
</section>