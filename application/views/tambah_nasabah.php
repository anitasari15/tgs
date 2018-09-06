<?php $this->load->view('template/header'); ?>

<div class="container">
  <?php
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
    ?>
    <?php echo validation_errors(); ?>
      <?php
        echo form_open_multipart('ctrNasabah/tambah', array('class'=>'needs-validation', 'novalidate'=>''));
       ?>

       <center> <h2> FORM TAMBAH ANGGOTA </h2> </center>
       <br>
      <table>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama_anggota'); ?>" required>
           
          </div>
        </div>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Alamat Anggota</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" value="<?php echo set_value('alamat_anggota') ?>" required>
           </div>
        </div>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tempat" value="<?php echo set_value('tempat_lahir_anggota') ?>" required>
           </div>
        </div>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tanggal" value="<?php echo set_value('tanggal_lahir_anggota') ?>" required>
           </div>
        </div>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jk" value="<?php echo set_value('jk_anggota') ?>" required>
      <br>
            </div>
        </div>
        <br>
         <div class="form-group">
  <label class="col-sm-2 col-sm-2 control-label">Username</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" name="user" placeholder="Isi Username">
  </div>
 </div>
 <div class="form-group">
  <br>
  <label class="col-sm-2 col-sm-2 control-label">Password</label>
  <div class="col-sm-10">
    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
  </div>
 </div>
 <div class="form-group">
  <br>
  <label class="col-sm-2 col-sm-2 control-label">Konfirmasi Password</label>
  <div class="col-sm-10">
  <input type="password" class="form-control" name="password2" placeholder="Ulangi Password">
  </div>
</div>
<div class="form-group">
  <br>
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
         <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Foto</label>
          <div class="col-sm-10">
            <input type="file" name="input_gambar" value="<?php echo set_value('input_gambar') ?>">
          </div>
        </div>
          <br>
          <td colspan="3"><input id="submitBtn" type="submit" name="simpan" value="simpan"></td>
        </table>
      </div>


<?php $this->load->view('template/footer'); ?>