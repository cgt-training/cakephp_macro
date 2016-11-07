  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <?php
              if(empty($this->request->Session()->read('Auth.User.image'))):
              echo $this->Html->image('user2-160x160.jpg', ['alt' => 'User Image','class'=>'img-circle']);
              else :
              echo $this->Html->image(__($this->request->Session()->read('Auth.User.image')), ['alt' => 'User Image','class'=>'img-circle']); 
              endif;
        ?>
        </div>
        <div class="pull-left info">
          <p><?= h($this->request->Session()->read('Auth.User.username'));?></p>         
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>        
        <li>
           <?=  $this->Html->link(__('<i class="fa fa-dashboard"></i> <span>Dashboard</span>'), ['controller' => 'Dashboards', 'action' => 'display'],['escape'=>false]); ?>
        </li>
        <li>
           <?=  $this->Html->link(__('<i class="fa fa-th"></i> <span>Blog Posts</span>'), ['controller' => 'BlogPosts', 'action' => 'index'],['escape'=>false]); ?>
        </li> 
        <li>
           <?=  $this->Html->link(__('<i class="fa fa-shopping-cart"></i> <span>Product</span>'), ['controller' => 'Products', 'action' => 'index'],['escape'=>false]); ?>
        </li> 
        <li>
           <?=  $this->Html->link(__('<i class="fa fa-users"></i> <span>Users</span>'), ['controller' => 'Users', 'action' => 'index'],['escape'=>false]); ?>
        </li> 
         <li>
           <?=  $this->Html->link(__('<i class="fa fa-sign-out"></i> <span>Log Out</span>'), ['controller' => 'Users', 'action' => 'logout'],['confirm'=>'Sure for logout !!!','escape'=>false]); ?>
        </li> 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>