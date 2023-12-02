<div class="container">
	<header class="page-header">
		<h1 class="page-title">Pesan Brosur</h1>
		<ol class="breadcrumb page-breadcrumb">
			<li><a href="#">Home</a>
			</li>
			<li><a href="#">Pesan</a>
			</li>
			<li class="active">Brosur</li>
		</ol>
	</header>
	<div class="row">
		<?= form_open('brosur' , array('enctype' => 'multipart/form-data')) ?>
		<div class="col-md-5">
			<h4>Upload File</h4>
			<div class="product-page-product-wrap">
				<div class="clearfix">
					<input type="file" class="dropify" name="upload" required>
				</div>
			</div>
		</div>
		<div class="col-md-7">
			<h4>Detail Pesanan</h4>
			<div class="row" data-gutter="10">
				<div class="col-md-8">
					<div class="box">
						<div class="form-group">
							<label for="">Ukuran Kertas :</label>
							<div class="row">
								<div class="col-md-6">
									<input type="radio" name="ukuran" required value="A4">	A4 <br>
								</div>
								<div class="col-md-6">
									<input type="radio" name="ukuran" required value="A5">	A5 <br>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="">Tipe Bahan :</label><br>
							<select name="bahan" id="bahan" class="form-control" required>
								<option value="hvs">HVS</option>
								<option value="konstruk">Konstruk</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Jumlah (Rim) :</label>
							<input type="number" name="jumlah" class="form-control" id="jumlah" onkeyup="showTotalBrosur()"
								   required autocomplete="off">
						</div>
						<div class="form-group">
							<label for="">Catatan Pesanan :</label>
							<textarea name="estimasi" rows="5" cols="40"></textarea>
						</div>
						<br>
						<div class="form-group">
							<label for=""><span style="color: red">*</span>Keterangan :</label>
							<ul>
								<li>Rim : 500 lembar</li>
								<li>HVS : Rp. 200.000 per rim</li>
								<li>Konstruk : Rp. 500.000 per rim</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box-highlight">
						<button type="submit" class="btn btn-block btn-primary" name="keranjang"><i
								class="fa fa-shopping-cart"></i>Keranjang
						</button>
						<?= form_close() ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gap"></div>
</div>
