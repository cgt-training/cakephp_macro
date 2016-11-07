<section class="content-header">
  <p class="login-box-msg text-center"><?= $this->Flash->render() ?></p>  
      <h1><?= __('Users') ?> </h1>
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
               $this->Form->button('New Users', ['type' => 'button','class'=>'btn btn-block btn-primary']),
               ["action"=>"add"],
               ['escape' => false]
            );
             ?>
              </h3>
            </div>
            <div class="box-body">
              <table id="TableData" class="table table-bordered table-hover">
                <thead>
                <tr class="active">
                    <th class="text-center"><?= __('Sno') ?></th>
                    <th class="text-center"><?= __('username') ?></th>
                    <!--class="text-center"ol"><?= $this->Paginator->sort('password') ?></th-->
                    <th class="text-center"><?= __('role') ?></th>
                    <th class="text-center"><?= __('image') ?></th>
                    <!--class="text-center"ol"><?= $this->Paginator->sort('created') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('modified') ?></th-->
                    <th class="text-center" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
       
            <?php 
             $S_no=1;   
            foreach ($users as $user): ?>
            <tr>
                <td width="5%"><?= $S_no++;?></td>
                <td><?= h($user->username) ?></td>               
                <td><?= h($user->role) ?></td> 
                <td class="text-center"><?
                if(!empty($user->image)):
                echo  $this->Html->image(h($user->image), ['alt' => 'CakePHP','class'=>'img-responsive center-block','width'=>'60px']);
                endif; ?>
               </td>            
                <td class="actions text-center">                   
                <?=  $this->Html->link('<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>', ['action' => 'View', $user->id],['escape'=>false,'title'=>'View','class'=>'AjaxLink']) ?>&nbsp;&nbsp;                   
                   <?php
                     if($this->request->Session()->read('Auth.User')) 
                    {
                  echo   $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $user->id],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']);
                    }
                    else
                    {
                 echo   $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['controller'=>'Users','action' => 'login'],['escape'=>false,'title'=>'Edit','class'=>'AjaxLink']);
                    } 
                    ?>&nbsp;&nbsp;
                   <?= $this->Form->postLink(
                    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
                    ['action' => 'delete', $user->id],
                    ['confirm' => 'Are you sure?','escape'=>false,'title'=>'Delete','class'=>'AjaxLink']);
                   ?>
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