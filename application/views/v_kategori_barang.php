<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<video autoplay="" loop="" poster="https://www.galax.com/media/wysiwyg/corpsite/products/30series/3090HOF/RGB.png" width="100%">
		<source src="https://www.galax.com/downloads/RGB.mp4" type="video/mp4">
	</video>
</div>

<div class="card card-solid">
	<div class="card-body pb-0">
		<div class="row d-flex align-items-stretch">

			<?php foreach ($barang as $key => $value) { ?>

				<div class="col-sm-4 d-flex align-items-stretch">
					<?php
					echo form_open('belanja/add');
					echo form_hidden('id', $value->id_barang);
					echo form_hidden('qty', 1);
					echo form_hidden('price', $value->harga);
					echo form_hidden('name', $value->nama_barang);
					echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
					?>
					<div class="card bg-light">
						<div class="card-header text-muted border-bottom-0">
							<h2 class="lead"><b><?= $value->nama_barang ?></b></h2>
							<p class="text-muted text-sm"><b>Kategori : </b><?= $value->nama_kategori ?></p>
						</div>
						<div class="card-body pt-0">
							<div class="row">
								<div class="col-12 text-center">
									<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="" class="img-fluid" width="500px">
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-sm-6">
									<div class="text-left">
										<h4><span class="badge bg-primary">Rp. <?= number_format($value->harga, 0) ?></span></h4>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="text-right">
										<a href="<?= base_url('home/detail_barang/' . $value->id_barang)  ?>" class="btn btn-sm btn-success">
											<i class="fas fa-eye"></i>
										</a>
										<a href="#" class="btn btn-sm btn-primary">
											<i class="fas fa-cart-plus"> Add</i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>
</div>