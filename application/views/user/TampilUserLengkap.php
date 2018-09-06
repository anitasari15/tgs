<?php $this->load->view('template/header_user'); ?>

		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
			<center><h1>Data Lengkap Anggota</h1></center>
			<?php foreach ($user as $x): ?>
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				<center><img src="<?php echo base_url().'img/'?><?php echo $x->img_anggota; ?>" width = "150"><br/></center>
				<center><?php echo $x->nama_anggota; ?><hr/>
				<br><b><?php echo $x->alamat_anggota;?><br/></b>
				<br><b><?php echo $x->tempat_lahir_anggota;?></b>,
				<b><?php echo $x->tanggal_lahir_anggota;?><br></b>
				<b><?php echo $x->jk_anggota;?></b><br/>
			<?php endforeach ?>
		</div>
		
	</div>
				</div>

 
			</div>
		</div>
	</div>
<?php $this->load->view('template/footer_user'); ?>