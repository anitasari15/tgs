<?php $this->load->view("template/header_visitor"); ?>
            <div class="feature">
              <!-- <i class="feature-icon fa fa-users"></i> -->
             <div class="container text-center">
      <?php foreach ($detail as $key): ?>
      <div class="container">
        <table>
          <tr class="text-center">
            <td>
              <h3><b><?php echo $key->judul; ?></b></h3>
              </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="<?php echo base_url() ?>img/<?php echo $key->img;?>" alt="Image" width="500" height="400">
              <br></br>
              <br></br>
              <br></br>
              <?php echo $key->konten; ?>
              <br></br>
              <br></br>
              <br></br>

            </td>
          </tr>
      <?php endforeach ?>
    </div>
  </table>
</div>
<?php $this->load->view("template/footer_user"); ?>