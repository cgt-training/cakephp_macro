<section class="content">
<div class="row">
<div class="col-sm-12">
<div class="box">
            <div class="box-header with-border">
                 <h2 class="box-title col-md-9"><?= h($user->username) ?></h2>
                 <div class="text-right col-md-3">
                    <?= $this->Html->link('<span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>', ['action' => 'index'],['escape'=>false,'title'=>__('List Users'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                    <?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>', ['action' => 'add'],['escape'=>false,'title'=>__('New User'),'class'=>'AjaxLink']) ?>&nbsp;&nbsp;
                    <?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $user->id],['escape'=>false,'title'=>__('Edit User'),'class'=>'AjaxLink']); ?>&nbsp;&nbsp;
                    <?= $this->Form->postLink(
                    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
                    ['action' => 'delete', $user->id],
                    ['confirm' => 'Are you sure?','escape'=>false,'title'=>__('Delete User')])
                    ?>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody> 
               <tr>
                    <th scope="row"><?= __('Username') ?></th>
                    <td><?= h($user->username); ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Password') ?></th>
                    <td><?= h($user->password); ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Role') ?></th>
                    <td><?= h($user->role); ?></td>
                </tr>
                 <tr>
                    <th scope="row"><?= __('Image') ?></th>
                    <td>
                    <?php
                    if(!empty($user->image))
                        echo  $this->Html->image(h($user->image), ['alt' => 'CakePHP','class'=>'img-responsive','width'=>'120px']); ?>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>               
                </tbody>
              </table>
            </div> <!-- /.box-body -->            
          </div>
        </div>
    </div>
</section>