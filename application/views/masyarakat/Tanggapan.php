    <!-- Konten Halaman -->
    <div class="container-fluid mb-5 pb-5">
        
      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>
            
      <div class="row">
        <div class="col-lg">
          
          <?= $this->session->flashdata('message'); ?>

          <table class="table table-hover">
            <thead>
              <tr>
                   <th scope="col"># ID Tanggapan</th>
                   <th scope="col">Petugas</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Tanggapan</th>
                  <th scope="col"># ID Laporan</th> 
                   <th scope="col">Pelapor</th>
                  <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tanggapan as $tm) : ?> 
               <tr>
                  <td> <?= $tm['idTanggapan']; ?></td>
                  <td> <?= $tm['nip']; ?></td>
                  <td> <?= $tm['tglTanggapan']; ?></td>
                  <td> <?= $tm['tanggapan']; ?></td>
                  <td> <?= $tm['idLaporan']; ?></td>
                  <td> <?= $tm['nik']; ?></td>
                  <td>
                      <a href="<?= base_url(); ?>Masyarakat/LT/<?= $tm['idLaporan']; ?>/<?= $tm['idTanggapan']; ?>/<?= $tm['nik']; ?>/<?= $tm['nip']; ?>" class="btn btn-success mb-3"><i class="far fa-file-alt"></i></a>
                  </td> 
                </tr>
              
              <?php endforeach; ?>
            </tbody> 
          </table>
              
        </div>
      </div>

    </div>
    <!-- Akhir dari Container Fluid -->