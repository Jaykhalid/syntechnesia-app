    <!-- Konten Halaman -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>
          
          <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
          <?php endif; ?> 
          
          <?= $this->session->flashdata('message'); ?>

      <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                    <div class="col-lg">
                      <div class="p-5">
                        <div class="text-center fixKau mb-4">
                          <h1 class="h4 text-regist mt-0">Ajukan Laporan Pengaduan-mu disini!</h1>
                        </div>
                         
                         <hr>
                        
                        <form class="user mainFont" method="post" action="<?= base_url('Masyarakat/buatLaporanPengaduan'); ?>">
                        
                        <div class="row">
                          <div class="col-md-3 form-group">
                           <label class="text-uppercase text-bold"> Tanggal</label>
                            <input type="date" class="form-control form-control-user" id="tglPelaporan" name="tglPelaporan" placeholder="" value="<?= set_value('tglPelaporan'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>

                          <div class="col-md-6 form-group"> 

                          </div>

                          <div class="col-md-3 form-group text-right"> 
                           <label class="text-uppercase text-bold text-right pr-4"> NIK </label>
                            <input type="number" class="form-control form-control-user pl-4 pr-3" id="nik" name="nik" placeholder=" Masukkan NIK anda " value="<?= $user['nik']; ?>">
                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                        </div>
                        
                       <hr>

                        <div class="form-grup row">

                          <div class="col-sm-6"> <label> KATEGORI LAPORAN : </label>
                            <select class="form-control" id="kategoriLaporan" name="kategoriLaporan" placeholder="Kategori Laporan" value="<?= set_value('kategoriLaporan'); ?>">
                              <option value = <?= form_dropdown('kategoriLaporan', $Kategori); ?>
                            </select>
                          </div>

                          <div class="col-sm-6"> <label> STATUS LAPORAN SAAT INI : </label>
                            <select class="form-control" id="status" name="status" placeholder="Status Laporan saat ini" value="<?= set_value('status'); ?>">
                              <option value = <?= form_dropdown('status', $Status); ?>
                            </select>
                          </div>

                        </div>
                       

                        <div class="form-group mt-4">
                          <textarea class="form-control" rows="10" id="isiLaporan" name="isiLaporan" placeholder="Jelaskan Laporan Pengaduan anda" value="<?= set_value('isiLaporan'); ?>"></textarea>
                          <?= form_error('isiLaporan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                          <div class="mb-5">
                            <input type="file" class="" id="foto" name="foto" >
                            <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>

                         <hr>

                          <div class="fixKau">
                               
                            <button type="submit" class="btn btn-primary btn-user btn-block mt-4 text-uppercase">
                              Kirim Laporan!
                            </button>
                          </div>
                        </form>
                       
                       <hr>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

    </div>
    <!-- Akhir dari Container Fluid -->