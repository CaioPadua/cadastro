
<?php include_once './header.inc.php' ?>

<?php include_once './menu.inc.php' ?>

<?php include_once './footer.inc.php' ?>

<div class="row container">
	<div class="col s12">
		<h5 class="light">Consultas</h5>

		<table class="striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Email</th>
					<th>Telefone</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					include_once './bancodedados/read.php'
				?>				



			</tbody>
		</table>
	</div>
</div>