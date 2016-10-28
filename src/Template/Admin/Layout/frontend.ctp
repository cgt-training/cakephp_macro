<!DOCTYPE html>
<html lang="en">
  <head>
 <?= $this->element('head') ?>

  </head>
  <body>
         <?= $this->element('header') ?>
        <div class="container MainDiv">       
            <div class="row">
                <div class="col-sm-8"  >
                 <h3 class="text-center"><?= $this->Flash->render() ?></h3>
                 <div  id="MainDiv">
                   <?= $this->fetch('content') ?>    
                </div>               
                </div>
                <div class="col-sm-4" id="rightDiv"> 
                  <?= $this->element('leftbottom') ;?>  
                </div>
            </div>  
        </div> 
     <footer class="container-fluid text-center">
   <div class="row">
     <div class="text-center">Follow Us &nbsp;&nbsp;
     <i style="font-size:24px" class="fa">&#xf081;</i>&nbsp;&nbsp;
     <i style="font-size:24px" class="fa">&#xf082;</i>&nbsp;&nbsp;     
     <i style="font-size:24px" class="fa">&#xf0d4;</i><br>
     Powered By CG Technosoft</div>
  </div>
</footer>
  </body>
</html>