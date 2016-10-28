<?php
    echo $this->Html->charset();
    echo $this->Html->css('bootstrap.min.css');
    echo $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css');
    echo $this->Html->css(['jquery-ui.css']);
    echo $this->Html->script('jquery.js');
    echo $this->Html->script('jquery-ui.js');
    echo $this->Html->script('bootstrap.min.js');

?>
<title>Bootstrap Layout</title>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <style type="text/css">
     .datediv
     {
      border-left: none;
      border-right: none;
     }
     body {
        font-family: Arial, Helvetica, sans-serif;
     }
     table {
        font-size: 1em;
     }
      .ui-draggable, .ui-droppable {
        background-position: top;
      }
      .MainDiv
      {
        min-height: 550px;
      }
      footer.container-fluid
      {
        background-color: #333;
        padding: 5px;
        color: #FFF;
        width: 100%;
        position: fixed; bottom: 0px; 
      }
    </style>
    <script type="text/javascript">
    $(document).ready(function() {
     // alert('hello');
    $('.AjaxLink').click(function() {
        //alert(this.href);//return false;
       // UrlToSend = this.href;
       /* $.post(UrlToSend,
        function(result) {
            alert(result);
            $('body').html(result);
        });*/
        $.ajax({
        url: this.href,
        type: 'ajax',
        success: function(data) {
           // alert(data);
            $('#MainDiv').html(data);
        }
        });  
            return false;
        });
        //.change();
    });
      </script>
      <script type="text/javascript">
  $(function () {

   

$("#dialog").dialog({
    autoOpen: false,
    show: {
        effect: "blind",
        duration: 1000
    },
    hide: {
        effect: "explode",
        duration: 1000
    },
    position: {   my: "center",
  at: "center",
  of: "#rightDiv"}
});
$(".datepickicon").click(function () {
    $("#dialog").dialog("open");
   var seldatepick = "#"+$(this).attr('datepick');
   seldateshow = "."+$(this).attr('dateshow');  
   //alert(seldatepick+"="+seldateshow);
    $("#datepicke").datepicker({
    dateFormat: "MM, yy", 
    autoclose: true,
    onSelect: function(){
    var selected = $(this).val();
    //alert(seldateshow+selected);
    $(seldateshow).html(selected);        //alert($(this));
    
    $("#dialog").dialog("close");

    }
});
    return false;
 });
 });
</script>