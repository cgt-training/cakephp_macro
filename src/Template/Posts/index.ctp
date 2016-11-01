<p class="text-right" style="font-size: 22px;"><?= $this->Html->link('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>',
 ['controller'=>'Posts','action' => 'add'],['escape'=>false,'class'=>'AjaxLink1']) ?><p>
<table class="table">
<tr class="active">
<th>#</th>
<th>Title</th>
<th>Description</th>
<th>Created</th>
<th></th>
	
</tr>
<?php
$Sno=1;
foreach($Posts as $row):
?>
<tr>
	<td><?=$Sno++;?></td>
	<td><?=$row->title;?></td>
	<td><?=$row->description;?></td>
	<td><?=$this->Time->format($row->created, 'dd-MM-YYYY HH:mm:ss');?></td>
	<td><?= $this->Html->link('<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', ['action' => 'edit', $row->id],['escape'=>false,'class'=>'AjaxLink1']) ?>&nbsp;&nbsp;
	<?= $this->Form->postLink(
    '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>',
    ['action' => 'delete', $row->id],
    ['confirm' => 'Are you sure?','escape'=>false])
?></td>
</tr>
<? endforeach;?>
</table>