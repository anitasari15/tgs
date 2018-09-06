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
                    <th>Id Angsuran</th>
                    <th>Id Anggota</th>
                    <th>Id Pinjaman</th>
                    <th>Tanggal Angsuran</th>
                    <th>Besar Angsuran</th>
                    <!-- <th>Aksi</th> -->
                </thead>

                <tbody>
                  <?php
                        foreach($angsuran as $i):
                  ?>
                  <tr>
                        <td><?php echo $i->id_angsuran;?> </td>
                        <td><?php echo $i->id_anggota;?> </td>
                        <td><?php echo $i->id_pinjaman?> </td>
                        <td><?php echo $i->tanggal_angsuran;?> </td>
                        <td><?php echo $i->besar_angsuran;?> </td>
                        
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

<?php $this->load->view('template/footer_user'); ?>