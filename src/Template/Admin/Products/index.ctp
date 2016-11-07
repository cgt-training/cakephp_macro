<section class="content-header">
  <p class="login-box-msg text-center"><?= $this->Flash->render() ?></p>  
      <h1><?= __('Products') ?> </h1>
</section>
 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title text-right">
              <?= 
               $this->Html->link(
               $this->Form->button(__('New Product'), ['type' => 'button','class'=>'btn btn-block btn-primary']),
               ["action"=>"add"],
               ['escape' => false]
            );
             ?>    </h3>
            </div>
            <div class="box-body">
              <table id="TableData" class="table table-bordered table-hover">
                <thead>
            <tr>
                <th class="text-center"><?= __('id') ?></th>
                <th class="text-center"><?= __('name') ?></th>
                <th class="text-center"><?= __('created') ?></th>
                <th class="text-center"><?= __('modified') ?></th>
                <th class="text-center"><?= __('Dp') ?></th>
                <th class="text-center" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= h($product->created) ?></td>
                <td><?= h($product->modified) ?></td>
                <td class="text-center"><?
                if(!empty($product->file)):
                echo  $this->Html->image(h($product->file), ['alt' => 'CakePHP','class'=>'img-responsive center-block','width'=>'60px']);
                endif; ?>
               </td>
                <td class="text-center actions">
                    <?= $this->Html->link(__('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>'), ['action' => 'view', $product->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>
                        <?= $this->Html->link(__('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>'), ['action' => 'edit', $product->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?>
                        <?= $this->Form->postLink(__('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'), ['action' => 'delete', $product->id], 
                        ['confirm' => __('Are you sure you want to delete # {0}?', $product->id),'escape'=>false,'title'=>'Delete','class'=>'AjaxLink']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
 </section>