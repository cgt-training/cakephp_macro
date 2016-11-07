<!DOCTYPE html>
<html >
  <head>
     <?= $this->element('head') ?></head>
  <body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Macro</b>Tracker</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg text-center"><?= $this->Flash->render() ?></p>   
    <?= $this->Form->create() ?>
      <div class="form-group has-feedback">
         <?= $this->Form->input('username',['class'=>'form-control','placeholder'=>'User Name','label' => false]); ?>      
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">        
        <?= $this->Form->input('password',['class'=>'form-control','placeholder'=>'Password','label' => false]); ?>   
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">       
            <?=  $this->Form->input('remember_me', ['type' => 'checkbox','value'=>'Y','hiddenField' => false,'label'=>' Remember Me']); ?>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>
 -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

</body>
</html>
