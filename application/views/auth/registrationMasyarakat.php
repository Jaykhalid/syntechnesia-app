<br>
  <br>
<br>
  <br>
<br>
              <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto registPage mb-0">
                <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                    <div class="col-lg">
                      <div class="p-5">
                        <div class="text-center fixKau mb-4">
                          <h1 class="h4 text-regist mt-0">Buat Akunmu Disini!</h1>
                        </div>
                        <form class="user mainFont" method="post" action="<?= base_url('Masyarakat/registrationMasyarakat'); ?>">
                          <div class="form-group">
                            <input type="number" class="form-control form-control-user" id="nik" name="nik" placeholder="NIK" value="<?= set_value('nik'); ?>">
                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>
                          
                          <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>

                          <div class="form-group  row">
                            <div class="col-sm-6">
                              <div class="Genders text-uppercase">
                                GENDER &nbsp; :
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <select class="form-control cmb-genders" name="jkel" id="jkel" placeholder="Gender">
                              <option value = <?= form_dropdown('jkel', $Genders);  set_value('jkel'); ?> 
                              </select>
                            </div>
                          </div>
<hr>
                          <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>

                          <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                              <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                              <input type="password" class="form-control form-control-user" id="Password2" name="password2" placeholder="Ulangi Password">
                            </div>
                          </div>
<hr>
                          <div class="form-group">
                            <input type="textbox" class="form-control form-control-user" id="domisili" name="domisili" placeholder="Alamat / Domisili" value="<?= set_value('domisili'); ?>">
                            <?= form_error('domisili', '<small class="text-danger pl-3">', '</small>'); ?>
                          </div>

                           <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="text" class="form-control form-control-user" id="KOTA" name="KOTA" placeholder="KOTA">
                            </div>
                            <div class="col-sm-6">
                              <input type="text" class="form-control form-control-user" id="KodePos" name="KodePos" placeholder="Kode Pos">
                            </div>
                          </div>
<hr>
                           <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="telp" name="telp" placeholder="Nomor Telepon (Aktif)" value="<?= set_value('telp'); ?>">
                            <?= form_error('telp', '<small class="text-danger pl-3">', '</small>');?>
                          </div>
                          <div class="form-group">
                              <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="E-mail">
                              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
<hr>
                           <div class="fixKau">
                               
                            <button type="submit" class="btn btn-primary btn-user btn-block mt-4 text-uppercase">
                              Bikin Akun
                            </button>
                          </div>
                        </form>
<hr>
                        <div class="text-center mt-3 mb-2">
                        </div>
                        <div class="text-center mb-0">
                          <a class="small text-light link-registPetugas" href="<?= base_url("auth/registrationPetugas"); ?>">Buat Akun sebagai Petugas</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <br>