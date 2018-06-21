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
<div id='banner'>
	<div class='col-sm-8 col-sm-offset-2'>
	    <h1><strong><?= __('Bem-vindo, é um prazer conhecê-lo.') ?></strong></h1>
	    <p>
	    	<?= $this->Html->link(__('Venha nos conhecer'), '#sobre', [
	    		'class' => 'btn btn-warning btn-lg'
	    	]) ?>
	    </p>
	</div>
</div>
<div id='conteudo' class='container-fluid'>
	<div id='sobre' class='col-sm-12'>
		<div class='col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 text-center'>
		    <h1><strong><?= __('Quem Somos') ?></strong></h1>
		    <p>
		    	<?= __('Fundada em 2018, a Multi+ é uma empresa familiar que atua no mercado de Marketing Multinível e que tem como objetivo, proporcionar mudança de vida para pessoas que querem uma renda extra ou empreendedores que desejam ter seu próprio negócio.') ?>
		    </p>
		</div>
	</div>
	<div id='premios' class='col-sm-12'>
		<h1 class='text-center'>
			<strong><?= __('Prêmios da Hinode') ?></strong>
		</h1>
		<div class='esquerda col-xs-12'>
			<div class='linha col-md-4 col-sm-3'>
				<div class='imagem'>
					<?= $this->Html->image('home/empire.png', ['class' => 'img-responsive']) ?>
				</div>
			</div>
			<div class='descricao col-md-6 col-sm-9'>
				<div class='col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3'>
					<h2><strong><?= __('EMPIRE') ?></strong></h2>
					<h3><?= __('Prêmio ABIHPEC, melhor criação perfumística 2015') ?></h3>
					<p>
						<?= __('O perfume Empire, foi eleito a melhor criação perfumística de 2015, e tornou-se referência em qualidade.') ?>
					</p>
				</div>
			</div>
		</div>
		<div class='esquerda col-xs-12'>
			<div class='linha col-md-4 col-sm-3'>
				<div class='imagem'>
					<?= $this->Html->image('home/grace.png', ['class' => 'img-responsive']) ?>
				</div>
			</div>
			<div class='descricao col-md-6 col-sm-9'>
				<div class='col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3'>
					<h2><strong><?= __('GRACE MIDNIGHT') ?></strong></h2>
					<h3><?= __('Melhor criação perfumística Latino-Americana feminina') ?></h3>
					<p>
						<?= __('Desta vez a') ?> 
						<?= $this->Html->link(
							'<strong>' . __('Hinode') . '</strong>',
							'https://hinode.com.br',
							['target' => '_blank', 'escape' => false]
						) ?>
						<?= __('ganhou no Prêmio Atualidade Cosmética 2016 com o perfume Grace Midnight.') ?>
					</p>
				</div>
			</div>
		</div>
		<div class='esquerda col-xs-12'>
			<div class='linha ultimo col-md-4 col-sm-3'>
				<div class='imagem'>
					<?= $this->Html->image('home/feelin.png', ['class' => 'img-responsive']) ?>
				</div>
			</div>
			<div class='descricao col-md-6 col-sm-9'>
				<div class='col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3'>
					<h2><strong><?= __('FEELIN FOR HER') ?></strong></h2>
					<h3><?= __('Prêmio ABRE, de melhor embalagem brasileira') ?></h3>
					<p>
						<?= __('Embalagem desenvolvida pela') ?>
						<?= $this->Html->link(
							'<strong>' . __('Wheaton Brasil') . '</strong>',
							'http://www.wheatonbrasil.com.br/',
							['target' => '_blank', 'escape' => false]
						) ?>
						<?= __('da fragrância Feelin leva categoria Ouro em embalagem e Bronze em design estrutural.') ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id='contatos' class='col-sm-12'>
	    <h1 class='text-center'><strong><?= __('Contate-nos') ?></strong></h1>
	    <?= $this->Form->create('', [
	    	'class' => 'col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2'
	    ]) ?>
    		<div class='row'>
    			<div class='col-sm-6'>
    				<div class='form-group'>
			    		<?= $this->Form->control('Nome', [
			    			'placeholder' => 'Digite seu nome',
			    			'class' => 'form-control',
			    			'required' => true,
			    			'label' => false
			    		]) ?>
			    	</div>
    			</div>
    			<div class='col-sm-6'>
    				<div class='form-group'>
			    		<?= $this->Form->control('Email', [
			    			'placeholder' => 'Digite seu e-mail',
			    			'class' => 'form-control',
			    			'required' => true,
			    			'label' => false
			    		]) ?>
			    	</div>
    			</div>
    		</div>
    		<div class='form-group'>
	    		<?= $this->Form->textarea('Mensagem', [
	    			'placeholder' => 'Digite sua mensagem',
	    			'class' => 'form-control',
	    			'required' => true,
	    			'label' => false
	    		]) ?>
	    	</div>
    		<div class='form-group text-right'>
	    		<?= $this->Form->button(__('Enviar') . ' <i class="fas fa-paper-plane"></i>', [
	    			'class' => 'btn btn-success',
	    			'scape' => false
	    		]) ?>
	    	</div>
	    <?= $this->Form->end() ?>
	</div>
</div>