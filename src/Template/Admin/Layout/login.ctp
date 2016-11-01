<!DOCTYPE html>
<html >
  <head>
     <?= $this->element('head') ?></head>
  <body>
  
<?= $this->Form->create() ?>
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">

  <div class="modal-dialog">

  <div class="modal-content">

      <div class="modal-header">    
          <h4 class="text-center"><?= $this->Flash->render() ?></h4>      
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
            <div class="form-group">
             <?= $this->Form->input('username',['class'=>'form-control input-lg']); ?>
            </div>
            <div class="form-group">             
            <?= $this->Form->input('password',['class'=>'form-control input-lg']); ?>
            </div>
            <div class="form-group">
              <? echo $this->Form->button(__('Login'),['class'=>'btn btn-primary btn-lg btn-block']);?>  
            </div>
          </form>
      </div>
      <div class="modal-footer" style="border: none;">
          <div class="col-md-12">          
      </div>  
      </div>
  </div>
  </div>
</div>
 <?= $this->Form->end() ?>
  </body>
</html>
