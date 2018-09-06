
<?php
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
?>

<?php 
echo validation_errors();
?>

<?php echo form_open_multipart('visitor/register', array('class'=>'needs-validation', 'novalidate'=>'')); ?>
			<br>
			<br>
			<h1 class="text-center">FORM REGISTRASI USER</h1>
			<br>
			<br>
			<br>
			<br>
			<br>
 <div class="form-group">
 	<label class="col-sm-2 col-sm-2 control-label">Nama Lengkap</label>
 	<div class="col-sm-10">
 		<input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>"placeholder="Isi Nama Lengkap" required>
 	</div>
 </div>
 <div class="form-group">
 	<label class="col-sm-2 col-sm-2 control-label">alamat</label>
 	<div class="col-sm-10">
		<input type="text" class="form-control" name="alamat" placeholder="Isi Alamat" value="<?php echo set_value('alamat'); ?>"required>
	</div>
 </div>
 <div class="form-group">
 	<label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
 	<div class="col-sm-10">
 		<input type="text" class="form-control" name="tempat" placeholder="Isi Tempat Lahir" value="<?php echo set_value('tempat'); ?>" required>
 	</div>
 </div>
 <div class="form-group">
 	<label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
 	<div class="col-sm-10">
 		<input type="date" class="form-control" name="tanggal" placeholder="Isi Tanggal Lahir" value="<?php echo set_value('tanggal'); ?>" required>
 	</div>
 </div>
 <div class="form-group">
 	<label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
 	<div class="col-sm-10">
 		<input type="text" class="form-control" name="jk" placeholder="Isi Jenis Kelamin (p/l)" value="<?php echo set_value('jk'); ?>" required>
 	</div>
 </div>
 <div class="form-group">
 	<label class="col-sm-2 col-sm-2 control-label">Username</label>
 	<div class="col-sm-10">
 		<input type="text" class="form-control" name="user" placeholder="Isi Username" value="<?php echo set_value('user'); ?>" required>
 	</div>
 </div>
 <div class="form-group">
 	<label class="col-sm-2 col-sm-2 control-label">Password</label>
 	<div class="col-sm-10">
 		<input type="password" class="form-control" name="password" placeholder="Masukkan Password" value="<?php echo set_value('password'); ?>" required>
 	</div>
 </div>
 <div class="form-group">
	<label class="col-sm-2 col-sm-2 control-label">Konfirmasi Password</label>
	<div class="col-sm-10">
	<input type="password" class="form-control" name="password2" placeholder="Ulangi Password" value="<?php echo set_value('password2'); ?>" required>
	</div>
</div>
<div class="form-group">
	<label for="">Pilih Paket Membership</label>
	    <div class="form-check">
	        <input class="form-check-input" type="radio" name="member"  value="2" checked>
		        <label class="form-check-label" for="silver">Gold Member</label>
		</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="member" value="3">
	    	<label class="form-check-label" for="gold">Silver Member</label>
	</div>
</div>
<tr>
          <td>Gambar</td>
          <td>:</td>
          <td><input type="file" name="input_gambar" value="<?php echo set_value('input_gambar') ?>"></td>
        </tr>
<br>
<br>
<br>
 <button type="submit" class="btn btn-primary btn-block">Daftar</button>
<?php echo form_close(); ?>

<br>
			<br>
			<br>