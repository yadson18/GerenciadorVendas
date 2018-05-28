<div id='sistema-home'>
	<div class='col-md-3 col-sm-6'>
		<div class='card'>
			<a href='/cliente/index' class='cliente'>
				<div class='card-header text-center'>
					<i class='fas fa-users fa-2x'></i>
					<h3 class='card-title'>Cliente</h3>
				</div>
				<div class='card-body text-center'>
					<h4 class='body-title'>Cadastrados</h4>
					<div class='body-content'>
						<p class='quantity'><?= $cliente->cadastradosHoje ?></p>
						<p class='description'>Hoje</p>
					</div>
					<div class='body-content'>
						<p class='quantity'><?= $cliente->cadastradosTotal ?></p>
						<p class='description'>Total</p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class='col-md-3 col-sm-6'>
		<div class='card'>
			<a href='/produto/index' class='produto'>
				<div class='card-header text-center'>
					<i class='fas fa-dolly-flatbed fa-2x'></i>
					<h3 class='card-title'>Produto</h3>
				</div>
				<div class='card-body text-center'>
					<h4 class='body-title'>Cadastrados</h4>
					<div class='body-content'>
						<p class='quantity'><?= $produto->cadastradosHoje ?></p>
						<p class='description'>Hoje</p>
					</div>
					<div class='body-content'>
						<p class='quantity'><?= $produto->cadastradosTotal ?></p>
						<p class='description'>Total</p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class='col-md-3 col-sm-6'>
		<div class='card'>
			<a href='/colaborador/index' class='colaborador'>
				<div class='card-header text-center'>
					<i class='fas fa-user-tie fa-2x'></i>
					<h3 class='card-title'>Colaborador</h3>
				</div>
				<div class='card-body text-center'>
					<h4 class='body-title'>Cadastrados</h4>
					<div class='body-content'>
						<p class='quantity'><?= $colaborador->cadastradosHoje ?></p>
						<p class='description'>Hoje</p>
					</div>
					<div class='body-content'>
						<p class='quantity'><?= $colaborador->cadastradosTotal ?></p>
						<p class='description'>Total</p>
					</div>
				</div>
			</a>
		</div>
	</div>
	<div class='col-md-3 col-sm-6'>
		<div class='card'>
			<a href='/pedido/index' class='pedido'>
				<div class='card-header text-center'>
					<i class='fas fa-shopping-cart fa-2x'></i>
					<h3 class='card-title'>Pedido</h3>
				</div>
				<div class='card-body text-center'>
					<h4 class='body-title'>Cadastrados</h4>
					<div class='body-content'>
						<p class='quantity'><?= $pedido->cadastradosHoje ?></p>
						<p class='description'>Hoje</p>
					</div>
					<div class='body-content'>
						<p class='quantity'><?= $pedido->cadastradosTotal ?></p>
						<p class='description'>Total</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>