<?php $this->load->view('template/header'); ?>

<div class="container">
<center><h1>FORM PEMINJAMAN</h1></center>
<br>
<br>
    <?php echo validation_errors(); ?>
    <div class="text-danger alert alert-warning" role="alert">
      <p class="text-center"><?php echo (isset($error)) ? $error : '' ; ?></p>
    </div>
    <?php
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
    ?>
      <?php
        echo form_open('Ctrpinjam/tambah', array('class'=>'needs-validation', 'novalidate'=>'')); 
       ?>
       
      <table>   
          <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama Anggota</label>
          <div class="col-sm-10">
            <select name="id_anggota" class="form-control" required>
              <option value="">Pilih Nama Anggota</option>
              <?php foreach($data as $pinjam): ?>
              <option value="<?php echo $pinjam->id_anggota; ?>"><?php echo $pinjam->nama_anggota; ?></option>
            
              <?php endforeach; ?>
            </select>
            </div>
            </div>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Besar Pinjaman</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="besar_pinjaman" min="1000" value="<?php echo set_value('besar_pinjaman'); ?>" required>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Pinjam</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tanggal_pinjaman" value="<?php echo set_value('tanggal_pinjaman'); ?>" required>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Pelunasan</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" name="tangga_pelunasan" value="<?php echo set_value('tangga_pelunasan'); ?>" required>
          </div>
        </div>
        <tr>
          <td colspan="3"><input id="submitBtn" type="submit" name="simpan" value="simpan"></td>
        </tr>
      </table>
    </div>
  </section>
</section>