<?php $this->load->view('template/header_visitor'); ?>

<div id="fh5co-main">
	<br>

	<div class="fh5co-narrow-content">
		<h2 data-animate-effect="fadeInLeft"><center>DATA ANGGOTA</h2>
			<br>
			<br>

			<div class="text-center row animate-box" data-animate-effect="fadeInLeft">
				<?php foreach ($user as $key): ?>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
						<h2 class="section-heading text-black" style="text-align:left"><?php echo $key->nama_anggota ?></h2>
						<hr class="light my-4">
						<p class="text-faded mb-4">
							<a href="view/<?php echo $key->id_anggota ?>" style="color:black;">
								<img src="<?php echo base_url() ?>img/<?php echo $key->img_anggota; ?>" alt="image" width="200"style="text-align:left">
							</a>
						</div>

					<?php endforeach ?>
					
				</div>
			</div>
		</div>
	</div>
</p>
</div>
</div>
</div>
</div>
</div>


<center>
	<?php
 // $links ini berasal dari fungsi pagination
 // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
	if (isset($links)) {
		echo $links;
	}
	?>

	<?php $this->load->view('template/footer_user'); ?>
