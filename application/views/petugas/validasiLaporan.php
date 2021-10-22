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
                   <th scope="col">#</th>
                   <th scope="col">Tanggal</th>
                  <th scope="col">Pelapor</th>
                  <th scope="col">Kategori</th> 
                  <th scope="col" class="text-center">Isi Laporan</th>
                  <th scope="col" class="text-center">Foto</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($pengaduan as $pm) : ?> 
               <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td class="text-center"> <?= $pm['tglPelaporan']; ?></td>
                  <td class="text-center"> <?= $pm['nama']; ?></td>
                  <td class="text-center"> <?= $pm['kategoriLaporan']; ?></td>
                  <td> <?= $pm['isiLaporan']; ?></td>
                  <td> <img class="img-profile" src="<?= base_url('vendor/sbadmin2/assets/image/illustrations/') . $pm['foto']; ?> " width="170px">
                  <td class="text-center"> <?= $pm['status']; ?></td>
                  <td>
                    <a href="<?= base_url(); ?>Petugas/validasiLaporan/<?= $pm['idLaporan']; ?>" class="btn btn-success mb-3"><i class="fas fa-check-double"></i></a>
                    <a href="<?= base_url(); ?>Petugas/hapusLaporan/<?= $pm['idLaporan']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus Laporan ini?');"><i class="fas fa-minus-circle"></i></a> 
                  </td> 
                </tr>
              
              <?php $i++; ?>
              <?php endforeach; ?>
            </tbody> 
          </table>
              
        </div>
      </div>

    </div>
    <!-- Akhir dari Container Fluid -->