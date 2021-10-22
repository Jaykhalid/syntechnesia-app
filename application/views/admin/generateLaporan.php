    <!-- Konten Halaman -->
    <div class="container-fluid">
        
      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>
            
      <div class="row">
        <div class="col-lg">
          
          <?= $this->session->flashdata('message'); ?>

          <table class="table table-hover">
            <thead>
              <tr>
                   <th scope="col">ID Laporan</th>
                   <th scope="col">Tanggal Validasi</th>
                  <th scope="">Pelapor</th>
                  <th scope="">Isi Laporan</th>
                  <th scope="col">No. Validasi</th> 
                  <th scope="col">Petugas</th> 
                  <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($generate as $GL) : ?> 
               <tr>
                  <td> <?= $GL['idLaporan']; ?></td>
                  <td> <?= $GL['tglTanggapan']; ?></td>
                  <td> <?= $GL['nik']; ?></td>
                  <td> <?= $GL['isiLaporan']; ?></td>
                  <td> <?= $GL['idTanggapan']; ?></td>
                  <td> <?= $GL['nama']; ?></td>
                  <td>
                      <a href="<?= base_url(); ?>Admin/GL/<?= $GL['idLaporan']; ?>/<?= $GL['idTanggapan']; ?>/<?= $GL['nik']; ?>/<?= $GL['nip']; ?>" class="btn btn-success mb-3"><i class="fas fa-check-double"></i></a>
                      <a href="<?= base_url(); ?>Petugas/hapusLaporan/<?= $GL['idLaporan']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus Laporan ini?');"><i class="fas fa-minus-circle"></i></a> 
                  </td> 
                </tr>
              
              <?php endforeach; ?>
            </tbody> 
          </table>
              
        </div>
      </div>
            
            
    </div>
    <!-- Akhir dari Container Fluid -->