<div id='sistema-home'>
	<div class='card col-md-3'>
		<div class='card-header'>
			<h3>Cliente</h3>
		</div>
		<div class='card-body'>
			<p>Cadastrados Hoje: <?= $cliente->cadastradosHoje ?></p>
			<p>Cadastrados Total: <?= $cliente->cadastradosTotal ?></p>
		</div>
	</div>
	<div class='card col-md-3'>
		<div class='card-header'>
			<h3>Produto</h3>
		</div>
		<div class='card-body'>
			<p>Cadastrados Hoje: <?= $produto->cadastradosHoje ?></p>
			<p>Cadastrados Total: <?= $produto->cadastradosTotal ?></p>
		</div>
	</div>
	<div class='card col-md-3'>
		<div class='card-header'>
			<h3>Colaborador</h3>
		</div>
		<div class='card-body'>
			<p>Cadastrados Hoje: <?= $colaborador->cadastradosHoje ?></p>
			<p>Cadastrados Total: <?= $colaborador->cadastradosTotal ?></p>
		</div>
	</div>
	<div class='card col-md-3'>
		<div class='card-header'>
			<h3>Pedido</h3>
		</div>
		<div class='card-body'>
			<p>Cadastrados Hoje: <?= $pedido->cadastradosHoje ?></p>
			<p>Cadastrados Total: <?= $pedido->cadastradosTotal ?></p>
		</div>
	</div>
</div>