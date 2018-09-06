    <?php $this->load->view('template/header'); ?>
    
        <script src="<?php echo base_url() ?>assets/assets/js/jquery-1.9.1.min.js"></script>  
      <br></br>
      <h1>List Artikel</h1><br>
     <td><a href='<?php echo base_url() ?>artikel/tambah' class='btn btn-sm btn-info'>Tambah</a></td>
     <br>
      <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">

        <div class="card-content table-responsive">          
            
            <table id="dt-basic" class="table table-striped table-bordered">
                <thead class="text-primary">
                    <th>Id Artikel</th>
                    <th>Judul</th>
                    <th>Isi Konten</th>
                    <th>Tanggal Post</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </thead>

                <tbody>
                  <?php
                        foreach($artikel as $i):
                              $id_artikel=$i['id_artikel'];
                              $judul=$i['judul'];
                              $konten=$i['konten'];
                              $tanggal=$i['tanggal_post'];
                              $gambar=$i['img'];
                        ?>
                  <tr>
                        <td><?php echo $id_artikel;?> </td>
                        <td><?php echo $judul;?> </td>
                        <td><?php echo $konten;?> </td>
                        <td><?php echo $tanggal;?> </td>
                        <td><img src="<?php echo base_url() ?>img/<?php echo $gambar;?>"alt="Image" width="50" height="40"> </td>
                        <td>
                          <a href='<?php echo base_url() ?>artikel/edit/<?php echo $id_artikel ?>' class='btn btn-sm btn-info'>Update</a>
                          <a href='<?php echo base_url() ?>artikel/delete/<?php echo $id_artikel; ?>' class='btn btn-sm btn-danger'>Delete</a>
                        </td>
                  </tr>
                  <?php endforeach;?>
            </tbody>
        </table>
    </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
              </section>
              </section>

    <link rel="stylesheet" href="<?php echo base_url()?>assets/assets/css/jquery.dataTables.min.css">
<script src="<?php echo base_url(). 'assets/assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url(). 'assets/assets/js/jquery.dataTables.bootstrap4.min.js'?>"></script>
<script >
         $(document).ready(function(){

        // Contoh inisialisasi Datatable tanpa konfigurasi apapun
        // #dt-basic adalah id html dari tabel yang diinisialisasi
        $('#dt-basic').DataTable();
    });
</script>

    <!-- js placed at the end of the document so the pages load faster -->
  <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/bootstrap.min.css">
  </body>
      <?php $this->load->view('template/footer'); ?>
</html>