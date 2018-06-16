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
	<div class='col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1'>
	    <h1><?= __('Bem-vindo, é um prazer conhece-lo.') ?></h1>
	    <p>
	    	<a href='#sobre' class='btn btn-warning btn-lg'>
	    		<?= __('Venha nos conhecer') ?>
	    	</a>
	    </p>
	</div>
</div>
<div id='conteudo'>
	<div class='container-fluid'>
		<div id='sobre'>
			<div class='col-sm-12'>
				<div class='col-sm-6 col-sm-offset-3 text-center'>
				    <h1>Quem Somos</h1>
				    <p>
				    	Fundada em 2018, a Multi+ é uma empresa familiar que atua no mercado de
				    	Marketing Multinível e que tem como objetivo, proporcionar mudança de vida 
				    	para pessoas que querem uma renda extra ou empreendedores que desejam ter 
				    	seu próprio negócio. 

				    </p>
				</div>
			</div>
		</div>
		<div id='premios' class='col-sm-12'>
			<!-- <style type="text/css">
				.premio {
					border-right: solid 6px #ddd;
				}
				.premio .imagem {
					position: relative;
					top: 0;
					padding: 7em;
					z-index: 100;
					top: -100%;
					left: 53%;
					list-style: none;
				}
				.premio .imagem div {
					background-color: white;
					display: inline-block;
					bottom: 10px;
					padding: 80px;
					border-radius: 50%;
					border: solid 6px #ddd;
				}
			</style>
			<div class='col-sm-12'>
				<div class='col-sm-12'>
					<div class='premio col-sm-6'> 
						<div class='imagem'>
							<div>abc</div>
						</div>
					</div>
				</div>
				<div class='col-sm-12'>
					<div class='premio col-sm-6'> 
						<div class='imagem'>
							<div>abc</div>
						</div>
					</div>
				</div>
			</div> -->

			<div class='col-sm-4'>
				<div class='col-md-10 col-md-offset-1'>
					<div class='titulo'>
						<h3>Prêmio ABIHPEC, melhor criação perfumística 2015</h3>
					</div>
					<div class='imagem'> 
						<?= $this->Html->image('home/empire.png', ['class' => 'img-responsive']) ?>
					</div>
					<div class='descricao'>
						<p>
							O perfume Empire, foi eleito a melhor criação perfumística de 2015, 
					    	e tornou-se referência em qualidade.
						</p>
					</div>
				</div>
			</div>
			<div class='col-sm-4'>
				<div class='col-md-10 col-md-offset-1'>
					<div class='titulo'>
						<h3>Prêmio ABIHPEC, melhor criação perfumística 2015</h3>
					</div>
					<div class='imagem'> 
						<?= $this->Html->image('home/grace.png', ['class' => 'img-responsive']) ?>
					</div>
					<div class='descricao'>
						<p>
							O perfume Empire, foi eleito a melhor criação perfumística de 2015, 
					    	e tornou-se referência em qualidade.
						</p>
					</div>
				</div>
			</div>
			<div class='col-sm-4'>
				<div class='col-md-10 col-md-offset-1'>
					<div class='titulo'>
						<h3>Prêmio ABIHPEC, melhor criação perfumística 2015</h3>
					</div>
					<div class='imagem'> 
						<?= $this->Html->image('home/feeling.png', ['class' => 'img-responsive']) ?>
					</div>
					<div class='descricao'>
						<p>
							O perfume Empire, foi eleito a melhor criação perfumística de 2015, 
					    	e tornou-se referência em qualidade.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div id='contatos'>
		    <h1>Quem Somos</h1>
		    <p>Try to scroll this page and look at the navigation bar while scrolling!</p>
		</div>
	</div>
	<footer class='text-center'>
		<div id='social' class='row'>
			<div class='col-sm-3'>
				<div class='icone'>
					<a href='#' target='_blank'>
						<i class='fab fa-facebook'></i>
						<p>Facebook</p>
					</a>
				</div>
			</div>
			<div class='col-sm-3'>
				<div class='icone'>
					<a href='#' target='_blank'>
						<i class='fab fa-instagram'></i>
						<p>Instagram</p>
					</a>
				</div>
			</div>
			<div class='col-sm-3'>
				<div class='icone'>
					<i class='fab fa-whatsapp'></i>
					<p>+55 (81) 98888-8888</p>
				</div>
			</div>
			<div class='col-sm-3'>
				<div class='icone'>
					<i class='far fa-envelope'></i>
					<p>example@gmail.com</p>
				</div>
			</div>
		</div>
		<div id='copy'>
			<p>Copyright <i class='far fa-copyright'></i> Multi+ 2018</p>
		</div>
	</footer>
</div>