<?php
use Cake\I18n\Date;
?>
     <div class="box-header">
              <i class="ion ion-clipboard"></i>
              <h3 class="box-title"><?=__("Blog Post list");?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
              <ul class="todo-list">
                <?php
                if(isset($blogPosts)):
                  foreach($blogPosts as $PostArr):
                    ?>
                        <li>
                  <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <!-- checkbox -->
                  <input type="checkbox" value="">
                  <!-- todo text -->
                  <span class="text"><?=$PostArr->name;?></span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 
                  <?php
                 $datetime1 = new Date($PostArr->created);
                 $date = new Date();
                 $DateDiff =  date_diff($datetime1,$date);
                echo $DayDiff =  $DateDiff->format('%d days');?> ago</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
                    <?php
                  endforeach;
                endif;
                ?>
                <li>                 
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <?= 
               $this->Html->link(
               $this->Form->button('<i class="fa fa-plus"></i> View All', ['type' => 'button','class'=>'btn btn-default pull-right']),
               ["controller"=>'BlogPosts','action'=>'index'],
               ['escape' => false]
            );
             ?>
            </div>