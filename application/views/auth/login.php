
<div class="container mainFont">

  <!-- Outer Row -->
  <div class="row justify-content-center mt-5">
    <div class="col-lg-8 mt-5">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="cols loginPage ">
            <div class="col-lg ">
              <div class="p-5">
                <div class="text-center fixKau mb-4">
                  <h1 class="h4 text-cyan mt-0">Portal &nbsp; Login</h1>
                </div>

                <?= $this->session->flashdata('message'); ?>

                <form class="user mt-0" method="post" action="<?= base_url('auth/login'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Enter Username Anda..." value="<?= set_value('username'); ?>">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="fixKau">
                    
                    <button type="submit" class="btn btn-primary btn-user btn-block mt-4 text-uppercase" href="<?= base_url(); ?>User/index">
                      Login
                    </button>
                  </div>
                </form>
               
                <div class="text-center loginBawah">
                </div>
                <div class="text-center">
                  <a class="small" href="<?= base_url(); ?>Masyarakat/registrationMasyarakat"> Buat akun mu!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

  <br>
    <br>
      <br>

