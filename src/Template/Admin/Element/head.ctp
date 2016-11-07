<?php
    echo $this->Html->charset();
    echo $this->Html->css('bootstrap.min.css');
    echo $this->Html->css('font-awesome.min.css');
    echo $this->Html->css('ionicons.min.css');
    echo $this->Html->css('AdminLTE.min.css');
    echo $this->Html->css('blue.css');
    echo $this->Html->script('jquery-2.2.3.min.js');
    echo $this->Html->script('jquery-ui.js');
    echo $this->Html->script('bootstrap.min.js');
    echo $this->Html->script('icheck.min.js');
?>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Macro Tracker AdminLTE 2 | Log in</title>  

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
  .error
  {
    color: #F00;
    text-align: center;
  }
  .checkbox label, .radio label {
    padding-left: 0px;
  }
  .checkbox, .radio {    
    margin-bottom: 2px;
    margin-top: 2px;
  }
</style>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>