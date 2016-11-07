<section class="content-header">
  <p class="login-box-msg text-center"><?= $this->Flash->render() ?></p>  
      <h1>Blog Posts </h1>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title text-right">
              <?= 
               $this->Html->link(
               $this->Form->button('New Blog Posts', ['type' => 'button','class'=>'btn btn-block btn-primary']),
               ["action"=>"add"],
               ['escape' => false]
            );
             ?>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="TableData" class="table table-bordered table-hover">
                <thead>
                <tr class="active">
                <th class="text-center"><?= __('id') ?></th>
                <th class="text-center"><?= __('name') ?></th>
                <th class="text-center"><?= __('post_no') ?></th>
                <th class="text-center"><?= __('created') ?></th>
                <th class="text-center"><?= __('modified') ?></th>
                <th class="text-center"><?= __('flag') ?></th>
                <th class="text-center actions"><?= __('Actions') ?></th>
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
                    <td class="text-center actions">
                        <?= $this->Html->link(__('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>'), ['action' => 'view', $blogPost->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>
                        <?= $this->Html->link(__('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>'), ['action' => 'edit', $blogPost->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']) ?>
                        <?= $this->Form->postLink(__('<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'), ['action' => 'delete', $blogPost->id], 
                        ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id),'escape'=>false,'title'=>'Delete','class'=>'AjaxLink']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
               
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
