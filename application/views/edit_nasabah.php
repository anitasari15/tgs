    <?php $this->load->view('template/header'); ?>

      <section id="main-content">
      <section class="wrapper">
      <div class="container">
      <?php foreach ($single as $key): ?>
      <?php
      $this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
      ?>
      <?php echo validation_errors(); ?>
      <?php echo form_open_multipart(current_url(), array('class'=>'needs-validation', 'novalidate'=>'')); ?>
      <table>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Id Anggota</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_anggota" readonly value="<?php echo $key->id_anggota; ?>">
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" value="<?php echo $key->nama_anggota; ?>" required>
            <div class="invalid-feedback">Isi Nama</div>
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="alamat" value="<?php echo $key->alamat_anggota; ?>" required>
            <div class="invalid-feedback">Isi Alamat</div>
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tempat" value="<?php echo $key->tempat_lahir_anggota; ?>" required>
            <div class="invalid-feedback">Isi Tempat Lahir</div>
          </div>
        </div>
        <br></br>
        <br></br>
         <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
          <div class="col-sm-10">
            <input type="date" name="tanggal" class="form-control" value="<?php echo $key->tanggal_lahir_anggota; ?>" required>
            <div class="invalid-feedback">Isi Tanggal Lahir</div>
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $key->jk_anggota; ?>" required>
            <div class="invalid-feedback">Isi Jenis Kelamin</div>
          </div>
        </div>
        <br></br>
        <br></br>
         <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Upload Gambar</label>
          <div class="col-sm-10">
            <input type="file" name="gambar">
          </div>
        </div>
        <br></br>
        <tr>
          <td colspan="3"><input id="submitBtn" type="submit" name="edit" value="Edit" class="btn btn-primary"></td>
        </tr>
      </table>
      <?php endforeach ?>   
      </div>       
      </section>
      </section>
    </form>
  </body>
</html>