<div id='sistema-home'>
	<div class='col-md-3 col-sm-6'>
		<div class='card-statistic'>
			<a href='/cliente/index' class='cliente'>
				<div class='card-header text-center'>
					<i class='fas fa-users fa-2x'></i>
					<h3 class='card-title'><?= __('Cliente') ?></h3>
				</div>
				<div class='card-body text-center'>
					<h4 class='body-title'><?= __('Cadastrados') ?></h4>
					<div class='body-content'>
						<p class='quantity'>
							<?= $this->Number->format($cliente->cadastradosHoje) ?>
						</p>
						<p class='description'><?= __('Hoje') ?></p>
					</div>
					<div class='body-content'>
						<p class='quantity'>
							<?= $this->Number->format($cliente->cadastradosTotal) ?>
						</p>
						<p class='description'><?= __('Total') ?></p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class='col-md-3 col-sm-6'>
		<div class='card-statistic'>
			<a href='/produto/index' class='produto'>
				<div class='card-header text-center'>
					<i class='fas fa-dolly-flatbed fa-2x'></i>
					<h3 class='card-title'><?= __('Produto') ?></h3>
				</div>
				<div class='card-body text-center'>
					<h4 class='body-title'><?= __('Cadastrados') ?></h4>
					<div class='body-content'>
						<p class='quantity'>
							<?= $this->Number->format($produto->cadastradosHoje) ?>
						</p>
						<p class='description'><?= __('Hoje') ?></p>
					</div>
					<div class='body-content'>
						<p class='quantity'>
							<?= $this->Number->format($produto->cadastradosTotal) ?>
						</p>
						<p class='description'><?= __('Total') ?></p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class='col-md-3 col-sm-6'>
		<div class='card-statistic'>
			<a href='/colaborador/index' class='colaborador'>
				<div class='card-header text-center'>
					<i class='fas fa-user-tie fa-2x'></i>
					<h3 class='card-title'><?= __('Colaborador') ?></h3>
				</div>
				<div class='card-body text-center'>
					<h4 class='body-title'><?= __('Cadastrados') ?></h4>
					<div class='body-content'>
						<p class='quantity'>
							<?= $this->Number->format($colaborador->cadastradosHoje) ?>
						</p>
						<p class='description'><?= __('Hoje') ?></p>
					</div>
					<div class='body-content'>
						<p class='quantity'>
							<?= $this->Number->format($colaborador->cadastradosTotal) ?>
						</p>
						<p class='description'><?= __('Total') ?></p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class='col-md-3 col-sm-6'>
		<div class='card-statistic'>
			<a href='/pedido/index' class='pedido'>
				<div class='card-header text-center'>
					<i class='fas fa-shopping-cart fa-2x'></i>
					<h3 class='card-title'><?= __('Pedido') ?></h3>
				</div>
				<div class='card-body text-center'>
					<h4 class='body-title'><?= __('Cadastrados') ?></h4>
					<div class='body-content'>
						<p class='quantity'>
							<?= $this->Number->format($pedido->cadastradosHoje) ?>
						</p>
						<p class='description'><?= __('Hoje') ?></p>
					</div>
					<div class='body-content'>
						<p class='quantity'>
							<?= $this->Number->format($pedido->cadastradosTotal) ?>
						</p>
						<p class='description'><?= __('Total') ?></p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>