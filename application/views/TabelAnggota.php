    <?php $this->load->view('template/header'); ?>
    
        <script src="<?php echo base_url() ?>assets/assets/js/jquery-1.9.1.min.js"></script>  
      <br></br>
      <center> <h1>List Anggota Koperasi Ceria</h1><br> </center>
     <td><a href='<?php echo base_url() ?>ctrNasabah/tambah' class='btn btn-sm btn-info'>Tambah</a></td>
     <br>
      <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">

        <div class="card-content table-responsive">          
            
            <table id="dt-basic" class="table table-striped table-bordered">
                <thead class="text-primary">
                    <th>Id Nasabah</th>
                    <th>Nama</th>
                    <th>Id Level</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </thead>

                <tbody>
                  <?php
                        foreach($nasabah as $i):
                              $id_nasabah=$i['id_anggota'];
                              $nama=$i['nama_anggota'];
                              $id_level=$i['id_level'];
                              $alamat=$i['alamat_anggota'];
                              $tempat=$i['tempat_lahir_anggota'];
                              $tanggal=$i['tanggal_lahir_anggota'];
                              $jenis_kelamin=$i['jk_anggota'];
                              $username=$i['username'];
                              $password=$i['password'];
                              $gambar=$i['img_anggota'];
                        ?>
                  <tr>
                        <td><?php echo $id_nasabah;?> </td>
                        <td><?php echo $nama;?> </td>
                        <td><?php echo $id_level;?> </td>
                        <td><?php echo $alamat;?> </td>
                        <td><?php echo $tempat;?> </td>
                        <td><?php echo $tanggal;?> </td>
                        <td><?php echo $jenis_kelamin;?></td>
                        <td><?php echo $username;?> </td>
                        <td><?php echo $password;?> </td>
                        <td><img src="<?php echo base_url() ?>img/<?php echo $gambar;?>"alt="Image" width="50" height="40"> </td>
                        <td>
                          <a href='<?php echo base_url() ?>ctrNasabah/edit/<?php echo $id_nasabah ?>' class='btn btn-sm btn-info'>Update</a>
                          <a href='<?php echo base_url() ?>ctrNasabah/delete/<?php echo $id_nasabah; ?>' class='btn btn-sm btn-danger'>Delete</a>
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