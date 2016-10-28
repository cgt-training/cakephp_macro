<p class="text-right" style="font-size: 22px;"><?php
if($this->request->Session()->read('Auth.User')) 
{
   echo  $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>',
 ['action' => 'add'],['escape'=>false,'title'=>__('Add New Product'),'class'=>'AjaxLink']) ;
}
else
{
    echo  $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>',
 ['controller'=>'Users','action' => 'login'],['escape'=>false,'title'=>__('Add New Product'),'class'=>'AjaxLink']) ; 
}
?><p>
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr class="active">
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= __('Dp') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= $this->Time->format(h($product->created) , 'dd-MM-YYYY HH:mm:ss');?></td>
                <td><?= $this->Time->format(h($product->modified) , 'dd-MM-YYYY HH:mm:ss'); ?></td>
                <td><?
                if(!empty($product->file))
                echo  $this->Html->image(h($product->file), ['alt' => 'CakePHP','class'=>'img-responsive','width'=>'60px']); ?></td>
                <td class="actions">
                   <?= $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'View', $product->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                   <?
                    if($this->request->Session()->read('Auth.User'))
                    {
                     echo  $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $product->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']);  
                    }
                    else
                    {
                      // $this->request->Session()->write('Auth.redirect', '/products/edit/'.$product->id);
                     echo $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['controller'=>'Users','action' => 'login'],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']);    
                    }
                    ?>&nbsp;&nbsp;
                   <?= $this->Form->postLink(
                    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
                    ['action' => 'delete', $product->id],
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
