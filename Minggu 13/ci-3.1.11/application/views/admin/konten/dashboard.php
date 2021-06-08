<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<!-- Content Row -->
<div class="row">

    <!-- First Column -->
    <div class="col-12 col-lg-5">

        <!-- Custom Text Color Utilities -->
        <div class="card shadow mb-4 h-100">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Program Minggu 13 - Login, Session, Cookies, and REST API</h6>
            </div>
            <div class="card-body text-dark">

                <h3>Selamat Datang</h3>
                <p class="lead"></p>
                <table>
                    <tr>
                        <td>Nama </td>
                        <td> : Vian Azis Tio Riwanto</td>
                    </tr>
                    <tr>
                        <td>NIM </td>
                        <td> : E31191848</td>
                    </tr>
                    <tr>
                        <td>Golongan </td>
                        <td> : C</td>
                    </tr>
                    <tr>
                        <td>File Praktikum </td>
                        <td> : <a class="btn on-hover" href="<?= base_url('admin/tabel/user') ?>">Tabel User</a> | <a class="btn on-hover" href="<?= base_url('admin/tabel/grup') ?>">Tabel Grup</a></td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

    <!-- Pie Chart -->
    <div class="col-12 col-lg-7">
        <div class="card shadow mb-4 h-100">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Jumlah Data</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Grup
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> User
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
