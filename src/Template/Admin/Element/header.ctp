  <header class="main-header">
    <!-- Logo -->
    <?php
   echo $this->Html->link('<span class="logo-mini"><b>T</b>rack</span><span class="logo-lg"><b>Macro</b>Tracker</span>',
      ['controller'=>'dashboards','action'=>'display'],
      ['escape'=>false,'class'=>'logo'])
    ?>   
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
       <?php
      // pr($this->request->Session()->read());
       $username = $this->request->Session()->read('Auth.User.username');
       $created = $this->request->Session()->read('Auth.User.created');
       ?>  
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav"> 
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php
              if(empty($this->request->Session()->read('Auth.User.image'))):
              echo $this->Html->image('user2-160x160.jpg', ['alt' => 'User Image','class'=>'user-image']);
              else :
              echo $this->Html->image(__($this->request->Session()->read('Auth.User.image')), ['alt' => 'User Image','class'=>'user-image','height'=>'160']); 
              endif;
            ?>
              <span class="hidden-xs"><?php echo h($username); ?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
             <?php
              if(empty($this->request->Session()->read('Auth.User.image'))):
              echo $this->Html->image('user2-160x160.jpg', ['alt' => 'User Image','class'=>'img-circle']);
              else :
              echo $this->Html->image(__($this->request->Session()->read('Auth.User.image')), ['alt' => 'User Image','class'=>'img-circle']); 
              endif;
            ?>
                <p>
                <?php echo h($username); ?>             
                  <small>Member since <?=$this->Time->format($created, 'dd-MM-YYYY');?></small>
                </p>
              </li>              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <?=  $this->Html->link(__('Profile'), '#',['class'=>'btn btn-default btn-flat','href'=>'#']); ?>
                </div>
                <div class="pull-right">
                 <?=  $this->Html->link(__('Sign Out'), ['controller' => 'Users', 'action' => 'logout'],['class'=>'btn btn-default btn-flat']); ?>               
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button 
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>