<section class="content">
<div class="row">
<div class="col-sm-12">
<div class="box">
            <div class="box-header with-border">
                 <h3 class="box-title col-md-9"><?= h($blogPost->name) ?></h3>
                 <div class="text-right col-md-3">
                    <?= $this->Html->link('<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>', ['action' => 'index'],['escape'=>false,'title'=>__('List Blog Post'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                    <?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>', ['action' => 'add'],['escape'=>false,'title'=>__('New Blog Post'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $blogPost->id],['escape'=>false,'title'=>__('Edit Blog Post'),'class'=>'AjaxLink']); ?>&nbsp;&nbsp;
                    <?= $this->Form->postLink(
                    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
                    ['action' => 'delete', $blogPost->id],
                    ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete Blog Post')])
                    ?>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody> 
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
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <h3><?= __('Description') ?></h3>
                 <?= $this->Text->autoParagraph(h($blogPost->description)); ?>
                 
            </div>
          </div>
        </div>
    </div>
</section>