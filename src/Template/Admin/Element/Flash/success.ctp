<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message success alert alert-success alert-dismissible" onclick="this.classList.add('hidden')">
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
<h4>
<i class="icon fa fa-check"></i>
Alert!
</h4>
<?= $message ?></div>
