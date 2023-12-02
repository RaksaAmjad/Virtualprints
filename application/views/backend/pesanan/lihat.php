<div class="col-12">
	<div class="card">
		<div class="card-body">
			<h3 class="card-title">
				Detail Pesanan
			</h3>
			<div>
				<table>
					<tr>
						<td>Nama Pemesan</td>
						<td> :</td>
						<td>&nbsp;
							<?= $transaksi['pengguna_nama'] ?>
						</td>
					</tr>
					<tr>
						<td>Nomor HP</td>
						<td> :</td>
						<td>&nbsp;
							<?= $transaksi['pengguna_nomor_hp'] ?>
						</td>
					</tr>
					<tr>
						<td>Waktu Pemesanan</td>
						<td> :</td>
						<td>&nbsp;
							<?php
							$tanggal = explode(" ", $transaksi['faktur_date_created']);
							echo $tanggal[1] . ', ' . date_indo($tanggal[0]);
							?>
						</td>
					</tr>
				</table>
				<hr>
				<?php
				if ($spanduk == !null):
					?>
					<h5>Print</h5>
					<table class="table table-bordered">
						<thead>
						<tr>
							<th>No</th>
							<th>Ukuran</th>
							<th>Tipe Cover</th>
							<th>Jumlah</th>
							<th>File</th>
							<th>Catatan</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						foreach ($spanduk as $key => $value):
							?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $value['spanduk_ukuran'] ?></td>
								<td><?= $value['spanduk_bahan'] ?></td>
								<td><?= $value['spanduk_jumlah'] ?></td>
								<td>
									<a href="<?= base_url('admin/pesanan/foto/' . $value['spanduk_id']) ?>"
									   class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
								</td>
								<td><?= $value['spanduk_estimasi'] ?></td>
							</tr>
							<?php
							$no++;
						endforeach;
						?>
						</tbody>
					</table>
				<?php
				endif;
				?>
				<hr>
				<?php
				if ($stiker == !null):
					?>
					<h5>Stiker</h5>
					<table class="table table-bordered">
						<thead>
						<tr>
							<th>No</th>
							<th>Ukuran (m)</th>
							<th>Jenis Bahan</th>
							<th>Jumlah</th>
							<th>File</th>
							<th>Catatan</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						foreach ($stiker as $key => $value):
							?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $value['stiker_panjang'] ?> x <?= $value['stiker_lebar'] ?> </td>
								<td><?= $value['stiker_bahan'] ?></td>
								<td><?= $value['stiker_jumlah'] ?></td>
								<td>
									<a href="<?= base_url('admin/pesanan/foto/' . $value['stiker_id']) ?>"
									   class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
								</td>
								<td><?= $value['stiker_estimasi'] ?></td>
							</tr>
							<?php
							$no++;
						endforeach;
						?>
						</tbody>
					</table>
				<?php
				endif;
				?>
				<hr>
				<?php
				if ($kartu == !null):
					?>
					<h5>Kartu Nama</h5>
					<table class="table table-bordered">
						<thead>
						<tr>
							<th>No</th>
							<th>Jenis Bahan</th>
							<th>Jumlah</th>
							<th>File</th>
							<th>Catatan</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						foreach ($kartu as $key => $value):
							?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $value['kartu_bahan'] ?></td>
								<td><?= $value['kartu_jumlah'] ?></td>
								<td>
									<a href="<?= base_url('admin/pesanan/foto/' . $value['kartu_id']) ?>"
									   class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
								</td>
								<td><?= $value['kartu_estimasi'] ?></td>
							</tr>
							<?php
							$no++;
						endforeach;
						?>
						</tbody>
					</table>
				<?php
				endif;
				?>
				<hr>
				<?php
				if ($brosur == !null):
					?>
					<h5>Brosur</h5>
					<table class="table table-bordered">
						<thead>
						<tr>
							<th>No</th>
							<th>Ukuran</th>
							<th>Jenis Bahan</th>
							<th>Jumlah</th>
							<th>File</th>
							<th>Catatan</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						foreach ($brosur as $key => $value):
							?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $value['brosur_ukuran'] ?></td>
								<td><?= $value['brosur_bahan'] ?></td>
								<td><?= $value['brosur_jumlah'] ?></td>
								<td>
									<a href="<?= base_url('admin/pesanan/foto/' . $value['brosur_id']) ?>"
									   class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
								</td>
								<td><?= $value['brosur_estimasi'] ?></td>
							</tr>
							<?php
							$no++;
						endforeach;
						?>
						</tbody>
					</table>
				<?php
				endif;
				?>
				<hr>
				<?php
				if ($print == !null):
					?>
					<h5>Print</h5>
					<table class="table table-bordered">
						<thead>
						<tr>
							<th>No</th>
							<th>Ukuran</th>
							<th>Jenis Bahan</th>
							<th>Jumlah</th>
							<th>File</th>
							<th>Catatan</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						foreach ($print as $key => $value):
							?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $value['print_ukuran'] ?></td>
								<td><?= $value['print_bahan'] ?></td>
								<td><?= $value['print_jumlah'] ?></td>
								<td>
									<a href="<?= base_url('admin/pesanan/foto/' . $value['print_id']) ?>"
									   class="badge badge-primary"><i class="fa fa-eye"></i> Lihat</a>
								</td>
								<td><?= $value['print_estimasi'] ?></td>
							</tr>
							<?php
							$no++;
						endforeach;
						?>
						</tbody>
					</table>
				<?php
				endif;
				?>
				<hr>
			</div>
		</div>
	</div>
</div>
