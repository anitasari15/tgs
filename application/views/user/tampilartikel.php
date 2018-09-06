<?php $this->load->view("template/header_visitor"); ?>
<div class="container text-center">

      <h1>ARTIKEL</h1>
      <?php foreach ($artikel as $key): ?>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
          <table style="margin-bottom: 30px;">
            <tr>
              <td>
                <a href="<?php echo base_url() ?>artikel/detail/<?php echo $key->id_artikel ?>" style="color: black;">
                  <img src="<?php echo base_url() ?>img/<?php echo $key->img;?>" alt="Image" width="150" height="180">
                  <br>
                  <?php echo $key->judul ?>
                </a>
              </td>
            </tr>
          </table>
        </div>
      <?php endforeach ?>
    </div>
    
<div class="text-center">
<?php
 // $links ini berasal dari fungsi pagination
 // Jika $links ada (data melebihi jumlah max per page), maka tampilkan
 if (isset($links)) {
 echo $links;
 }
 ?>
</div>

<?php $this->load->view("template/footer_user"); ?>