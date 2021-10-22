
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
                          <h1 class="h4 text-regist mt-0">Tanggapi Laporan Pengaduan Masyarakat</h1>
                        </div>
                        <form class="user mainFont" method="post" action="<?= base_url('petugas/validasiLaporanIndex'); ?>"> <!-- Too few arguments to function Petugas: -->
                      
                       <hr>

                        <div class="row mt-5">
                          <div class="col-md-3 form-group text-left"> <label class="text-uppercase text-bold pr-4 pl-3"> # ID Laporan</label>
                            <input type="number" class="form-control form-control-user pl-4 pr-3" id="idLaporan" name="idLaporan" placeholder="01" value="" readonly>
                            <?= form_error('idLaporan', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>

                          <div class="col-md-8">
                          
                          </div>
                        </div>

                        <div class="form-group">
                          <textarea class="form-control" rows="10" id="isiLaporan" name="isiLaporan" placeholder="isi dari Laporan yang akan divalidasi & diverifikasi" readonly> isi dari Laporan yang akan divalidasi & diverifikasi </textarea>
                        </div>
                        
                        <hr class="mt-5 mb-5">
                        
                        <div class="row">
                          <div class="col-md-3 form-group mb-4"> 
                            <label class="text-uppercase text-bold pr-4 pl-4"> NIP </label>
                             <input type="number" class="form-control form-control-user pl-4 pr-3" id="nip" name="nip" placeholder="NIP anda" value="">
                             <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                          
                          <div class="col-md-5">

                          </div>
                          
                          <div class="col-md-4 pl-5 form-group text-right"> <label class="text-uppercase text-bold pr-4 pl-4"> Tanggal</label>
                            <input type="date" class="form-control form-control-user pl-4 pr-3" id="tglTanggapan" name="tglTanggapan" placeholder="" value="">
                            <?= form_error('tglTanggapan', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                        </div>

                        <div class="form-group">
                          <textarea class="form-control" rows="10" id="tanggapan" name="tanggapan" placeholder="Berikan Tanggapan atas Laporan Masyarakat" value=""></textarea>
                          <?= form_error('tanggapan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                         <hr>

                          <div class="fixKau mt-2">
                               
                            <button type="submit" class="btn btn-primary btn-user btn-block mt-4 mb-4 text-uppercase" onclick="window.print();">
                              <h6 class="text-center text-uppercase">PRINT LAPORAN! </h6>
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