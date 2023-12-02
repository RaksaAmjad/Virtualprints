<?php
if ($keranjang['keranjang_total'] == '0'):
	?>
	<div class="container">
		<div class="text-center"><i class="fa fa-cart-arrow-down empty-cart-icon"></i>
			<p class="lead">Keranjang Kamu Kosong</p><a class="btn btn-primary btn-lg" href="<?= base_url() ?>">Pesan
				Sekarang <i class="fa fa-long-arrow-right"></i></a>
		</div>
	</div>
<?php
elseif ($keranjang == !null):
	?>
	<div class="container">
		<header class="page-header">
			<h1 class="page-title">Keranjang</h1>
		</header>
		<div class="row">
			<div class="col-md-10">
				<?php
				if ($stiker != null):
					?>
					<h4>Stiker</h4>
					<table class="table table-bordered table-shopping-cart">
						<thead>
						<tr>
							<th>Panjang</th>
							<th>Lebar</th>
							<th>Bahan</th>
							<th>Jumlah</th>
							<th>Catatan</th>
							<th>Total</th>
							<th>Hapus</th>
						</tr>
						</thead>
						<tbody>
						<?php
						foreach ($stiker as $key => $value):
							?>
							<tr>
								<td><?= $value['stiker_panjang'] ?> m</td>
								<td><?= $value['stiker_lebar'] ?> m</td>
								<td><?= $value['stiker_bahan'] ?></td>
								<td><?= $value['stiker_jumlah'] ?> </td>
								<td><?= $value['stiker_estimasi'] ?> </td>
								<td style="text-align: right"> Rp.<?= nominal($value['stiker_total']) ?></td>
								<td><a class="fa fa-close table-shopping-remove"
									   href="<?= base_url('hapus/stiker/' . $value['stiker_id']) ?>"
									   onclick="return confirm('Hapus Pesanan? ')"></a></td>
							</tr>
						<?php
						endforeach;
						?>
						</tbody>
					</table>
					<div class="gap gap-small"></div>
				<?php
				endif;
				?>
				<?php
				if ($spanduk != null):
					?>
					<h4>Print</h4>
					<table class="table table-bordered table-shopping-cart">
						<thead>
						<tr>
							<th>Ukuran</th>
							<th>Bahan</th>
							<th>Jumlah</th>
							<th>Catatan</th>
							<th>Total</th>
							<th>Hapus</th>
						</tr>
						</thead>
						<tbody>
						<?php
						foreach ($spanduk as $key => $value):
							?>
							<tr>
								<td><?= $value['spanduk_ukuran'] ?></td>
								<td><?= $value['spanduk_bahan'] ?></td>
								<td><?= $value['spanduk_jumlah'] ?> </td>
								<td><?= $value['spanduk_estimasi'] ?> </td>
								<td style="text-align: right"> Rp.<?= nominal($value['spanduk_total']) ?></td>
								<td><a class="fa fa-close table-shopping-remove"
									   href="<?= base_url('hapus/spanduk/' . $value['spanduk_id']) ?>"
									   onclick="return confirm('Hapus Pesanan? ')"></a></td>
							</tr>
						<?php
						endforeach;
						?>
						</tbody>
					</table>
					<div class="gap gap-small"></div>
				<?php
				endif;
				?>
				<?php
				if ($kartu != null):
					?>
					<h4>Kartu Nama</h4>
					<table class="table table-bordered table-shopping-cart">
						<thead>
						<tr>
							<th>Bahan</th>
							<th>Jumlah</th>
							<th>Catatan</th>
							<th>Total</th>
							<th>Hapus</th>
						</tr>
						</thead>
						<tbody>
						<?php
						foreach ($kartu as $key => $value):
							?>
							<tr>
								<td><?= $value['kartu_bahan'] ?></td>
								<td><?= $value['kartu_jumlah'] ?> </td>
								<td><?= $value['kartu_estimasi'] ?> </td>
								<td style="text-align: right"> Rp.<?= nominal($value['kartu_total']) ?></td>
								<td><a class="fa fa-close table-shopping-remove"
									   href="<?= base_url('hapus/kartu/' . $value['kartu_id']) ?>"
									   onclick="return confirm('Hapus Pesanan? ')"></a></td>
							</tr>
						<?php
						endforeach;
						?>
						</tbody>
					</table>
					<div class="gap gap-small"></div>
				<?php
				endif;
				?>
				<?php
				if ($brosur != null):
					?>
					<h4>Brosur</h4>
					<table class="table table-bordered table-shopping-cart">
						<thead>
						<tr>
							<th>Bahan</th>
							<th>Jumlah</th>
							<th>Catatan</th>
							<th>Total</th>
							<th>Hapus</th>
						</tr>
						</thead>
						<tbody>
						<?php
						foreach ($brosur as $key => $value):
							?>
							<tr>
								<td><?= $value['brosur_bahan'] ?></td>
								<td><?= $value['brosur_jumlah'] ?> </td>
								<td><?= $value['brosur_estimasi'] ?> </td>
								<td style="text-align: right"> Rp.<?= nominal($value['brosur_total']) ?></td>
								<td><a class="fa fa-close table-shopping-remove"
									   href="<?= base_url('hapus/brosur/' . $value['brosur_id']) ?>"
									   onclick="return confirm('Hapus Pesanan? ')"></a></td>
							</tr>
						<?php
						endforeach;
						?>
						</tbody>
					</table>
					<div class="gap gap-small"></div>
				<?php
				endif;
				?>
				<?php
				if ($print != null):
					?>
					<h4>Print</h4>
					<table class="table table-bordered table-shopping-cart">
						<thead>
						<tr>
							<th>Bahan</th>
							<th>Jumlah</th>
							<th>Catatan</th>
							<th>Total</th>
							<th>Hapus</th>
						</tr>
						</thead>
						<tbody>
						<?php
						foreach ($print as $key => $value):
							?>
							<tr>
								<td><?= $value['print_bahan'] ?></td>
								<td><?= $value['print_jumlah'] ?> </td>
								<td><?= $value['print_estimasi'] ?> </td>
								<td style="text-align: right"> Rp.<?= nominal($value['print_total']) ?></td>
								<td><a class="fa fa-close table-shopping-remove"
									   href="<?= base_url('hapus/print/' . $value['print_id']) ?>"
									   onclick="return confirm('Hapus Pesanan? ')"></a></td>
							</tr>
						<?php
						endforeach;
						?>
						</tbody>
					</table>
					<div class="gap gap-small"></div>
				<?php
				endif;
				?>
			</div>
			<div class="col-md-2">
				<h4>Total</h4>
				<h3>Rp. <?= nominal($keranjang['keranjang_total']) ?></h3>
				<a class="btn btn-primary" href="<?= base_url('bayar/' . $keranjang['keranjang_id']) ?>">Bayar</a>
			</div>
		</div>
	</div>
<?php
else:
	?>
	<div class="container">
		<div class="text-center"><i class="fa fa-cart-arrow-down empty-cart-icon"></i>
			<p class="lead">Keranjang Kamu Kosong</p><a class="btn btn-primary btn-lg" href="<?= base_url() ?>">Pesan
				Sekarang <i class="fa fa-long-arrow-right"></i></a>
		</div>
	</div>
<?php
endif;
?>
