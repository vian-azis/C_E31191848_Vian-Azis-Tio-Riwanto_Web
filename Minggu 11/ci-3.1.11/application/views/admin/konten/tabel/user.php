<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-inline-flex w-100">
            <h5 class="m-0 font-weight-bold text-primary my-auto">Tabel User</h5>

            <!-- <button type="button" class="btn btn-primary shadow ml-auto" data-toggle="modal" data-target="#tambah">
                Tambah User
            </button> -->

            <button class="btn btn-primary btn-sm btn-icon-split shadow ml-auto" data-toggle="modal" data-target="#tambah">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Data</span>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Grup</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Grup</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($user as $row) : ?>
                        <tr>
                            <td><?= $row->id; ?></td>
                            <td><?= $row->username; ?></td>
                            <td><?= $row->nama; ?></td>
                            <td><?= $row->grup; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form autocomplete="off" action="<?= base_url('admin/tabel/user/tambah'); ?>" method="POST" id="formtambah" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLongTitle">Tambah Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-4 mb-3">
                            <label for="username" class="text-dark">Username</label>
                        </div>
                        <div class="col-8 mb-3">
                            <input required maxlength="10" type="text" class="form-control text-dark" id="username" name="username">
                        </div>

                        <div class="col-4 mb-3">
                            <label for="password" class="text-dark">Password</label>
                        </div>
                        <div class="col-8 mb-3">
                            <input required maxlength="6" type="password" class="form-control text-dark" id="password" name="password">
                        </div>

                        <div class="col-4 mb-3">
                            <label for="nama" class="text-dark">Nama</label>
                        </div>
                        <div class="col-8 mb-3">
                            <input required maxlength="50" type="text" class="form-control text-dark" id="nama" name="nama">
                        </div>

                        <div class="col-4 mb-3">
                            <label for="id_grup" class="text-dark">Grup</label>
                        </div>
                        <div class="col-8 mb-3">
                            <select required class="form-control rounded" name="id_grup" id="id_grup">
                                <option value="" selected disabled hidden>Pilih Grup User</option>
                                <?php
                                // Membuat option select otomatis
                                foreach ($grup as $row) {
                                    echo "<option value='" . $row->id_grup . "'>" . $row->grup . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Batal</button>
                    <button type="submit" class="btn btn-primary" id='Tambah' name='Tambah'>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>