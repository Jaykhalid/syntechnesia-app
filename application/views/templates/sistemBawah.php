            <!-- Footer -->
            <footer class="sticky-footer bg-success">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span class="text-info">Copyright &copy; <?= date('Y'); ?> - <?= $apps; ?> </span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded bg-success" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin ingin Log Out?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url(); ?>auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('vendor/'); ?>sbadmin2/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('vendor/'); ?>sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->

    <!-- Custom scripts for all pages-->

    <!-- Page level plugins -->
    <script src="<?= base_url('vendor/'); ?>sbadmin2/vendor/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('vendor/'); ?>sbadmin2/js/demo/cokPie.js"></script>
    <script src="<?= base_url('vendor/'); ?>sbadmin2/js/demo/cakArek.js"></script>
    <script src="<?= base_url('vendor/'); ?>sbadmin2/js/demo/chart-bar-demo.js"></script>
    <script src="<?= base_url('vendor/'); ?>sbadmin2/js/demo/datatables-demo.js"></script>

    <!-- Page level custom scripts -->

</body>

</html>