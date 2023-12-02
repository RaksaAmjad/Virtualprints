<div class="col-12">
	<div class="card">
		<div class="card-body">
			<?php
			if ($spanduk != null):
			?>
			<h3 class="card-title">
				File Print
			</h3>
			<img src="<?=base_url('assets/images/spanduk/'.$spanduk['spanduk_foto'])?>" style="width: 100%" alt="">
				<div class="row">
					<div class="col-12">
						<br>
						<button type="button" onclick="return window.history.back();" class="btn btn-secondary">Kembali</button>
					</div>
				</div>
			<?php
			endif;
			?>
			<?php
			if ($stiker != null):
			?>
			<h3 class="card-title">
				File Stiker
			</h3>
			<img src="<?=base_url('assets/images/stiker/'.$stiker['stiker_foto'])?>" style="width: 100%" alt="">
				<div class="row">
					<div class="col-12">
						<br>
						<button type="button" onclick="return window.history.back();" class="btn btn-secondary">Kembali</button>
					</div>
				</div>
			<?php
			endif;
			?>
			<?php
			if ($kartu != null):
			?>
			<h3 class="card-title">
				File Kartu Nama
			</h3>
			<img src="<?=base_url('assets/images/kartu/'.$kartu['kartu_foto'])?>" style="width: 100%" alt="">				
			<div class="row">
				<div class="col-12">
					<br>
					<button type="button" onclick="return window.history.back();" class="btn btn-secondary">Kembali</button>
				</div>
			</div>
			<?php
			endif;
			?>
			<?php
			if ($brosur != null):
			?>
			<h3 class="card-title">
				File Brosur
			</h3>
			<img src="<?=base_url('assets/images/brosur/'.$brosur['brosur_foto'])?>" style="width: 100%" alt="">
				<div class="row">
					<div class="col-12">
						<br>
						<button type="button" onclick="return window.history.back();" class="btn btn-secondary">Kembali</button>
					</div>
				</div>
			<?php
			endif;
			?>
			<?php
			if ($print != null):
			?>
			<h3 class="card-title">
				File Print
			</h3>
			<img src="<?=base_url('assets/images/print/'.$print['print_foto'])?>" style= "height=200 width=300" alt="">
				<div class="row">
					<div class="col-12">
						<br>
						<button type="button" onclick="return window.history.back();" class="btn btn-secondary">Kembali</button>
					</div>
				</div>
			<?php
			endif;
			?>
		</div>
	</div>
</div>
