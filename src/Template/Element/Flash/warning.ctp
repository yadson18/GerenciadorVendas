<?php
	if (!isset($params['escape']) || $params['escape'] !== false) {
	    $message = h($message);
	}
?>
<div class='alert alert-warning alert-dismissible' role='alert'>
  	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  		<span aria-hidden='true'>&times;</span>
  	</button>
  	<div class='message-body text-center'>
  		<i class='fas fa-exclamation-triangle'></i> <?= $message ?>
  	</div>
</div>