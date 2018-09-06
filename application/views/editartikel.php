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
          <label class="col-sm-2 col-sm-2 control-label">Id Artikel</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="id_artikel" readonly value="<?php echo $key->id_artikel; ?>">
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="judul" value="<?php echo $key->judul; ?>" required>
            <div class="invalid-feedback">Isi Judul</div>
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Konten</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="konten" value="<?php echo $key->konten; ?>" required>
            <div class="invalid-feedback">Isi Konten</div>
          </div>
        </div>
        <br></br>
        <br></br>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Tanggal Post</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tanggal" readonly value="<?php echo $key->tanggal_post; ?>" required>
            <div class="invalid-feedback">Isi Tanggal Post</div>
          </div>
        </div>
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