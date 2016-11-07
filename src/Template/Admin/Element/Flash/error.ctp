<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error alert alert-danger alert-dismissible" onclick="this.classList.add('hidden');">
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
<h4>
<i class="icon fa fa-ban"></i>
Alert!
</h4>
<?= $message ?></div>
