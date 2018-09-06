<?php $this->load->view('template/header'); ?>

<div class="container">
  <center><h1>FORM ANGSURAN</h1></center>
     <?php
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
    ?>
    <?php echo validation_errors(); ?>
      <?php
        echo form_open('ctrAngsuran/tambah', array('class'=>'needs-validation', 'novalidate'=>'')); 
       ?>

       <table>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama Anggota</label>
          <div class="col-sm-10">
            <select name="id_anggota" class="form-control" required>
              <option value="">Pilih Nama Anggota</option>
              <?php foreach($data as $data): ?>
              <option value="<?php echo $data->id_anggota; ?>"><?php echo $data->nama_anggota; ?></option>

              <?php endforeach; ?>
            </select>
         </div>
        </div>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Angsuran</label>
          <div class="col-sm-10">
            <input type="date" class= "form-control" name="tanggal_angsuran" value="<?php echo set_value('tanggal_angsuran') ?>" required>
            <div class="invalid-feedback">Isi Tanggal Angsuran</div></td>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Besar Angsuran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="besar_angsuran" value="<?php echo set_value('besar_angsuran'); ?>" required>
          </div>
        </div>
        <br>
    <input id="submitBtn" type="submit" name="simpan" value="simpan">
      </table>
    </div>
