<nav class="navbar navbar-default" style="margin-bottom: 0">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?= $this->Html->link('MACRO<strong><span style="color: #FF0000">TRACKER</span></strong>', ['controller'=>'Posts','action' => 'index'],['escape'=>false,'style'=>'font-size: 20px;','class'=>'navbar-brand navbar-brand-right']) ?>
      <a class="" href="#" style=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2"  >
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><?= $this->Html->link('Blog', ['controller'=>'Posts','action' => 'index'],['class'=>'AjaxLink TopLink']) ?></li>
        <li><?= $this->Html->link('Product', ['controller'=>'Products','action' => 'index'],['class'=>'AjaxLink TopLink']) ?></li>
        <li><?= $this->Html->link('Comment', ['controller'=>'Comment','action' => 'index'],['class'=>'AjaxLink TopLink']) ?></li>
        <li><?= $this->Html->link('Enquiry', ['controller'=>'Enquiry','action' => 'index'],['class'=>'AjaxLink TopLink']) ?></li>
        <li><?= $this->Html->link('User', ['controller'=>'Users','action' => 'index'],['class'=>'AjaxLink TopLink']) ?></li>
        <li>
        <?php
       // pr($this->request->Session()->read('Auth.User'));
            if($this->request->Session()->read('Auth.User')) {
               // user is logged in, show logout..user menu etc
               echo $this->Html->link(__('Log Out'), ['controller' => 'Users', 'action' => 'logout']); 
            } else {
               // the user is not logged in
               echo $this->Html->link(__('Log in'), ['controller' => 'Users', 'action' => 'login']); 
            }
        ?>
        </li>
        
      </ul>
  
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
<div class="container" style="padding: 0">    
 <?= $this->Html->image('Layer_16.jpg', array('alt' => 'CakePHP','class'=>'img-responsive','style'=>'width:100%')); ?> 
</div>
 <script type="text/javascript">
       $(function () {
        $(".TopLink").click(function(){
        $(".TopLink").removeClass("active");  
        $(".TopLink").parent('li').removeClass("active");  
         $(this).addClass("active");
         $(this).parent('li').addClass("active");

        });
        
       });

    </script>
