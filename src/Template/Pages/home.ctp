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
	    	<a href='#sobre' class='btn btn-warning btn-lg'>
	    		<?= __('Venha nos conhecer') ?>
	    	</a>
	    </p>
	</div>
</div>
<div id='conteudo' class='container-fluid'>
	<div id='sobre' class='col-sm-12'>
		<div class='col-sm-6 col-sm-offset-3 text-center'>
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
			<div class='linha col-xs-6'>
				<div class='imagem'>
					<?= $this->Html->image('home/empire.png', ['class' => 'img-responsive']) ?>
				</div>
			</div>
			<div class='descricao col-sm-6'>
				<div class='col-sm-9 col-sm-offset-3'>
					<h2><strong><?= __('EMPIRE') ?></strong></h2>
					<h3><?= __('Prêmio ABIHPEC, melhor criação perfumística 2015') ?></h3>
					<p>
						<?= __('O perfume Empire, foi eleito a melhor criação perfumística de 2015, e tornou-se referência em qualidade.') ?>
					</p>
				</div>
			</div>
		</div>
		<div class='direita col-xs-12'>
			<div class='descricao col-sm-6'>
				<div class='col-sm-9'>
					<h2><strong><?= __('GRACE MIDNIGHT') ?></strong></h2>
					<h3><?= __('Melhor criação perfumística Latino-Americana feminina') ?></h3>
					<p>
						<?= __('Desta vez a') ?> 
						<a href='https://hinode.com.br' target='_blank'>
							<strong>Hinode</strong>
						</a> 
						<?= __('ganhou no Prêmio Atualidade Cosmética 2016 com o perfume Grace Midnight.') ?>
					</p>
				</div>
			</div>
			<div class='linha col-xs-6'>
				<div class='imagem'>
					<?= $this->Html->image('home/grace.png', ['class' => 'img-responsive']) ?>
				</div>
			</div>
		</div>
		<div class='esquerda col-xs-12'>
			<div class='linha ultimo col-xs-6'>
				<div class='imagem'>
					<?= $this->Html->image('home/feelin.png', ['class' => 'img-responsive']) ?>
				</div>
			</div>
			<div class='descricao col-sm-6'>
				<div class='col-sm-9 col-sm-offset-3'>
					<h2><strong><?= __('FEELIN FOR HER') ?></strong></h2>
					<h3><?= __('Prêmio ABRE, de melhor embalagem brasileira') ?></h3>
					<p>
						<?= __('Embalagem desenvolvida pela') ?>
						<a href='http://www.wheatonbrasil.com.br/' target='_blank'>
							<strong>Wheaton Brasil</strong>
						</a>
						<?= __('da fragrância Feelin leva categoria Ouro em embalagem e Bronze em design estrutural.') ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id='contatos' class='col-sm-12 text-center'>
	    <h1><strong><?= __('Contatos') ?></strong></h1>
	</div>
</div>