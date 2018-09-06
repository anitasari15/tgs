<?php $this->load->view('template/header'); ?>
<center><h1>TAMBAH ARTIKEL</h1></center>
<div class="container">
  <?php
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
    ?>
    <?php echo validation_errors(); ?>
      <?php
        echo form_open_multipart('artikel/tambah', array('class'=>'needs-validation', 'novalidate'=>''));
       ?>
      <table>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="judul" value="<?php echo set_value('judul'); ?>" required>
            <div class="invalid-feedback">Isi judul</div>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Konten</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="konten" value="<?php echo set_value('konten') ?>" required>
            <div class="invalid-feedback">Isi Konten</div>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Post</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tanggal" value="<?php echo set_value('tanggal') ?>" required>
            <div class="invalid-feedback">Isi Tanggal Post</div>
          </div>
        </div>
        <br>
         <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
          <div class="col-sm-10">
            <input type="file" name="input_gambar" value="<?php echo set_value('input_gambar') ?>">
          </div>
        </div>
          
          <td colspan="3"><input id="submitBtn" type="submit" name="simpan" value="simpan"></td>
        </table>
      </div>