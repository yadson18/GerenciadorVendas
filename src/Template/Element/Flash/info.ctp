<?php
	if (!isset($params['escape']) || $params['escape'] !== false) {
	    $message = h($message);
	}
?>
<div class='alert alert-info alert-dismissible' role='alert'>
  	<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  		<span aria-hidden='true'>&times;</span>
  	</button>
  	<div class='message-body text-center'>
  		<i class='fas fa-info-circle'></i> <?= $message ?>
  	</div>
</div>