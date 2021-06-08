<?php if (!empty($this->session->userdata('ADMIN_ID'))) : ?>
    <!DOCTYPE html>
    <html lang="en">

    <?= @$head; ?>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <?= @$sidebar; ?>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?= @$topbar; ?>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <?= @$content; ?>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <?= @$footer; ?>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
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
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('admin/logout') ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Alert -->
        <?php $this->load->view('_FlashAlert\flash_alert.php') ?>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url() ?>assets/sb-admin-2/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url() ?>assets/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url() ?>assets/sb-admin-2/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?= base_url() ?>assets/sb-admin-2/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>assets/sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>assets/sb-admin-2/vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="<?= base_url() ?>assets/sb-admin-2/js/demo/datatables-demo.js"></script>

        <?php if (strtolower(uri_string()) == 'admin') : ?>
            <script>
                // Set new default font family and font color to mimic Bootstrap's default styling
                Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
                Chart.defaults.global.defaultFontColor = '#858796';

                // Pie Chart Example
                var ctx = document.getElementById("myPieChart");
                var myPieChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ["User", "Grup"],
                        datasets: [{
                            data: [<?= $jmluser[0]->jumlah; ?>, <?= $jmlgrup[0]->jumlah; ?>],
                            backgroundColor: ['#4e73df', '#1cc88a'],
                            hoverBackgroundColor: ['#2e59d9', '#17a673'],
                            hoverBorderColor: "rgba(234, 236, 244, 1)",
                        }],
                    },
                    options: {
                        maintainAspectRatio: false,
                        tooltips: {
                            backgroundColor: "rgb(255,255,255)",
                            bodyFontColor: "#858796",
                            borderColor: '#dddfeb',
                            borderWidth: 1,
                            xPadding: 15,
                            yPadding: 15,
                            displayColors: false,
                            caretPadding: 10,
                        },
                        legend: {
                            display: false
                        },
                        cutoutPercentage: 80,
                    },
                });
            </script>
        <?php endif; ?>
    </body>

    </html>

<?php else : ?>

    <?php

    $this->session->set_flashdata('error_flashData', 'Anda Harus Login!');
    redirect(base_url('admin/login'));
    ?>


<?php endif; ?>