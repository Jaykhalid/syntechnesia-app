
    <!-- Konten Halaman -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-md-7">
            <h3 class="h3 mb-4 mt-3 text-gray-800"> <?= $title; ?> </h3> 
        </div>
        <a class="col-md-5 text-right" href="<?= base_url('admin'); ?>">
            <img src="<?= base_url('vendor/'); ?>sbadmin2/assets/image/brandName.png" width="250" class=" align-right mb-4 mt-3 text-right">
        </a>
      </div> 

      <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                    <div class="col-lg">
                      <div class="p-5">
                        <div class="text-center fixKau mb-4">
                          <h1 class="h4 text-regist mt-0">Tanggapan terhadap Laporan Pengaduan anda</h1>
                           
                        </div>
                        <form class="user mainFont" method="post" action=""> <!-- Too few arguments to function Petugas: -->
                      
                       <hr>

                        <div class="row mt-5">

                          <div class="col-md-3 mr-5 form-group text-left"> 
                             <label class="text-uppercase text-bold pr-4 pl-3"> # ID Laporan</label>
                             <input type="number" class="form-control form-control-user pl-4 pr-3 text-center" id="idLaporan" name="idLaporan" placeholder="" value="<?= $laporan['idLaporan']; ?>" readonly>
                          </div>

                          <div class="col-md-4 ml-2 mr-5 pl-5 form-group text-center"> 
                             <label class="text-uppercase text-bold pr-4 pl-4"> Tanggal Tanggapan </label>
                             <input type="text" class="form-control h3 form-control-user pl-2 text-center" id="tglTanggapan" name="tglTanggapan" placeholder="" value="<?= $tanggapan['tglTanggapan']; ?>" readonly>
                          </div>
                          

                          <div class="col-md-3 ml-5 form-group mb-4 text-right"> 
                             <label class="text-uppercase text-bold pr-4 pl-4"> # Nomor Validasi </label>
                             <input type="number" class="form-control form-control-user pl-4 pr-3 text-center" id="noValidasi" name="noValidasi" placeholder="" value="<?= $tanggapan['idTanggapan']; ?>" readonly>
                          </div>

                        </div>

                        <div class="form-group">
                          <textarea class="form-control mt-3" rows="17" id="isiLaporan" name="isiLaporan" placeholder="isi Tanggapan atas Laporan Pengaduan" readonly> <?= $tanggapan['tanggapan']; ?> </textarea>
                        </div>
                        
                        <hr class="mt-5 mb-5">
                        
                        <div class="row">
                          
                          <div class="col-md-5 pl-5 form-group text-center"> <label class="text-uppercase text-bold"> PELAPOR </label>
                             <input type="text" class="form-control form-control-user pl-4 pr-3 text-uppercase text-bold text-center" id="nmMasyarakat" name="nmMasyarakat" placeholder="" value="<?=$masyarakat['nama']; ?>" readonly>
                          </div>

                          <div class="col-md-2">

                          </div>

                          <div class="col-md-5 pl-5 form-group text-center"> <label class="text-uppercase text-bold"> DIVALIDASI OLEH </label>
                             <input type="text" class="form-control form-control-user pl-4 pr-3 text-uppercase text-bold text-center" id="nmPetugas" name="nmPetugas" placeholder="" value="<?=$petugas['nama']; ?>" readonly>
                          </div>

                        </div>

                        <hr class="mt-5 mb-5">

                          <div class="row fixKau mt-2">
                            <div class="col-md-6">
                            
                                <button type="submit" class="btn btn-danger h1 mt-4 mb-4 text-800">
                                    <i class="fas fa-2x fa-arrow-circle-left m-2"></i>
                                </button>
                            </div>
                            <div class="col-md-6 text-right">
                            
                                <button type="submit" class="btn btn-success h1 mt-4 mb-4 text-800">
                                    <i class="fas fa-2x fa-check-circle m-2"></i>
                                </button>
                            </div>
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