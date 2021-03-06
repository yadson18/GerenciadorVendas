<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */ 
?>
<footer class='text-center'>
	<div id='social' class='row'>
		<div class='col-md-3 col-sm-6'>
			<div class='icone'>
				<?= $this->Html->link(
					'<i class="fab fa-facebook"></i> <p>Facebook</p>', 
					'https://www.facebook.com/Multi-627934127554189/', 
					['escape' => false, 'target' => '_blank']
				) ?>
			</div>
		</div>
		<div class='col-md-3 col-sm-6'>
			<div class='icone'>
				<?= $this->Html->link(
					'<i class="fab fa-instagram"></i> <p>Instagram</p>', 
					'https://www.instagram.com/multimais_/', 
					['escape' => false, 'target' => '_blank']
				) ?>
			</div>
		</div>
		<div class='col-md-3 col-sm-6'>
			<div class='icone'>
				<i class='fab fa-whatsapp'></i>
				<p>+55 (81) 98888-8888</p>
			</div>
		</div>
		<div class='col-md-3 col-sm-6'>
			<div class='icone'>
				<i class='far fa-envelope'></i>
				<p>multimaiscosmeticos@gmail.com</p>
			</div>
		</div>
	</div>
	<div id='copy'>
		<p>Copyright <i class='far fa-copyright'></i> Multi+ 2018</p>
	</div>
</footer>