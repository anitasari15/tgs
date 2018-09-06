    <?php $this->load->view('template/header_user'); ?>
    
        <script src="<?php echo base_url() ?>assets/assets/js/jquery-1.9.1.min.js"></script>

       <section id="main-content">
      <section class="wrapper">      
      <h1>List Transaksi Anggota Koperasi Ceria</h1><br>
                             <!-- <td><a href='ctrpinjam/tambah' class='btn btn-sm btn-info'>Tambah</a></td>
                             <br></br>
                             <br></br> -->
        <div class="card-content table-responsive">
            <table id="dt-basic" class="table">
                <thead class="text-primary">
                    <th>Id Anggota</th>
                    <th>Id Pinjaman</th>
                    <th>Besar Pinjaman</th>
                    <th>Sisa Pinjaman</th>
                    <th>Tanggal Pinjaman</th>
                    <th>Jatuh Tempo</th>
                    <!-- <th>Aksi</th> -->
                </thead>

                <tbody>
                  <?php
                        foreach($Pinjam as $i):
                  ?>
                  <tr>
                        <td><?php echo $i->id_anggota;?> </td>
                        <td><?php echo $i->id_pinjaman;?> </td>
                        <td><?php echo $i->besar_pinjaman?> </td>
                        <td><?php echo $i->sisa_angsuran;?> </td>
                        <td><?php echo $i->tanggal_pinjaman;?> </td>
                        <td><?php echo $i->tangga_pelunasan;?> </td>
                        
                        <!-- <td><a href='ctrpinjam/delete/<?php echo $id_pinjaman; ?>' class='btn btn-sm btn-danger'>Delete</a></td> -->
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
        <?php $this->load->view('template/footer_user'); ?>
</html>
