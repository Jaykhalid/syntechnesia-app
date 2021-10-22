        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase topHeadline font-weight-bold">Pelaporan & Pengaduan Masyarakat</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Syntechnesia hadir sebagai media layanan pengaduan Masyarakat yang terhubung langsung dengan Lembaga Pemerintahan. Dengan memegang prinsip komunikasi secara CTI <em>(Cepat Tanggap Integritas)</em> yang bertujuan untuk mempercepat proses penindakan atas suatu peristiwa atau masalah yang terjadi disekitar kehidupan berMasyarakat.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about"><i>Selengkapnya</i></a>
                    </div>
                </div>
            </div>
        </header>

        <!-- About-->
        <section class="row page-section bg-boxify" id="about">

            <div class="col-md-6 justify-content-left">
                <div class="text-left mt-0">
                    <img class="img-fluid" src="vendor/sbadmin2/assets/image/detaillust.png" alt="" />
                </div>
            </div>
            
            <div class="col-md-6 bg-primary">
                <div class="p-4 pb-6 text-right">
                    <h2 class="text-white mt-0">Sistem Informasi Laporan & Pengaduan Masyarakat berbasis Aplikasi Web </h2>
                    <hr class="detail light text-right my-4">
                    <dd class="text-white-50 mb-4">
                        <h5><em> SYNTECHNESIA </em></h5> 
                        adalah platform aplikasi pelaporan & pengaduan Masyarakat berbasis website,
                        yang memiliki tujuan untuk menyampaikan dan memvalidasi laporan-laporan yang telah disampaikan oleh Masyarakat dalam segala aspek bidang kehidupan, dan berfungsi sebagai media perantara antara masyarakat dengan pemerintah,
                        supaya laporan & pengaduan yang diajukan bisa tersampaikan dan ditangani langsung oleh Departemen Pemerintahan. 
                    </dd>
                    
                    <p class="text-white-50 mb-4">
                        Ayo Masyarakat! Mari kita mulai suarakan aspirasi, keluhan, laporan, dan pengaduan mengenai tatanan kehidupan berMasyarakat, berBangsa, dan berNegara secara fleksibel di <B> <em> SYNTECHNESIA </em> </B>
                    </p>
                    <a class="btn btn-how btn-xl js-scroll-trigger" href="#prosedur">Bagaimana Caranya?</a>
                </div>
            </div>
        </section>

        <!-- Services-->
        <section class="page-section" id="layanan">
            <div class="container">
                <h2 class="text-center mt-0">Prinsip Layanan Pengaduan Syntechnesia </h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-bullhorn text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Laporkan</h3>
                            <p class="text-muted mb-0">Fitur layanan utama dalam menyampaikan aspirasi masyarakat secara terbuka. Gunakan dengan bijak!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fab fa-4x fa-phoenix-squadron text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Cepat</h3>
                            <p class="text-muted mb-0">Laporan yang diajukan akan divalidasi & diverifikasi dengan cepat, akurat, dan terpercaya. secepat mata memandang.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-paper-plane text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Tanggap</h3>
                            <p class="text-muted mb-0">Kami akan selalu siap siaga dalam menanggapi berbagai pengaduan masyarakat secara intensif dan responsif!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-broadcast-tower text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Integritas</h3>
                            <p class="text-muted mb-0">Syntechnesia terintegrasi langsung oleh badan pemerintahan dan sistem keamanan yang terjamin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Portfolio-->
        <div class="bg-prosedur" id="prosedur" >
            <div class="text-center text-dark mt-0 mb-4"> <h2> Prosedur Sistem Syntechnesia </h2> <hr class="divider" /> </div>
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="<?= base_url('masyarakat/registrationMasyarakat'); ?>">
                            <img class="img-fluid" src="vendor/sbadmin2/assets/image/P1.png" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Registrasi Akun</div>
                                <div class="project-name">Buat akun STN mu sekarang! agar kamu bisa melakukan pengaduan dan membuat laporan secara terotorisasi. </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="<?= base_url('auth/login'); ?>">
                            <img class="img-fluid" src="vendor/sbadmin2/assets/image/P2.png" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Masuk</div>
                                <div class="project-name"> Masuk ke sistem otentikasi STN yang sudah terintegrasi dengan akun-mu. </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="<?= base_url('auth/login'); ?>">
                            <img class="img-fluid" src="vendor/sbadmin2/assets/image/P3.png" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"> Buat Laporan & Pengaduan </div>
                                <div class="project-name"> Ajukan laporan & pengaduan-mu sesuai kategori pengaduan yang ada dengan cermat, bijak, dan seksama! </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="<?= base_url('auth/login'); ?>">
                            <img class="img-fluid" src="vendor/sbadmin2/assets/image/P4.png" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">VALIDASI Laporan & VERIFIKASI Pengaduan</div>
                                <div class="project-name">
                                    Seluruh laporan & pengaduan yang telah diajukan akan divalidasi kebenarannya 
                                    dan juga akan diverifikasi apakah laporan tersebut nyata berdasarkan fakta atau tidak.
                                    <br/> Demi mencegah terjadinya persebaran HOAX di Lingkungan Siber Masyarakat Indonesia.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="<?= base_url('auth/login'); ?>">
                            <img class="img-fluid" src="vendor/sbadmin2/assets/image/PE5.png" alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Tanggapan atas Laporan & Pengaduan</div>
                                <div class="project-name">
                                    Apabila Laporan & Pengaduan sudah selesai di cek keaslian & kebenarannya,
                                    selanjutnya akan diberi Tanggapan atas Laporan & Pengaduan tersebut dan se-segera mungkin akan diteruskan ke Pemerintah.
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="">
                            <img class="img-fluid" src="<?= base_url('vendor/'); ?>sbadmin2/assets/image/P6.png" alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">SELESAI</div>
                                <div class="project-name">
                                    Laporan & Pengaduan anda sudah kami terima :)
                                    dan selanjutnya tinggal menunggu aksi dari pemerintah untuk menindaklanjutinya.
                                    Semoga Hari-harimu menyenangkan Masyarakat!
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to action-->
        <section class="row bg-dark text-white pb-4" id="login">

            <div class="col-md-6 mt-5 mb-4">
                <div class="text-left ml-4 mt-5 mb-4">
                    <h2 class="mb-4 pt-5">Sudah siap untuk melapor? &nbsp; Ayo Login!</h2>
                    <hr class="login" />
                    <p class="mt-5 text-info-login"> Untuk memudahkanmu dalam membuat laporan ataupun pengaduan di Syntechnesia dan berinteraksi dengan Petugas maupun Admin,
                        Kamu harus Login ke sistem terlebih dahulu, supaya identitas kamu terotentikasi & diverifikasi oleh sistem secara sah. 
                    </p>

                    <p class="mb-4 text-info-login">
                        Apabila kamu belum memiliki akun STN untuk Login dan membuat Laporan Pengaduan secara sah, kamu bisa melakukan Registrasi Akun (Pendaftaran) terlebih dahulu ya..
                        <br/>
                    </p>
                    <a class="btn btn-light btn-xl mr-4" href="<?= base_url('auth/login'); ?>">Masuk Sekarang!</a>
                    <a class="btn btn-primary btn-xl pl-5 pr-5" href="<?= base_url(); ?>Masyarakat/registrationMasyarakat"> Buat Akun </a>
                </div>
            </div>

            <div class="col-md-6 m-0 p-0">
                <div class="text-right mt-0">
                    <img class="img-fluid" src="vendor/sbadmin2/assets/image/illustrations/loginA.png" alt="" />
                </div>
            </div>
            
        </section>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Kontak Panggilan Darurat !!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Kami siap sedia membantu anda apabila terjadi kesalahan teknis ketika menggunakan Aplikasi atau menemukan bug error di sistem Syntechnesia. Hubungi atau kirim email kontak kami dibawah ini ketika anda membutuhkan bantuan darurat, kami akan sigap hadir untuk anda dalam menangani permasalahan tersebut se-segera mungkin!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div class="btn telepon d-block">+021 (777) 0101-1111-1010</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="btn btn-mail d-block" href="https://gmail.com">emaildarurat@syntechnesia.com</a>
                    </div>
                </div>
            </div>
        </section>